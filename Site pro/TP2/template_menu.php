<?php
    function renderMenuToHTML($currentPageId,$currentPageLang) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array( 
            // idPage titre
            'accueil' =>  'Accueil' =>  'Home' ,
            'cv' =>  'CV' =>  'CV' ,
            'projets' => 'Projets'=>  'Projects' ,
            'infos_techniques' => 'Infos Techniques' =>  'Technical Information' ,
            'contacts' => 'Contacts' =>  'Contacts' 
        );
        echo "<nav class='menu'><ul>";
        foreach($mymenu as $pageId => $pageParameters_fr => $pageParameters_en) {
            if ($currentPageLang=='en'){
                if ($pageId!=$currentPageId){
                    echo "<li><a href='index.php?page=".$pageId."&lang=en>".$pageParameters_en."</a></li>";
                }
                else {
                    echo "<li><a id='currentpage' href='index.php?page=".$pageId."&lang=en>".$pageParameters_en."</a></li>";
                }
            }
            else{
                if ($pageId.!=$currentPageId){
                    echo "<li><a href='index.php?page=".$pageId."&lang=fr>.$pageParameters_fr.</a></li>";
                }
                else {
                    echo "<li><a id='currentpage' href='index.php?page=".$pageId."&lang=fr>.$pageParameters_fr.</a></li>";
            }}}
        echo "</ul> </nav>"; }
?>


