<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?if(!empty($title)) {echo $title;}?></title>
        <meta name="keywords" content="<?if(!empty($keywords)) { echo $keywords;}?>" />
        <meta name="description" content="<?if(!empty($description)){ echo $description;}?>" />
        
        <?if(!empty($css)):?>
           <?foreach($css as $arCss):?>
            <link rel="stylesheet" href="<?=$arCss?>" type="text/css" />
            <?endforeach?>
        <?endif?>
            
       <?if(!empty($js)):?>
         <?foreach($js as $arJs):?>          
                <script type="text/javascript" src="<?=$arJs?>"></script>
         <?endforeach?>
       <?endif?>
</head>