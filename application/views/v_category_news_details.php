<div class="contentCategory">
    <?if($news):?>
        <br>
        <h2><?=$news->name?></h2>
        <?=$news->body?><br>
        
<?endif;?>
</div><!-- .content-->
    <div class="bottom-news">
        <div id="comment"><!-- .comment-->
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
        </div>
            <div class="comment-form">

                    <a>Имя:</a><input id="comment-name" type="text" name="name"><br>
                    <a>Сообщение:</a><br>
                    <textarea id="comment-message" rows="4" cols="50" name="message"></textarea>
                    <input type="submit" value="Отправить" id="send-ajax">

            </div>
    </div>

</div><!-- .container-->
<script>
    $(document).ready(function(){
        $('#send-ajax').click(function(){
            $(this).attr('disabled','disabled');
            var name = $('#comment-name').val();
            var message= $('#comment-message').val();
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/comments/save",
                data: "name="+name+"&message="+message+"&news_id=<?=$news->id?>",
                success: function(responce){
                    if(responce ==="erorr"){
                        alert("erorr");
                    }
                    if(responce === "success"){
                        $("#comment").load('/comments/reload/<?=$news->id?>');
                        
                    }
                    $('#send-ajax').removeAttr('disabled');
                }
                
            });
                
        });
        
    });
</script>

    

		