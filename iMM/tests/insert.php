<?php
    include 'front/template/call_data.php';
    global $db;
    // etablir la connexion
    if($_REQUEST['ID_ALIMENT']){
        $ID_ALIMENT = $_REQUEST['ID_ALIMENT'];
        $LIB_ALIMENT = $_REQUEST['LIB_ALIMENT'];
        $ID_TYPE = $_REQUEST['ID_TYPE'];
        $q= "INSERT INTO `aliment` (`ID_ALIMENT`, `LIB_ALIMENT`, `ID_TYPE`) VALUES ('$ID_ALIMENT', 
        '$LIB_ALIMENT', '$ID_TYPE' );";
        
        $query = $db->query($q);
    
        try {
            $query = $db->query($sql);
            if ($query === false) {
                die("Erreur");
            }
            else{
                echo 'la data a été insérée';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>