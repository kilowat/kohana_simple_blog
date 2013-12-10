<?php
class Controller_Admin_Auth extends Controller_Template{
    
    public $template='Admin/v_admin_login';
    
    function action_login(){
   /*   
    $model = ORM::factory('user');
    $model->values(array(
    'username' => 'admin',
    'password' => 'admin',
    'password_confirm' => 'admin',
        'email' => 'your@email.com',
));
$model->save();
$model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
$model->add('roles', ORM::factory('role')->where('name', '=', 'admin')->find());
     */
      
       if($this->request->method()==='POST'){
            
            $login  = arr::get($_POST,'username');
            $password = arr::get($_POST,'password');
            if (Auth::instance()->login($login, $password )){
               $user = Auth::instance()->get_user();
               $this->redirect(Route::get('admin')->uri());
            }else{
                echo 'не залогинен';
               
                
                 }
        
              
                                 
       }
       
    }
    function action_logout(){
        Auth::instance()->logout();
    }
}