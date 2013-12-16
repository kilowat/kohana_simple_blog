<script type="text/javascript">
  $(document).ready(function(){
    // simple jMenu plugin called
    $("#jMenu").jMenu();
     $('.sub').parent().addClass('open');
         
  });
</script> 
<div class="navigateion">
    <ul class="main_page">
        <li><a href="/">Главная</a></li>
    </ul>
<?php echo MpttMenu::render($tree);?>
</div>