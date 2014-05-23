<?php
	App::uses('AppModel', 'Model');
	App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

	class User extends AppModel 
	{
		var $displayField="username";
		public function beforeSave($options = array()) {
		    if (isset($this->data[$this->alias]['password'])) {
		        $passwordHasher = new SimplePasswordHasher();
		        $this->data[$this->alias]['password'] = $passwordHasher->hash(
		            $this->data[$this->alias]['password']
		        );
		    }
		    return true;
		}

	    
		public $validate = array(
			'username' => array(
				'required' => array(
					'rule'=>array('notEmpty'),
					'message' => 'Username is Required',
				)
			),
		);
	}
