<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $template = "v_main";
    public $title = null;
    public $keywords = null;
    public $description = null;
    public $css = array();
    public $js = array();
    
    
    public function before() {  
        parent::before();
            
        $this->css = array('template/css/style.css');
                    
        
        $header = View::factory('v_header')->set('css', $this->css)
                                            ->set('js',$this->js)
                                            ->set('title', $this->title)
                                            ->set('keywords',$this->keywords)
                                            ->set('description',$this->description);
        $this->template->set('header', $header);
        
        $footer = View::factory('v_footer');   
        $this->template->set('footer', $footer);
    }

   

}
