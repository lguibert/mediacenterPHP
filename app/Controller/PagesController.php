<?php
class PagesController extends AppController {   
        public function checkDateOrdering(){
            $this->requestAction('/Orderer/checkDateOrdering/');
        }
    
        public function home(){     
            //$this->checkDateOrdering();
            $files = $this->requestAction('/Orderer/openFolder/');
            $countGlobal = 0;
            
            foreach ($files as $file){
                $countGlobal = $countGlobal + count($file[0]);
            }
            
            
            $this->set('films', $files[0]);
            $this->set('series', $files[1]);
            $this->set('musics', $files[2]);
            $this->set('others', $files[3]);
            $this->set(compact('countGlobal', $countGlobal));
            $this->render("home");
        }
}
