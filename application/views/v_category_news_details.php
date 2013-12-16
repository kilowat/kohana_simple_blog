<div class="contentCategory">
    <?if($news):?>
        <br>
        <h2><?=$news->name?></h2>
        <?=$news->body?><br>
        
<?endif;?>
</div><!-- .content-->

    

</div><!-- .container-->

    <?php
        foreach ($comment as $item){
            echo 'Дата'.$item->date.'<br>';
            echo 'Имя: '.$item->name.'<br>';
            echo 'Сообщение: '.$item->message.'<br>';
            
        }
    ?>

		