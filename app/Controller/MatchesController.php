<?php
App::uses('AppController', 'Controller');
/**
 * Matches Controller
 *
 * @property Match $Match
 * @property PaginatorComponent $Paginator
 */
class MatchesController extends AppController {

	public function match_feed()
	{
		$this->Match->recursive = 0;
		//$this->set(compact('matches'));
		$this->layout=false;
		$this->set('matches', $this->Paginator->paginate());
		//print_r($abc);
		//echo $abc['matches']['Match']['title'];
	}

	public function json_display()
	{
		$this->autoRender=false;
		$content = file_get_contents('http://localhost/football/matches/match_feed');
		echo $tweets = json_decode( $content );
		var_dump($tweets);
	}

	public function match_list()
	{
		$this->Match->recursive = 0;
		$this->set('matches', $this->Paginator->paginate());
	}
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Match->recursive = 0;
		$this->set('matches', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Match->exists($id)) {
			throw new NotFoundException(__('Invalid match'));
		}
		$options = array('conditions' => array('Match.' . $this->Match->primaryKey => $id));
		$this->set('match', $this->Match->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Match->create();
			if ($this->Match->save($this->request->data)) {
				$this->Session->setFlash(__('The match has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.'));
			}
		}
		$contentTypes = $this->Match->ContentType->find('list');
		$leagues = $this->Match->League->find('list');
		$teamAs = $this->Match->TeamA->find('list');
		$teamBs = $this->Match->TeamB->find('list');
		$this->set(compact('contentTypes', 'leagues', 'teamAs', 'teamBs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Match->exists($id)) {
			throw new NotFoundException(__('Invalid match'));
		}
		if ($this->request->is('post') || $this->request->is('put')) 
		{
			$data = $this->request->data['Match'];
                if (!$data['play_position_image']['name']) 
                {
                    unset($data['play_position_image']);
                }


			if ($this->Match->save($data)) {
				$this->Session->setFlash(__('The match has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Match.' . $this->Match->primaryKey => $id));
			$this->request->data = $this->Match->find('first', $options);
		}
		$contentTypes = $this->Match->ContentType->find('list');
		$leagues = $this->Match->League->find('list');
		$teamAs = $this->Match->TeamA->find('list');
		$teamBs = $this->Match->TeamB->find('list');
		$this->set(compact('contentTypes', 'leagues', 'teamAs', 'teamBs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Match->id = $id;
		if (!$this->Match->exists()) {
			throw new NotFoundException(__('Invalid match'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Match->delete()) {
			$this->Session->setFlash(__('The match has been deleted.'));
		} else {
			$this->Session->setFlash(__('The match could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
