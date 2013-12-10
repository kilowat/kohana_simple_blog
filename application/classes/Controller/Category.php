<?php
class Controller_Category extends Controller_Main{
    
   
      function action_view (){
     
        $pageParam = explode('_',$this->request->param('page'));
      
         $page = (int)end($pageParam);//номер страницы
         $catParam = $this->request->param('category');//параметр категория
         $orm = ORM::factory('News');
         $paginator =  new Paginator(2,$page, $catParam , $orm);
         $news = $paginator->select();
         $paginCount = $paginator->count();
          
      
       
     
        $category = ORM::factory('Category')->where('alias', '=', $catParam)->find();
        $catName = $category->title;
        
        $lastNews = Request::factory('widjet/lastnews/index')->execute();
        
        $center = View::factory('v_category_news')
                ->bind('catName', $catName)
                ->bind('news', $news)
                ->bind('paginCount', $paginCount)
                ->bind('lastNews', $lastNews);
                                                    
        
        
        $this->title = $catName;
        $header = View::factory('v_header')->set('css', $this->css)
                                            ->set('js',$this->js)
                                            ->set('title', $this->title)
                                            ->set('keywords',$this->keywords)
                                            ->set('description',$this->description);
        
        
        $this->template->set('center',$center)
                        ->set('header',$header);
                      
    }
    function action_details(){
        $param = $this->request->param('category');
        $arrParams= explode('/',$param);//алиас приходит последним параметром
        $alias = end($arrParams);
        
        $news = ORM::factory('News')->where('alias', '=', $alias)->find();
        $center = View::factory('v_category_news_details')->bind('news', $news);
        
        $this->title = $news->title;
        $header = View::factory('v_header')->set('css', $this->css)
                                            ->set('js',$this->js)
                                            ->set('title', $this->title)
                                            ->set('keywords',$this->keywords)
                                            ->set('description',$this->description);
        $this->template->set('header', $header);
        
        $this->template->set('center',$center)
                        ->set('header', $header);
        
    }
}

