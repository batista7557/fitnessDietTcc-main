<?php

include('conexao.php');

//session_start();

$requisicao = $_REQUEST['requisicao'];

if($requisicao == 'requisicaoTotal'){

requisicaoTotal($mysqli);
}

if($requisicao == 'calChart'){
    calChart($mysqli);
}
function requisicaoTotal($con){
$total = $_REQUEST['total'];

$sql = "INSERT INTO calorias (total) VALUES ('$total')";

if($con->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$con->close();
}

function calChart($con){
    $sql2 = "SELECT total FROM calorias ORDER BY id DESC LIMIT 1 ";

    $resultado2 = mysqli_query($con, $sql2);

    $array = mysqli_fetch_array($resultado2);
    $p['data'] = $array['total'];

    echo json_encode($p);
}
exit;
?>