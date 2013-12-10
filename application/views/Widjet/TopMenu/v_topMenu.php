<script type="text/javascript">
  $(document).ready(function(){
    // simple jMenu plugin called
    $("#jMenu").jMenu();
     $('.sub').parent().addClass('open');
         
  });
</script> 
<div class="navigateion">
<?php echo MpttMenu::render($tree);?>
</div>