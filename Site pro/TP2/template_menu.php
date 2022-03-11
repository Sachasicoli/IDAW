<?php
    function renderMenuToHTML($currentPageId,$currentPageLang='fr') {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array( 
            // idPage titre
            'accueil' =>  array('fr' => 'Accueil', 'en' => 'Home'),
            'cv' =>  array('fr' => 'CV', 'en' => 'CV'),
            'projets' => array('fr' => 'Projets', 'en' => 'Projects'),
            'infos_techniques' => array('fr' => 'Infos Techniques', 'en' => 'Technical Information'),
            'contacts' => array('fr' => 'Contacts', 'en' => 'Contacts'), 
        );
        echo "<nav class='menu'><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            if ($currentPageLang=='en'){
                if ($pageId!=$currentPageId){
                    echo "<li><a href='index.php?page=".$pageId."&lang=en>".$pageParameters['en']."</a></li>";
                }
                else {
                    echo "<li><a id='currentpage' href='index.php?page=".$pageId."&lang=en>".$pageParameters['en']."</a></li>";
                }
            }
            else{
                if ($pageId.!=$currentPageId){
                    echo "<li><a href='index.php?page=".$pageId."&lang=fr>.$pageParameters['fr'].</a></li>";
                }
                else {
                    echo "<li><a id='currentpage' href='index.php?page=".$pageId."&lang=fr>.$pageParameters['fr'].</a></li>";
            }}}
        echo "</ul> </nav>"; }
?>


