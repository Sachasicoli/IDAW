
<?php
   require_once("template_header.php");
    $currentPageId = 'acceuil';
    if(isset($_GET['page'])) {
      $currentPageId = $_GET['page'];
   } ?>
<?php
    require_once('template_menu.php');
    renderMenuToHTML('accueil');
?>   
    <h1>Sacha Sicoli</h1>
    <p class="titre">I'm currently looking for an internship</p>
    <p class="soustitre">Je vous laisse découvrir mon CV et mes projets. Bonne balade sur ce site.
      Mais vraiment à l'aide, trouvez-moi un stage svp...</p>
<?php
    require_once('template_footer.php');
?>
