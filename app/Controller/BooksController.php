<?php
App::uses('AppController', 'Controller');
/**
 * Books Controller
 *
 * @property Book $Book
 * @property PaginatorComponent $Paginator
 */
class BooksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $paginator_settings= array('limit'=>3); // set pagination limit

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->Book->recursive = 0;
		$this->Paginator->settings=$this->paginator_settings; // use this line to use pagination
		//$this->Paginator->sort('id');
		$this->set('books', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
		$this->set('book', $this->Book->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Book->create();
			// if ($this->Book->save($this->request->data)) {
			// 	$this->Session->setFlash(__('The book has been saved.'));
			// 	return $this->redirect(array('action' => 'index'));
			// }
			$data=$this->request->data['Book'];
			if ($this->Book->save($data))
			{
				$this->Session->setFlash(__('The book has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}


			 else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		}
		$authors = $this->Book->Author->find('list');
		$this->set(compact('authors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
			$this->request->data = $this->Book->find('first', $options);
		}
		$authors = $this->Book->Author->find('list');
		$this->set(compact('authors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Book->delete()) {
			$this->Session->setFlash(__('The book has been deleted.'));
		} else {
			$this->Session->setFlash(__('The book could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function add_to_cart($id=null)
	{
		//Reading count for shopping cart
		$shopping_cart_item=$this->Session->read('shopping_cart') ;
		$counter=count($shopping_cart_item);

		//Adding to Session ('shopping_cart')
		$book_data=$this->Book->read(null,$id);
		$this->Session->write('shopping_cart.'.$counter,$book_data );


		$this->Session->write('shopping_counter',$counter+1);
		$this->Session->setFlash('Book added to shopping cart');

		$this->redirect('/books/index');
	}

	function view_cart()
	{
		$cart=$this->Session->read('shopping_cart');
		$this->set(compact('cart'));
	}

	function delete_from_cart($key=null)
	{
		//Delete from Shopping Cart Session
		$this->Session->delete('shopping_cart.'.$key);


		$counter=$this->Session->read('shopping_counter');
		$this->Session->write('shopping_counter',$counter-1);
		$this->Session->setFlash('Cart Item Deleted');
		$this->redirect('/books/view_cart/');

	}

	function empty_cart() 
    {
        //delete cart with all elements and counter
        $this->Session->delete('shopping_cart');
        
        $this->Session->delete('shopping_counter');
        $this->redirect(array('controller' => 'Books', 'action' => 'index'));
    }

	// Shopping cart...
    // public function add_to_cart($id = null) 
    // {
    // 	$this->Book->id = $id;
   	// 	//check if Book exists in database
  		// if (!$this->Book->exists()) 
  		// {
    //     	throw new NotFoundException(__('Invalid Book'));
    // 	}

    //     //check if prodocut is in a cart
    //     $BooksInCart = $this->Session->read('Cart');
    //     $alreadyIn = false;
    //     foreach ($BooksInCart as $BookInCart) 
    //     {
    //         if ($BookInCart['Book']['id'] == $id) 
    //         {
    //             $alreadyIn = true;
    //         }
    //     }
    //     //if Book isn't in a cart add it and set counter value
    //     if (!$alreadyIn) 
    //     {
    //         $amount = count($BooksInCart);
    //         $this->Session->write('shopping_cart.' . $amount, $this->Book->read(null, $id));
    //         $this->Session->write('Counter', $amount + 1);
    //         $this->Session->setFlash(__('Book added to cart'));
    //     } 
    //     else 
    //     {
    //         $this->Session->setFlash(__('Book already in cart'));
    //     }


    //     $this->redirect(array('controller' => 'Books', 'action' => 'index'));
    // }

 //    public function cart_delete($id = null) 
 //    {
 //        if (is_null($id)) {
 //            throw new NotFoundException(__l('Invalid request'));
 //        }
 //        //delete Book from cart
 //        if ($this->Session->delete('Cart.' . $id)) 
 //        {
 //            //sort cart elements 
 //            $cart = $this->Session->read('Cart');
 //            sort($cart);
 //            $this->Session->write('Cart', $cart);
 //            //updeate counter
 //            $this->Session->write('Counter', count($cart));
 //            $this->Session->setFlash('Book has been deleted');
 //        }
 //        return $this->redirect(array('action' => 'cart'));
 //    }

 //    public function cart() 
 //    {
 //        //show all elemnts in a cart
 //        $cart = array();

 //        if ($this->Session->check('Cart')) 
 //        {
 //            $cart = $this->Session->read('Cart');
 //        }

 //        $this->set(compact('cart'));
 //    }

 //    public function empty_cart() 
 //    {
 //        //delete cart with all elements and counter
 //        $this->Session->delete('Cart');
 //        $this->Session->delete('Counter');
 //        $this->redirect(array('controller' => 'Books', 'action' => 'index'));
 //    }

}

