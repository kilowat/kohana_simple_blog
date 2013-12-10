<?php
class Controller_Widjet_TopMenu extends Controller_Widjet_Widjet{
    
    public $template = 'Widjet/TopMenu/v_topMenu';
   
    function action_index(){
       
        $tree = ORM::factory('Category');
        $this->template->bind('tree', $tree);
       
    }
}