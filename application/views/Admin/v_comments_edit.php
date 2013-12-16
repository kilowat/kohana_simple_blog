<div clss="row">
    <div class="span-12">
        <div class="comment-edit">
            <?if(!empty($comments)):?>
                    <?=$comments->date?><br>
                    <input type = "text" name ="name" value ="<?=$comments->name?>"><br>
                    <textarea name = "message"><?=$comments->message?></textarea><br>
            <?endif?>
            <?=Form::submit("submit", "Сохранить")?>
        </div>
    </div>
</div>

