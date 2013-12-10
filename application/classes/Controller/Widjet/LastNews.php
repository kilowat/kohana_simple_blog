<?php
class Controller_Widjet_LastNews extends Controller_Widjet_Widjet{
    
    public $template = 'Widjet/News/v_lastNews';
    
    function action_index(){
        $limit = Kohana::$config->load('widjet.lastNews.limit');
        $order = Kohana::$config->load('widjet.lastNews.order');
        $order_colum = Kohana::$config->load('widjet.lastNews.order_colum');
        $news = ORM::factory('News')->limit($limit)
                                   ->order_by($order_colum, $order)
                                   ->find_all();
        $this->template->set('news', $news);
    }
    
}