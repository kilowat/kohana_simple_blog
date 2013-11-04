<?php

class Controller_Index extends Controller_Main{
    
    
   
    public function before() {
        $this->title = 'Главная'; 
        
        parent::before();       
    }
    function action_index() { 
       $content = Model::factory('FileContent')->open('about.php');
       $lastNews = Request::factory('widjet/lastnews/index')->execute();
       $center = View::factory('v_index')->set('content', $content)
                                         ->set('lastNews', $lastNews );
    
       $this->template->set('center',$center);
    }
}

?>