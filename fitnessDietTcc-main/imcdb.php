<?php

include('conexao.php');

//session_start();

$sql3 = "SELECT maintenance, loseWeight, gainWeight FROM imc ORDER BY id DESC LIMIT 1 ";

$resultado3 = mysqli_query($mysqli, $sql3);


$tmb = $_REQUEST['tmb'];
$maintenance = $_REQUEST['maintenance'];
$loseWeight = $_REQUEST['loseWeight'];
$gainWeight = $_REQUEST['gainWeight'];

$sql = "INSERT INTO imc (tmb, maintenance, loseWeight, gainWeight) VALUES ('$tmb', '$maintenance', '$loseWeight', '$gainWeight')";

if($mysqli->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$mysqli->close();

exit;
?>