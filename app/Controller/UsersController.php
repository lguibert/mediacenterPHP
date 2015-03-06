<?php

class UsersController extends AppController{   
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__("Identifiant ou mot de passe invalide"), $key='error');
            }
        }
    }
    
    public function settings(){
        $json = $this->getSettings();
        
        $this->set(compact('json', $json));
        $this->set('addJs', true);  
            
        $this->render("settings");
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    
    public function updateSettings(){
        $this->autoRender = false;
        
        if ($this->request->is('ajax')){
            $newFormat = $this->request->query['newFormat'];
            $type = $this->getTypeName($this->request->query['type']);
            
            if($newFormat != '' && $type != false){
                $this->updateSetting($newFormat, $type);
            }
                  
        }else{
            $newFormat = 'test';
            //$type = $this->request->query['type'];
            
            $this->updateSetting($newFormat);
            
            return $this->redirect(array('controller' => 'users', 'action' => 'settings'));
        }        
    }
    
    public function getTypeName($type){
        switch($type):
            case 'video':
                return 'videoFormats';
            case 'audio' :
                return 'audioFormats';
            default:
                return false;
        endswitch;
    }
}
