<?php 
include('conexao.php');

session_start();

$nome = $mysqli->real_escape_string(trim($_POST['nome']));
$email = $mysqli->real_escape_string(trim($_POST['email']));
$senha = $mysqli->real_escape_string(trim($_POST['senha']));

$sql = "select count(*) as total from users where email = '$email'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['email_existe'] = true;
    header("Location: cadastro.php");
    exit;
}


$sql = "INSERT INTO users (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', NOW())";

if($mysqli->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$mysqli->close();

header("Location: home.php");
exit;
?>