<?php
class Controller_Admin_Category extends Controller_Admin_Main{
    
    function action_index() {
    
     $mptt = ORM::factory('Category');
     $listCat = $mptt->fulltree();
     $center = View::factory('Admin/v_admin_category')->bind('listCat', $listCat);
     $this->template->set('center',$center);
    
    
    }
    function action_add(){
        
        if($this->request->method()==='POST'){
            $mptt = ORM::factory('Category');
            $value = arr::get($_POST, 'category');
            $title = arr::get($_POST, 'catTitle');
            if(!$value){
                $mptt->title = $title;
                $mptt->make_root();
                $this->redirect($this->request->referrer());
                
                
            }
            $mptt->title = $title;
            $mptt->insert_as_last_child($value);
        }
    
       
     }   
}