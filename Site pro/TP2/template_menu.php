<?php
    function renderMenuToHTML($currentPageId,$currentlang) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array( 
            // idPage titre
            'accueil' =>  'Accueil' =>  'Home' ,
            'cv' =>  'CV' =>  'CV' ,
            'projets' => 'Projets'=>  'Projects' ,
            'infos-techniques' => 'Infos Techniques' =>  'Tecnical Information' ,
            'contacts' => 'Contacts' =>  'Contacts' 
        );
        echo "<nav class='menu'><ul>";
        foreach($mymenu as $pageId => $pageParameters_fr => $pageParameters_en) {
            if ($currentlang=='en'){
                if ($pageId.'_en'!=$currentPageId){
                    echo "<li><a href='index.php?page=".$pageId."&lang=en"."'>".$pageParameters_en."</a></li>";
                }
                else {
                    echo "<li><a id='currentpage' href='index.php?page=".$pageId."&".$currentPagelang."'>".$pageParameters."</a></li>";
                }
            }
            else{
                if ($pageId!=$currentPageId){
                    echo "<li><a href='index.php?page=".$pageId."&lang=".$currentPagelang."'>".$pageParameters."</a></li>";
                }
                else {
                    echo "<li><a id='currentpage' href='index.php?page=".$pageId."&".$currentPagelang."'>".$pageParameters."</a></li>";
                }
            }}
        echo "</ul> </nav>"; }
?>


