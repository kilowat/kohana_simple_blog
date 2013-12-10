Редактор новостей
<table class="table table-bordered table-striped">
  <tr>       
       <td style="width:15px">id</td>
       <td>Категория</td>
       <td>Алиас</td>
       <td>Название</td>
       <td>Дата изменения</td>
       <td>Функции</td>
    </tr>
    <?if(!empty($news)):?>
    <?foreach ($news as $arrNews):?>  
    <tr>    
       <td style="width:15px"><?=$arrNews->id?></td>
       <td><?=$arrNews->category->title?></td>
       <td><?=$arrNews->alias?></td>
       <td><?=$arrNews->name?></td>
       <td><?=$arrNews->date?></td>
       <td><a href="/admin/news/edit/<?=$arrNews->id?>">edit</a> <a href="/admin/news/delete/<?=$arrNews->id?>">delete</a></td>
    </tr>
    <?endforeach;?>
<?endif;?> 
</table>



