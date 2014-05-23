<?php
App::uses('AppModel', 'Model');
/**
 * Book Model
 *
 * @property Author $Author
 */
class Book extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Author' => array(
			'className' => 'Author',
			'foreignKey' => 'author_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $validate = array(
        'book_cover' => array(
            'processCoverUpload' => array(
                'rule' => 'processCoverUpload',
                'message' => 'Unable to process cover image upload.',
                'allowEmpty' => TRUE,
            ),
        ),
	);

    public function processCoverUpload($check = array()) {
        if (!is_uploaded_file($check['book_cover']['tmp_name'])) 
        {
            return FALSE;
        }
        if (!move_uploaded_file($check['book_cover']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['book_cover']['name'])) {
            return FALSE;
        }
        $this->data[$this->alias]['book_cover'] = 'uploads' . DS . $check['book_cover']['name'];
        return TRUE;
    }
}
