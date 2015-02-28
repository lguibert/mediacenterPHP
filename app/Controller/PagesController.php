<?php
class PagesController extends AppController {   
        
        public function checkDateOrdering(){
            $this->requestAction('/Orderer/checkDateOrdering/');
        }
    
        public function home(){     
            $this->checkDateOrdering();
            $this->render("home");
        }
}
