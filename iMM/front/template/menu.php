<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array( 
            // idPage titre
            'home' =>  'Accueil',
            'historique' =>  'Historique',
            'aliment' => 'Aliments',
            'profil' => 'Profil'
        );
        echo "<nav class='menu'><table><tr>";
        foreach($mymenu as $pageId => $pageParameters) {
            if ($pageId!=$currentPageId){
                echo "<th><a href='index.php?page=".$pageId."'>".$pageParameters."</a></th>";
            }
            else {
                echo "<th><a id='currentpage' href='index.php?page=".$pageId."'>".$pageParameters."</a></th>";
                }}
        echo "<th></th>";
        echo "<th><a href='index.php?page=disconnect'>Se déconnecter</a></th>";
        echo "</th></tr></table></nav>"; }
?>