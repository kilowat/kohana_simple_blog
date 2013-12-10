категории
<form action="/admin/category/add" method="post">
<select name="category">
    <option value="" selected>Добваить категорию</option>
    <?foreach ($listCat as $list):?>
    <option value="<?=$list->id?>">
        <?=str_repeat('-', 1*$list->lvl).$list->title?></option>
    <?endforeach?>
</select>
    <input type="text" name="catTitle">
    <input type="submit">
</form>
