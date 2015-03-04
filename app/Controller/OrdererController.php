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
        $films = [];
        $series = [];
        $musics = [];
        $others = [];
        
        for($i = 0; $i < count($files); $i++){
            if(preg_match('#\.mkv$|\.avi$#', $files[$i])){
                if(preg_match('#S[0-9]{1,2}E[0-9]{1,2}#', $files[$i])){
                    array_push($series, $files[$i]);
                }else{
                    array_push($films, $files[$i]);
                }                
            }else if (preg_match('#\.mp3$|\.flac$#', $files[$i])){
                array_push($musics, $files[$i]);
            }else{
                 array_push($others, $files[$i]);
            }
        }     
        
        $result = [$films, $series, $musics, $others];
        
       for($i = 0; $i < count($result); $i++){
           $count = count($result[$i]);
           
           $result[$i] = [$result[$i], $count];
       }
        
        return $result;
    }
}