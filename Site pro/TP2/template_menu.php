<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array( 
            // idPage titre
            'accueil' =>  'Accueil',
            'cv' =>  'CV' ,
            'projets' => 'Projets',
            'infos-techniques' => 'Infos Techniques'
        );
        echo "<nav class='menu'>
        <ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            if ($pageId!=$currentPageId){
                echo "<li><a href='".$pageId.".php'>".$pageParameters."</a></li>";}
            else {
                echo "<li><a id='currentpage' href='".$pageId.".php'>".$pageParameters."</a></li>";
            }
        }
        echo "</ul> </nav>";
        // ...
    } 
?>