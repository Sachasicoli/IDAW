<?php
    include 'template/call_data.php';
    global $db;
    $sql = "SELECT EMAIL, PASSWORD FROM `user`;";

    try {
        $stmt = $db->query($sql);

        if ($stmt === false) {
            die("Erreur");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    /*echo "oui";*/

    $users = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $users[$row['EMAIL']] = $row['PASSWORD'];
    }

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['Formsend'])){
        extract($_POST);
        if(!empty($Email) && !empty($Password)){
    
            $tryLogin = $_POST['Email'];
            $tryPwd = $_POST['Password'];
            // si login existe et password correspond
            if (array_key_exists($Email, $users) && $users[$Email] == $Password) {
                $successfullyLogged = true;
                $login = $Email;
            } else{
                $errorText = "Erreur de login/password";
            }
        }
    } else{
        $errorText = "Merci d'utiliser le formulaire de login";
        }
    if (!$successfullyLogged) {
        echo $errorText;
    } else {
            session_start();
            $_SESSION['login'] = $login;
            $currentPageId='connected';
            require_once('template/menu.php');
            renderMenuToHTML($currentPageId);
            echo "<h1>Bienvenue " . $_SESSION['login'] . "</h1>";
            echo "<a href='index.php?page=home'>Cliquez ici pour aller à l'acceuil</a>";
    }
?>