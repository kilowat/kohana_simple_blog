<?php
class Controller_Widjet_Widjet extends Controller_Template{
    
    public function before() {
        parent::before();
        if($this->request->is_initial()){
            $this->redirect($this->request->referrer());
        }
    }
}