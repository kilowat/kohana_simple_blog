<? foreach($news as $arrNews):?>
<a href="<?='/category/details/'.$arrNews->category->title.'/'.$arrNews->alias?>"><?=$arrNews->name?></a><br>
<?endforeach?>
