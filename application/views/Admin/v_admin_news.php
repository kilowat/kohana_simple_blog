Редактор новостей
<table class="table table-bordered table-striped">
  <tr>       
       <td style="width:15px">id</td>
       <td>Категория</td>
       <td>Алиас</td>
       <td>Название</td>
       <td>Дата изменения</td>
       <td>Кол-во комментов:</td>
       <td>Функции</td>
    </tr>
    <?if(!empty($news)):?>
    <?foreach ($news as $arrNews):?>  
    <tr>    
       <td style="width:15px"><?=$arrNews->id?></td>
       <td><?=$arrNews->title?></td>
       <td><?=$arrNews->alias?></td>
       <td><?=$arrNews->name?></td>
       <td><?=date("H:i:s",$arrNews->date)?></td>
       <td><?=$arrNews->total_comments?></td>
       
       <td><a href="/admin/news/edit/<?=$arrNews->id?>">edit</a> <a href="/admin/news/delete/<?=$arrNews->id?>">delete</a></td>
    </tr>
    <?endforeach;?>
<?endif;?> 
</table>



