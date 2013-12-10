<?php
class Controller_Admin_Index extends Controller_Admin_Main{
    
    public function before() {
        parent::before();
    }
    function action_index(){
       $center = View::factory('Admin/v_admin_index');
        $this->template->set('center', $center);
    }
}