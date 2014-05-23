<?php
App::uses('AppModel', 'Model');
/**
 * League Model
 *
 * @property Match $Match
 */
class League extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array

 */
public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'logo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'logo' => array(
            'processCoverUpload' => array(
                'rule' => 'processCoverUpload',
                'message' => 'Unable to process cover image upload.',
                'allowEmpty' => TRUE,
            ),
        ),
	);


    public function processCoverUpload($check = array()) {
        if (!is_uploaded_file($check['logo']['tmp_name'])) 
        {
            return FALSE;
        }
        if (!move_uploaded_file($check['logo']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['logo']['name'])) {
            return FALSE;
        }
        $this->data[$this->alias]['logo'] = 'uploads' . DS . $check['logo']['name'];
        return TRUE;
    }
	public $hasMany = array(
		'Match' => array(
			'className' => 'Match',
			'foreignKey' => 'league_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
