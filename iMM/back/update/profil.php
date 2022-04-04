<?php
    include 'front/template/call_data.php';
    global $db;
    if(isset($_POST[ 'EMAIL'])){
        $EMAIL = $_POST['EMAIL'];
        $PASSWORD = $_POST['PASSWORD'];
        $DATE_NAISSANCE = $_POST['DATE_NAISSANCE'];
        $SEXE = $_POST['SEXE'];
        $NIV_PRATIQUE_SPORT = $_POST['NIV_PRATIQUE_SPORT']
        $NOM = $_POST['NOM'];
        $PRENOM = $_POST['PRENOM'];
        $POIDS = $_POST['POIDS'];
        $TAILLE = $_POST['TAILLE'];
        // query to update data
        $sql = "UPDATE user SET EMAIL = '$EMAIL' , PASSWORD = '$PASSWORD', DATE_NAISSANCE =
        '$DATE_NAISSANCE', NIV_PRATIQUE_SPORT = '$NIV_PRATIQUE_SPORT' SEXE = '$SEXE', NOM = '$NOM', 
        PRENOM = '$PRENOM', POIDS = '$POIDS', TAILLE = '$TAILLE' WHERE EMAIL='$EMAIL';";
        $result = $db->query($sql);
        if ($result === false) {
            die("Erreur");
        }
        else{
            echo 'la data a été insérée';
        }}
    ?>