<?php

class Model_Comment extends ORM{
    protected $_table_name = 'comments';
    protected $_belongs_to = array(
        'news'=>array(
            'model'=>'News',
            'foreign_key'=>'news_id'
        )
    );
}

