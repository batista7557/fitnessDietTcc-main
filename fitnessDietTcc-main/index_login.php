<?php

include('conexao.php');

if  (isset($_POST['email']) || isset($_POST['senha'])) {

    if  (strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    } else if   (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else  {
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: home.php");

        } else {
            echo "Falha ao logar! Email ou senha incorretos";
        }

    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="icone.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="img-wrapper">
                <img src="bg_login.jpg" alt="">
            </div>
            <div class="banner">
                <h1>Já possui cadastro?</h1>
                <p>Faça login.</p>
            </div>
            <form action="" method="POST">
                <h3>Fitness & Diet</h3>
                <p>Digite seu e-mail:</p>
                <input id='email' type="email" name="email" placeholder="E-mail">
                <p>Digite sua senha:</p>
                <input id='senha' type="password" name="senha" placeholder="Senha">
                <div class="bg_btn">
                    <input id='submit' type="submit" name="acao" value="Entrar" class="entrar">
                </div>
                <div class="social">
                    <p>Ou</p>
                    <p>Faça login com suas redes-sociais:</p>
                    <ul>
                        <li><a href="https://pt-br.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                    <div class="cadastro">
                        <p>Não possui cadastro? Se <a href="cadastro.php">registre</a> agora!</p>
                    </div>
                </div>
            </form>
        </header>
    </div>
    <script>
        var email = document.getElementById('email')
        var senha = document.getElementById('senha')

        email.addEventListener('focus', ()=>{
            email.style.borderColor = '#1abc9b'
        })
        email.addEventListener('blur', ()=>{
            email.style.borderColor = '#ccc'
        })
        senha.addEventListener('focus', ()=>{
            senha.style.borderColor = '#1abc9b'
        })
        senha.addEventListener('blur', ()=>{
            senha.style.borderColor = '#ccc'
        })
    </script>
</body>
</html>