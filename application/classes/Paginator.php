<?php

Class Paginator {
    
    protected $_count;//Элементов на страницу
    protected $_id;//номер страницы
    protected $_orm;// объект орм
    protected $_category;//алиас разбиваймой категории



    public function __construct($count = 10, $id = 1, $category = null ,ORM $orm = null) {
        if($count <=0){
           $count = 1;
        }
        if(empty($id)){
            $id=1;
        }
        $this->_count = (int)$count;
        $this->_id = $id;
        $this->_orm = $orm;
        $this->_category = $category;
        if($orm === null){
            exit;
        }
    }
    
    function select(){
        $id = ORM::factory("Category")->where("alias", "=", $this->_category)->find();
                
        if($this->_category !== null){
            if($this->_id!==0){
                $paginator = $this->_orm->where("cat_id", "=", $id->id)->limit($this->_count)->offset(($this->_id*$this->_count)-$this->_count)->find_all();
            }else{
                $paginator  = $this->_orm->where("cat_id", "=", $id->id)->find_all();
            }   
        }else{
        
            if($this->_id!==0){
                $paginator  = $this->_orm->limit($this->_count)->offset(($this->_id*$this->_count)-$this->_count)->find_all();
            }else{
                $paginator  = $this->_orm->find_all();
            }
            
        }
        return $paginator ;
    }
    
        
     function count(){
         return  $this->_orm->count_all()/$this->_count;
     } 
    
}
