<?php /* $con = mysqli_connect('localhost','root','root');
    mysqli_select_db('iMM_data', $con);
    $query = "SELECT * FROM 'User'";
	$result = mysqli_query($query);
    if($result){
		$row = mysqli_fetch_array($result);
		echo $row;
    }
$mysqli->query('INSERT INTO User VALUES 'diego.sicoli', 'Sicoli', 'Diego', '2004-03-02','Homme','Musculation,'expert')
*/
?>

<!DOCTYPE html>
<html>

<head>
    <title>Liste Users</title>
    <link rel="stylesheet" href="TP3.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

<?php
$host = 'localhost';
$dbname = 'mysql';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$dbname";

$sql = "SELECT * FROM Oui";

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<body>
    <div class="container flex">
        <h1>Liste des utilisateurs</h1>
    </div>
    <div class="container flex">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Login</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['Login']); ?></td>
                        <td><?php echo htmlspecialchars($row['Nom']); ?></td>
                        <td><?php echo htmlspecialchars($row['Prenom']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

