<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'home'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );
    
    public function beforeFilter() {
        //$this->Auth->allow('','add','index');
    }
}
