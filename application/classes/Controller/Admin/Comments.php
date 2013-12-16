<?php

class Controller_Admin_Comments extends Controller_Admin_Main {
    
    
    function action_edit(){
        $id = $this->request->param('param');
        $comments = ORM::factory('Comment')->where("id", "=", $id)->find();
        $center = View::factory('admin/v_comments_edit')->bind('comments', $comments);
        $this->template->set('center', $center);
    }
}
