<div class="contentCategory">
    <h1>Раздел:<?=$catName?></h1>
    <?if($news):?>
    <?foreach ($news as $arrNews):?>
        <br>
        <h2><?=$arrNews->name?></h2>
        <?=$arrNews->body?><br>
        <a href="<?='/category/details/'.$arrNews->category->title.'/'.$arrNews->alias?>">Подробнее...</a>
        <hr>
    <?endforeach;?>
<?endif;?>
</div><!-- .content-->

    
<div class="pagintator">
<ul>
<?php
for($i = 1; $i<$paginCount+1;$i++){
    
    echo '<li><a href="/category/view/'.$catName.'/page_'.$i.'">'.$i.'</a></li>';
}
?>
    </ul>
</div>
</div><!-- .container-->

    

		