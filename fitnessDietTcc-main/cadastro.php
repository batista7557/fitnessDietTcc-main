<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="icone.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style_cadastro.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="img-wrapper">
                <img src="bg_login.jpg" alt="">
            </div>
            <div class="banner">
                <h1>Não possui cadastro?</h1>
                <p>É simples.</p>
            </div>
            <form action="cadastrar.php" method="POST">
                <h3>Fitness & Diet</h3>
                <input id='nome' type="text" name="nome" placeholder="Nome">
                <input id='email' type="email" name="email" placeholder="E-mail">
                <input id='senha' type="password" name="senha" placeholder="Senha">
                <input id='senha2' type="text" name="telefone" placeholder="Confirmar senha">
                <div class="bg_btn">
                    <input id='submit' type="submit" name="acao" value="Cadastre-se" class="entrar">
                </div>
                <div class="social">
                    <p>Cadastre-se com suas redes-sociais:</p>
                    <ul>
                        <li><a href="https://pt-br.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </form>
        </header>
    </div>
    <script>
        var nome = document.getElementById('nome')
        var email = document.getElementById('email')
        var senha = document.getElementById('senha')
        var senha2 = document.getElementById('senha2')

        nome.addEventListener('focus', ()=>{
            nome.style.borderColor = '#1abc9b'
        })
        nome.addEventListener('blur', ()=>{
            nome.style.borderColor = '#ccc'
        })
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
        senha2.addEventListener('focus', ()=>{
            senha2.style.borderColor = '#1abc9b'
        })
        senha2.addEventListener('blur', ()=>{
            senha2.style.borderColor = '#ccc'
        })
    </script>
</body>
</html>
