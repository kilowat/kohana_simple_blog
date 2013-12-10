<?php
class Controller_Admin_News extends Controller_Admin_Main{
    /*Load index page*/
    function action_index(){
        $news = ORM::factory('News')->find_all();
        $center = View::factory('Admin/v_admin_news')->set('news', $news);
        $this->template->set('center',$center);
    }
  /****************************************************************************************/
    function action_edit(){
       $id = $this->request->param('param');
        if($this->request->method()==='POST'){
            $news = Arr::extract($_POST, array('alias','name','preview','body','date','descriptions','keywords','cat_id','title'));
            
          ORM::factory('News',$id)->set('alias', $news['alias'])
                            ->set('name', $news['name'])
                            ->set('preview', $news['preview'])
                            ->set('body', $news['body'])
                            ->set('date', $news['date'])
                            ->set('descriptions', $news['descriptions'])
                            ->set('keywords', $news['keywords'])
                            ->set('cat_id', $news['cat_id'])
                            ->set('title', $news['title'])
                            ->update();
        }
        
        $news = ORM::factory('News')
                            ->where('id', '=', $id)
                            ->find();
        $listCat = ORM::factory('Category')->find_all();
        $center = View::factory('Admin/v_admin_news_edit')->bind('news', $news)
                                                            ->bind('listCat', $listCat);
        $this->template->set('center',$center);
        
    }
    /****************************************************************************************/
    /*Add new news*/
    function action_add(){
        $mptt = ORM::factory('Category');
        $listCat = $mptt->fulltree();
        
        $center = View::factory('Admin/v_admin_news_add')
                ->bind('listCat', $listCat)
                ->bind('error', $error);
        $this->template->set('center',$center);
         if($this->request->method()==='POST'){
            $news = Arr::extract($_POST, array('alias','name','preview','body','date','descriptions','keywords','cat_id','title'));
               
            try{
          ORM::factory('News')->set('alias', $news['alias'])
                            ->set('name', $news['name'])
                            ->set('preview', $news['preview'])
                            ->set('body', $news['body'])
                            ->set('date', $news['date'])
                            ->set('descriptions', $news['descriptions'])
                            ->set('keywords', $news['keywords'])
                            ->set('cat_id', $news['cat_id'])
                            ->set('title', $news['title'])
                            ->save();
             }  catch (ORM_Validation_Exception $e){
                 $error = $e->errors('validation');
             }
            
        }
    }
  /****************************************************************************************/
    /*delete news*/
    function action_delete(){      
            $id = $this->request->param('param');
            try{
                $news = ORM::factory('News')->where("id", "=", $id)->find();
                if($news->loaded()){
                    $news->delete ();
                    $this->redirect($this->request->referrer());
                }
                else {
                    echo $error = 'news with this id not find';
                }
            }catch(Database_Exception $e){
                echo $error = $e->getMessage();
            }
            
        
    }
}