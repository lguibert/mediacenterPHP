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
        $this->set('settingsJs', true);  
            
        $this->render("settings");
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    
    public function updateSettings(){
        $this->autoRender = false;
        
        if ($this->request->is('ajax')){            
            $action = $this->request->query['action'];
            switch($action):
                case 'add':
                    $this->addSetting($this->request);
                    return false;
                case 'delete':
                    $this->deleteSetting($this->request);
                    return false;
                default:
                    return false;
            endswitch;
        }
    }
    
    public function addSetting($request){
        $newFormat = $request->query['newFormat'];
        $type = $this->getTypeName($request->query['type']);     
        if($newFormat != '' && $type != false){
            $formats = $this->getSetting($type);
            if(!in_array($newFormat, $formats)){
                $this->insertSetting($newFormat, $type);
                $this->Session->setFlash("Ajout effectué", $key='success');
            }else{
                $this->Session->setFlash("<strong>".h($newFormat)."</strong> est déjà enregistré.", $key='error');
            }
        }else{
            $this->Session->setFlash("Erreur dans les données envoyées.", $key='error');
        }
    }
    
    public function deleteSetting($request){
        $type = $this->getTypeName($request->query['type']);
        $val = $request->query['val'];
        
        $formats = $this->getSetting($type);
        if(in_array($val, $formats)){
            $this->unsetSetting($val, $type);
            $this->Session->setFlash("Suprresion effectuée", $key='success');
        }else{
            $this->Session->setFlash("<strong>".$val."</strong> n'est pas valable.", $key='error');
        }
    }
    
    public function getTypeName($type){
        switch($type):
            case 'video':
                return 'videoFormats';
            case 'audio' :
                return 'audioFormats';
            case 'folder' :
                return 'folders';
            default:
                return false;
        endswitch;
    }
}
