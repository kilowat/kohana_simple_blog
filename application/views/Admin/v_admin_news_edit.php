<div class="row">
    <div class="span-8">
        <form action="/admin/news/edit/<?=$news->id?>" method="post">
               <select name="cat_id">
        <?foreach ($listCat as $list):?>
        <option value="<?=$list->id?>">
            <?=str_repeat('-', 1*$list->lvl).$list->title?></option>
        <?endforeach?>
        </select><br>
            <input type="text" name="alias" value="<?=$news->alias?>">Алиас<br>
            <input type="text" name="name" value="<?=$news->name?>">Название<br>
            <input type="text" name="title" value="<?=$news->title?>">title<br>
             <input type="text" name="keywords" value="<?=$news->keywords?>">Kewords<br>
             <input type="text" name="descriptions" value="<?=$news->descriptions?>">Description<br>
         
             <textarea name="preview" style="width: 500px" rows="10" cols="100"><?=$news->preview?></textarea>Превью<br> 
              <textarea name="body" style="width: 500px" rows="10" cols="100"><?=$news->body?></textarea>Текст<br> 

        <?php echo form::button('test', 'отправить')?>
        </form>
     </div>
    <div class="span-4">
        <b>Комменты:</b><br>
         <?if(!empty($comments)):?>
            <?foreach ($comments as $item):?>
                <a href="/admin/comments/edit/<?=$item->id?>"><?=$item->name?></a><br>
            <?endforeach?>
         <?endif?>
    </div>
</div>