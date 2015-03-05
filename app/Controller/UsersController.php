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
            
         $this->render("settings");
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}
