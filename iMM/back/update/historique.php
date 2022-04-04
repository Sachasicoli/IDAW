<?php
    include 'front/template/call_data.php';
    global $db;
    if(isset($_POST[ 'ID_ALIMENT'])){
        $ID_ALIMENT = $_POST['ID_ALIMENT'];
        $QUANTITE = $_POST['QUANTITE'];
        $DATE = $_POST['DATE'];
        // query to update data
        $sql = "UPDATE consommer ID_ALIMENT = '$ID_ALIMENT', QUANTITE ='$QUANTITE', 
        DATE = '$DATE' WHERE ID_ALIMENT = '$ID_ALIMENT' AND EMAIL = '$_SESSION["login"]'
        AND QUANTITE = '$QUANTITE' AND DATE = '$DATE';";
        $result = $db->query($sql);
    
        if ($result === false) {
            die("Erreur");
        }
        else{
            echo 'la data a été insérée';
        }}
    ?>