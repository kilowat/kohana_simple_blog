<?if (!empty($comment)):?>
         <?foreach($comment as $item):?>
            <div class="comment-list">
                <a>Дата:<?=$item->date?></a><br>
                <a>Имя:<?=$item->name?></a><br>
                <a>Сообщение<?=$item->message?></a><br>
                <hr>
                <br>
            </div>
         <?endforeach?>
        <?endif?>