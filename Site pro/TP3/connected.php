<?php
    
// on simule une base de données
// login => password
$host = 'localhost';
$dbname = 'iMM_data';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$dbname";

$sql = "SELECT * FROM Users";

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
$users = array(
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    $row['login'] => $row['password'], 
endwhile;)

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    session_start();
    if (isset($_GET['disconnected'])){
        session_unset();
        session_destroy();
    }
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
    
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
            $_SESSION['login'] = $login;
            } 
        else{
            $errorText = "Erreur de login/password";
        }} 
    else{
        $errorText = "Merci d'utiliser le formulaire de login";
    }
    if(!$successfullyLogged) {
        echo $errorText;
    } 
    else {
        echo "<h1>Bienvenue ".$_SESSION['login']."</h1>";
    }
    ?>
<form id="style_form" action="index.php" method="GET">
    <tr>
        <th></th>
        <td><input type="submit" value="Changer de style" /></td>
    </tr>
</form>
<form id="unlog_form" action="login.php" method="POST">
    <tr>
        <th></th>
        <td><input type="submit" value="Se déconnecter" /></td>
    </tr>
</form>

