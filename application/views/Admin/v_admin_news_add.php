<div class="row">
<div>Ошибки</div>
<?if($error):?>
    <?foreach ($error as $arrErorr):?>
        <?=$arrErorr?><br>
    <?endforeach?>
<?endif?>

    <form action="/admin/news/add" method="post">
        <select name="cat_id">
    <?foreach ($listCat as $list):?>
    <option value="<?=$list->id?>">
        <?=str_repeat('-', 1*$list->lvl).$list->title?></option>
    <?endforeach?>
    </select><br>
        <input type="text" name="alias" value="">Алиас<br>
        <input type="text" name="name" value="">Название<br>
        <input type="text" name="title" value="">title<br>
         <input type="text" name="keywords" value="">Kewords<br>
         <input type="text" name="descriptions" value="">Description<br>
         <textarea name="preview" style="width: 500px" rows="10" cols="100"></textarea>Превью<br> 
          <textarea name="body" style="width: 500px" rows="10" cols="100"></textarea>Текст<br> 
    
    <?php echo form::button('test', 'отправить')?>
    </form>
 
</div>