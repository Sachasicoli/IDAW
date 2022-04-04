<?php
    include 'front/template/call_data.php';
    global $db;
    if(isset($_POST[ 'ID_ALIMENT'])){
        $ID_ALIMENT = $_POST['ID_ALIMENT'];
        $LIB_ALIMENT = $_POST['LIB_ALIMENT'];
        $TYPE_ALIMENT = $_POST['TYPE_ALIMENT'];
        // query to update data
        $sql = "UPDATE aliment SET ID_ALIMENT = '$ID_ALIMENT' , LIB_ALIMENT = '$LIB_ALIMENT', ID_TYPE =
        '$ID_TYPE' WHERE ID_ALIMENT = '$ID_ALIMENT';";
        $result = $db->query($sql);
    
        if ($result === false) {
            die("Erreur");
        }
        else{
            echo 'la data a été insérée';
        }}
    ?>