<?php
class Controller_Admin_Page extends Controller_Admin_Main{
    
    function action_add() {
        
        $fileName = $this->request->param('param');
        if($this->request->method()==='POST'){
            $news = Arr::extract($_POST, array('alias','name','preview','body','date','descriptions','keywords'));
            $news['id'] =$id;
          ORM::factory('News',$news['id'])->set('alias', $news['alias'])
                            ->set('name', $news['name'])
                            ->set('preview', $news['preview'])
                            ->set('body', $news['body'])
                            ->set('date', $news['date'])
                            ->set('descriptions', $news['descriptions'])
                            ->set('keywords', $news['keywords'])
                            ->update();
        }
        
        $news = ORM::factory('New')->find($id);
        $center = View::factory('Admin/v_admin_news_edit')->bind('news', $news);
        $this->template->set('center',$center);
        
    }
            
        //Model::factory('FileContent')->save($fileName,$fileContent);
    
}