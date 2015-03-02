<?php
class PagesController extends AppController {         
        public function checkDateOrdering(){
            $this->requestAction('/Orderer/checkDateOrdering/');
        }
    
        public function home(){     
            //$this->checkDateOrdering();
            $files = $this->requestAction('/Orderer/openFolder/');
            $count = count($files);
            $this->set(compact('files', $files));
            $this->set(compact('count', $count));
            $this->render("home");
        }
}
