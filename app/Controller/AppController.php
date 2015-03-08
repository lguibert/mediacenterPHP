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
        $this->set('settingsJs', false);  
    }
    
        
    public function getSettings(){
        $dir = new Folder(WWW_ROOT . 'files');
        $result = $dir->find('settings.json');            
        $file = new File($dir->pwd() . DS . $result[0]);
        $json = json_decode($file->read());
        $file->close();
        
        return $json;
    }
    
    public function getSetting($setting){
        $json = $this->getSettings();
        return $json->$setting;
    }
    
    public function insertSetting($setting, $type){
        $dir = new Folder(WWW_ROOT . 'files');
        $result = $dir->find('settings.json');            
        $file = new File($dir->pwd() . DS . $result[0]);
        $json = json_decode($file->read());     
        
        array_push($json->$type, $setting);
        
        $file->write(json_encode($json));
        $file->close();
    }
    
    public function unsetSetting($val, $type){
        $dir = new Folder(WWW_ROOT . 'files');
        $result = $dir->find('settings.json');            
        $file = new File($dir->pwd() . DS . $result[0]);
        $json = json_decode($file->read());     
                
        $json->$type = array_diff($json->$type, [$val]);
        
        $file->write(json_encode($json));
        $file->close();
    }
}
