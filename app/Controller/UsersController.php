<?php

class UsersController extends AppController{
    /*public function login() {
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
    */
    
    public function safeData($data){
        $data = htmlspecialchars($data);
        if(preg_match("/", $data)){
            preg_replace("/", "\\\\", $data);
        }       
        
        return $data;
    }

    public function settings(){
        $this->autoRender = false;
        print_r(json_encode($this->getSettings()));
    }

    public function addSetting($category, $newFormat){
        $newFormat = $this->safeData($newFormat);
        $category = $this->getTypeName($this->safeData($category));
        if($newFormat != '' && $category != false){
            $formats = $this->getSetting($category);
            if(!in_array($newFormat, $formats)){
                $this->insertSetting($newFormat, $category);
                print_r("Ajout effectué.");
            }else{
                $this->response->statusCode(406);
                print_r("<strong>".h($newFormat)."</strong> est déjà enregistré.");
            }
        }else{
            $this->response->statusCode(406);                            
            print_r("Erreur dans les données envoyées.");
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
