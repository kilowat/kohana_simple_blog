<?php
class Controller_Widjet_LastNews extends Controller_Widjet_Widjet{
    
    public $template = 'widjet/v_lastNews';
    
    function action_index(){
        
        $news = Model::factory('News')->get(1);
        $this->template->set('news', $news);
    }
    
}