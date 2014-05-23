<?php
App::uses('Controller', 'Controller');

class AuthController extends Controller 
{

    public $components = array('DebugKit.Toolbar','Session','Auth');

    function beforeFilter()
    {
    	parent::beforeFilter();
    	$this->Auth->allow('index');
    }
}
