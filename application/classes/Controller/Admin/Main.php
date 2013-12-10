<?php
class Controller_Admin_Main extends Controller_Template{
    
    public $auth;
    public $template = 'Admin/v_admin_main';
    public $error = null;


    public function before() {
        parent::before();
        $this->auth = Auth::instance();
        
        if(!$this->auth->logged_in('admin')){
            $this->redirect('Admin/auth/login');
        }
       
    }
    function action_index(){
        
    }
    
}