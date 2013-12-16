<?php
    class Controller_Comments extends Controller_Template{
        public $template = "ajax/v_comments";
        
                
        function action_save(){
            if($this->request->is_ajax()){
                $name = arr::get($_POST, 'name');
                $message = arr::get($_POST, 'message');
                $news_id = arr::get($_POST, 'news_id');
                ORM::factory('Comment')->set('name', $name)
                                        ->set("message", $message)
                                        ->set("news_id", $news_id)
                                        ->set("date", time())
                                        ->save();
                echo json_encode('success');
            }else{
                echo 'не ajax =(';
            }
            
        }
        
        function action_reload(){
            $news_id = $this->request->param('id');
            $news = ORM::factory("News")->where("id", "=", $news_id)->find();
            
            $comment = $news->comments->find_all();
              $this->template->set("comment", $comment)->render();
             
             
            
        }
    }
