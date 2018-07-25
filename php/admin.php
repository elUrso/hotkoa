<?php

include "config.php";

# Login variables

$login = false;

function validate_input($data) {
    $data = trim($data);
    # $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(strcmp($_COOKIE["hash"],$password) == 0) {
    $login = "true";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $method = validate_input($_POST["method"]);
    switch ($method) {
        case 'login':
            if(strcmp($_POST["user"], "admin") == 0 and strcmp($_POST["hash"], $password) == 0) {
                $login = true;
                setcookie("hash", $_POST["hash"], time() + (60*60*24));
            }
            break;
        case 'logout':
            setcookie("hash", "", time());
            $login = false;
            break;
        default:
            $status = "Invalid method";
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="admin.css"/>
    <title>Painel de Administração</title>
</head>
<body>
<div id="container">
<?php echo $status;?>
<?php
if($login) {
    readfile("panel.htm");
    $Database_connection = mysqli_connect("localhost", $Database_Username, $Database_Password, $Database_Name);
    if($Database_connection === false) {
        echo "<p>Não foi possível realizar a consulta.</p>";
    } else {
        mysqli_set_charset($Database_connection,"utf8");
        $subscriptionquery = mysqli_query($Database_connection, 'SELECT id, title, cpf, category, status FROM subscriptions2018;');
        if(mysqli_num_rows($subscriptionquery)>0) {
            echo "<script>";
            while($row = mysqli_fetch_assoc($subscriptionquery)) {
                echo "addProject('" . ($row["id"] + 100). "','" . $row["title"] . "','" . $row["cpf"] . "','" . $row["category"] . "','" . $row["status"] . "');";
            }
            echo "</script>";
        } else {
            echo "<p>Não foi econtrado nenhum projeto cadatrado.</p>";
        }
    }
} else {
    readfile("login.htm");
}
?>
</div>
</body>
</html>