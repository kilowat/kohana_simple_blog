<?php
/*generate nested set tree for module Mptt ORM
 * call MpttMenu::render($obj)
*/
class MpttMenu{
    
   static function render($tree,$selected='',$parent = 0){
       
       foreach ($tree->fulltree() as $arrTree){
        $categories[] = array('id'=>(int)$arrTree->id,
                            'name'=>$arrTree->title,
                            'parent'=>(int)$arrTree->parent_id,
                            'alias'=>$arrTree->alias);
        }

        $cats = array();
        
        foreach($categories as &$category)
            $cats[$category['parent']][] = $category;
            unset($categories);
            $obj =  new MpttMenu();
            return $obj->standartCategory($cats, $selected, $parent);
                    
    }
  
    protected function standartCategory(&$categories,$selected,$parent){

                if (!isset($categories[$parent])) return array('',0);
                $html = '';
                $haveSelected = 0;
                foreach($categories[$parent] as $category) {
                    list($childHtml,$isVisible)   = $this->standartCategory($categories,$selected,$category["id"]);
/*
                    $isSelected = $category['id']===$selected;
                    if (! ($isSelected)) { 
                        $html .= '<li>'.$category['name'].'</li>';
                        continue;
                    }

                    $haveSelected |= $isVisible | $isSelected;
*/                   if($category['alias']){
                        $html  .= '<li><a href="/category/view/'.$category['alias'].'">'.$category['name'].'</a>'.$childHtml.'</li>';
                
                    }else{
                        $html  .= '<li><a href="/category/view/'.$category['id'].'">'.$category['name'].'</a>'.$childHtml.'</li>';
                    }
            }

                return  $parent ? array('<ul class="sub">'.$html.'</ul>',$haveSelected) : '<ul id="jMenu">'.$html.'</ul>';
    }




//echo standartCategory($cats,$selected);

//////////////////////////////////////////////////////////////////////////////


       
    
}
