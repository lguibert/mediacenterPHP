<?php
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class OrdererController extends AppController {
    
    public function checkDateOrdering(){
           $dir = new Folder(WWW_ROOT . 'files');
           $result = $dir->find('settings.json');            
           $file = new File($dir->pwd() . DS . $result[0]);
           $json = $file->read();
           $json = json_decode($json);
           $dateOrdering = new DateTime($json->dateOrdering);
           $now = new DateTime();
           $file->close();

           $diff = $now->diff($dateOrdering); 

           if($diff->h > 7){
               $this->Session->setFlash("FAUT TOUT RANGER  :C", $key='error');
           }else{
               $this->Session->setFlash("Tout est en ordre ! :)", $key='success');
           }
       }
}
