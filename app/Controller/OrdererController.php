<?php
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class OrdererController extends AppController {    
    public function checkDateOrdering(){
        $json = $this->getSettings();
        
        $dateOrdering = new DateTime($json->dateOrdering);
        $now = new DateTime();
        
        $diff = $now->diff($dateOrdering); 

        if($diff->h > 7){
            $this->Session->setFlash("FAUT TOUT RANGER  :C", $key='error');
        }else{
            $this->Session->setFlash("Tout est en ordre ! :)", $key='success');
        }
    }
    
    public function getSettings(){
        $dir = new Folder(WWW_ROOT . 'files');
        $result = $dir->find('settings.json');            
        $file = new File($dir->pwd() . DS . $result[0]);
        $json = json_decode($file->read());
        $file->close();
        
        return $json;
    }
    
    public function openFolder(){
        $json = $this->getSettings();
        
        $dir = new Folder($json->folder);
        $files = $dir->findRecursive();
        $final = [];
        
        for($i = 0; $i < count($files); $i++){
            if(preg_match('#\.mkv$|\.avi$#', $files[$i])){
                array_push($final, $files[$i]);
            }
        }     
        
        return $final;
    }
    
    
    
}
