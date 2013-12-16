<?php
class Model_News extends ORM{
    
    protected $_table_name = 'news';
    
    protected $_belongs_to = array(
    'category' => array(
        'model'       => 'Category',
        'foreign_key' => 'cat_id',
     ),
    );
    protected $_has_many = array(
      'comments'=>array(
          'model'=>'Comment',
          'foreign_key'=>'news_id'
      )  
    );
      
    function allNews(){      
      $result = DB::select('news.*','categories.title',DB::expr('COUNT(`comments`.`id`) AS total_comments'))
                ->from("news")
                ->join("comments", "LEFT")        
                ->on("news.id", "=", "comments.news_id")
                ->join("categories", "LEFT")        
                ->on("news.cat_id", "=", "categories.id")
                ->group_by("news.name")
                ->as_object()->execute();                     
            return $result;
    }
    function rules() {
        return array(
            'name'=>array(
                array('not_empty')                    
            ),
            'alias'=>array(
                array(array($this,'alias_unique'),array(':field',':value')),
                array('not_empty')
            )
        );
    }
    
    function filters() {
        return array();
    }
    function labels() {
        return array(
                'name'=>'Название',
                'alias'=>'Алиас'
                
        );
    }
    
    function alias_unique($field, $value) {
        $page = ORM::factory($this->_object_name)
                ->where($field, '=', $value)
                ->and_where($this->_primary_key, '!=', $this->pk())
                ->find();
                if($page->pk()){
                    return false;
                }
    }
}