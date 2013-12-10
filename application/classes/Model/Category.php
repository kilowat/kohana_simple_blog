<?php
class Model_Category extends ORM_MPTT {
    protected $_table_name = 'categories';
    protected $_has_many = array(
    'news' => array(
        'model'       => 'News',
        'foreign_key' => 'cat_id',
    ),
);
}