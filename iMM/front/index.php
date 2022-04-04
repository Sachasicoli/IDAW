<?php
   require_once("template/header.php");
   $currentPageId = 'login';
   if(isset($_GET['page'])) {
      $currentPageId = $_GET['page'];
   }
   if ($currentPageId!='login' && $currentPageId!='inscription' && $currentPageId!='connected'
   && $currentPageId!='disconnect'){
      require_once('template/menu.php');
      renderMenuToHTML($currentPageId);}
?>
      <body>
         <section class="corps">
               <?php
                  $pageToInclude = $currentPageId.".php";
                  if(is_readable($pageToInclude)){
                     require_once($pageToInclude);
                  }
                  else{
                     require_once("error.php");
                  }
               ?>
         </section>
      </body>
<?php
      require_once("template/footer.php");
?>