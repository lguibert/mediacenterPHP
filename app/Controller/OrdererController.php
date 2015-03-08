<?php
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
    
    public function openFolder(){
        $json = $this->getSettings();
        
        $dir = new Folder($json->folders[0]);
        $files = $dir->findRecursive();
        $movies = $series = $musics = $others = [];
        
        $videosPattern = $this->createSearchPattern($json->videoFormats);
        $audioPattern = $this->createSearchPattern($json->audioFormats);
        
        for($i = 0; $i < count($files); $i++){
            $name = $this->deletePath($json->folders[0], $files[$i]);
            if(preg_match($videosPattern, $name)){ //test fichier video
                if(preg_match('#[Ss][0-9]{1,2}[Ee][0-9]{1,2}|[Ss]0[0-9]{1}|[Ss][0-9]{1,2} [EP][0-9]{1,2}#', $name)){ //test series
                    array_push($series, $name);
                }else{
                    array_push($movies, $name);//sinon film
                }                
            }else if (preg_match($audioPattern, $name)){//test fichier audio
                array_push($musics, $name);
            }else{
                 array_push($others, $name); //sinon autre
            }
        }     
        
        $result = [$movies, $series, $musics, $others];
        
       for($i = 0; $i < count($result); $i++){
           $count = count($result[$i]);
           
           $result[$i] = [$result[$i], $count];
       }
        
        return $result;
    }
    
    public function createSearchPattern($types){ //$types = ['format','format'...]
        $pattern = '#';        
        
        foreach($types as $i=>$format){
            $pattern = $pattern . $this->serializeFormat($format); 
            
            if($i != count($types)-1){
              $pattern = $pattern  . "$|";
            }            
        }        
        
        $pattern = $pattern."$#";
        
        return $pattern;
    }
    
    public function serializeFormat($format){
        return "\.".$format;
    }
    
    public function deletePath($path, $string){
        $name =  str_replace($path."\\", "", $string);        
        return $name;
    }
}