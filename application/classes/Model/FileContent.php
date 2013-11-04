<?php

class Model_FileContent extends Model {
    
    function save($fileName, $fileContent){
        Content::fcontent($fileName, $fileContent)->save();
    }
    
    function open($fileName){
        
        return Content::fcontent($fileName)->open();
    }
}

