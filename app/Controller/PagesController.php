<?php

class PagesController extends AppController {

        public function checkDateOrdering(){
            $json = json_decode(file_get_contents("/webroot/files/settings.json"), true);
            
            $date = $this->Session->read("dateOrdering");
            if(!$date){
                $this->Session->setFlash("NEED TO DO THE ORDERING", $key='error');
                //traitement
                $this->Session->write("dateOrdering",date('d-m-Y G:i:s'));
            }else{
                $this->Session->setFlash($this->Session->read("dateOrdering"), $key='success');
                $this->Session->delete("dateOrdering");
            }
        }
        
        public function home(){     
            $this->checkDateOrdering();
            $this->render("home");
        }
}
