<?php
   require_once("template_header.php");
    $currentPageId = 'acceuil';
    if(isset($_GET['page'])) {
      $currentPageId = $_GET['page'];
   } ?>
<?php
renderMenuToHTML($currentPageId);
?>
<section class="corps">
<?php
   $pageToInclude = $currentPageId . ".php";
   if(is_readable($pageToInclude)){
      require_once($pageToInclude);}
   else{
      require_once("error.php");}
?>
</section>
<?php
require_once("template_footer.php");
?>