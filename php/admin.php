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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $method = validate_input($_POST["method"]);
    switch ($method) {
        case 'login':
            if(strcmp($_POST["hash"], $password) == 0) {
                $login = true;
            }
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

} else {
    readfile("login.htm");
}
?>
</div>
</body>
</html>