<?php
App::uses('AppModel', 'Model');
/**
 * Match Model
 *
 * @property ContentType $ContentType
 * @property League $League
 */
class Match extends AppModel {


	public function generate_json()
	{
		//return 'hello from generate_json method';
		$this->Match->recursive = 0;
		$this->set('matches', $this->Paginator->paginate());
	}

	function getItemsJson()
	{
			$url='http://localhost/football/matches/match_feed';
			$feed = file_get_contents($url);
			$json=json_decode($feed,true,512, JSON_BIGINT_AS_STRING);
			return $json;
			print_r($json);
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'play_position_image' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'play_position_image' => array(
            'processCoverUpload' => array(
                'rule' => 'processCoverUpload',
                'message' => 'Unable to process cover image upload.',
                'allowEmpty' => TRUE,
            ),
        ),
	);


    public function processCoverUpload($check = array()) 
    {
        if (!is_uploaded_file($check['play_position_image']['tmp_name'])) 
        {
            return FALSE;
        }
        if (!move_uploaded_file($check['play_position_image']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['play_position_image']['name'])) {
            return FALSE;
        }
        $this->data[$this->alias]['play_position_image'] = 'uploads' . DS . $check['play_position_image']['name'];
        return TRUE;
    }


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ContentType' => array(
			'className' => 'ContentType',
			'foreignKey' => 'content_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'League' => array(
			'className' => 'League',
			'foreignKey' => 'league_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TeamA' => array(
			'className' => 'Team',
			'foreignKey' => 'team_a',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TeamB' => array(
			'className' => 'Team',
			'foreignKey' => 'team_b',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
