<?php
class Model_News extends ORM{
    
    protected $_table_name = 'news';
    
    protected $_belongs_to = array(
    'category' => array(
        'model'       => 'Category',
        'foreign_key' => 'cat_id',
    ),
);
     
    function rules() {
        return array(
            'name'=>array(
                array('not_empty')                    
            ),
            'alias'=>array(
                array(array($this,'alias_unique'),array(':field',':value'))
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