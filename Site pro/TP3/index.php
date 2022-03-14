<!doctype html>
<html>
    <head>
        <title>TP3 IDAW</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="TP3.css" />
        <?php
            if (isset($_SESSION['login'])){
                echo $_SESSION['login'];
            }
            $style = 'style2';
            if(isset($_GET['css'])){
                $style=$_GET['css'];
            }
            setcookie('css',$style);
            if (isset($_GET['css'])){
                $cookie = $_GET['css'];
            }
            else{
                $cookie = $_COOKIE['css'];
            }

            echo '<div class='.$cookie.'>';?>
        
            <form id="style_form" action="index.php" method="GET">
                <select name="css">
                    <option value="style1">style1</option>
                    <option value="style2">style2</option>
                </select>
                <input type="submit" value="Appliquer" />
            </form>
        </div>
    </head>

    