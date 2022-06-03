<?php 

include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness & Diet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icone.ico" type="image/x-icon">
</head>
<body>
    <section id="home">
        <header>
            <img src="logo.png" alt="" class="logo">
            <ul class="navigation">
                <li><a href="home.php">Home</a></li>
                <li><a href="imc.html">Taxa metabólica</a></li>
                <li><a href="cont_calorias.html">Contador de calorias</a></li>
                <li><a href="about.html">Sobre nós</a></li>
                <li><a href="treino.php">Treino</a></li> 
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </header>
        <div class="conteudo">
            <div class="conteudoBx">
                <h2>Comece agora a sua jornada!</h2>
                <a href="about.html" class="btnSaibaMais">Saiba mais</a>
            </div>
        </div>
    </section>
</body>
</html>