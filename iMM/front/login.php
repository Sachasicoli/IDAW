<?php
            if(isset($_POST['formsend'])){
                extract($_POST);
                if(!empty($nom) && !empty($prenom) && !empty($naissance) && !empty($niveau)
                && !empty($sexe) && !empty($poids) && !empty($taille) && !empty($email) 
                && !empty($password) && !empty($cpassword)){
                    if($password == $cpassword){
                        /*$options = ['cost'=> 8,];
                        $hashpass = password_hash($password, PASSWORD_BCRYPT,$options);*/
                        $hashpass = $password;
                        include 'template/call_data.php';
                        global $db;
                            $sql = "INSERT INTO `user` (`EMAIL`, `PASSWORD`, `DATE_NAISSANCE`, `SEXE`, 
                            `NIV_PRATIQUE_SPORT`, `NOM`, `PRENOM`,`POIDS`, `TAILLE`) VALUES ('$email', '$hashpass', 
                            '$naissance', '$sexe', '$niveau', '$nom', '$prenom', '$poids', '$taille'  );";
                            try {
                                $stmt = $db->query($sql);
                        
                                if ($stmt === false) {
                                    die("Erreur");
                                }
                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            }
                
                    }
                }
                else{
                    echo "Les champs ne sont pas tous remplis";
                    }
            }
?>

<form id="login_form" action="connected.php" method="POST">
                    <table>
                        <tr>
                            <th>EMAIL :</th>
                            <td><input type="email" name="Email"></td>
                        </tr>
                        <tr>
                            <th>Mot de passe :</th>
                            <td><input type="password" name="Password"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="Se connecter..." name="Formsend" id="Formsend" /></td>
                        </tr>
                    </table>
                </form>
                <form id="inscrire_form" action="inscription.php" method="POST">
                    <table>
                       <tr>
                            <th></th>
                            <td><input type="submit" value="S'inscrire..." /></td>
                        </tr>
                    </table>
                </form>