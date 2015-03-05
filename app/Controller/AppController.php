<?php

App::uses('Controller', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'home'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );
    
    public function beforeFilter() {
        //$this->Auth->allow('add');
    }
    
        
    public function getSettings(){
        $dir = new Folder(WWW_ROOT . 'files');
        $result = $dir->find('settings.json');            
        $file = new File($dir->pwd() . DS . $result[0]);
        $json = json_decode($file->read());
        $file->close();
        
        return $json;
    }
}
