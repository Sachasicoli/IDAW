<?php
   require_once("template_header.php");
    $currentPageId = 'infos-techniques';
    if(isset($_GET['page'])) {
      $currentPageId = $_GET['page'];
   } ?>
<?php
    require_once('template_menu.php');
    renderMenuToHTML($currentPageId);
?>
<?php require_once('template_footer.php');?>