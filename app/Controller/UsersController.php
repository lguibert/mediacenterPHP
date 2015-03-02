<?php

class UsersController extends AppController{   
    public function login() {
        echo $this->Auth->password('e');
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__("Identifiant ou mot de passe invalide"), $key='error');
            }
        }
    }
    
    public function hashPasswords($data) { 
        return $data; 
    } 

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    
    public function index(){
        $this->User->recursive = 0;
        $this->set("users", $this->paginate());
    }
}
