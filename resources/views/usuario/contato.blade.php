<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="css/contato.css"/>
</head>
<nav id="menu">
    <img id="logo" src="img/logo academia.png" alt="logo" width="300" height="80">
    <ul>
        <li>
            <a href="sobre">Sobre</a>
        </li>
        <li>
            <a href="premiacao">Premiação</a>
        </li>
        <li>
            <a href="ranking">Ranking</a>
        </li>
        <li>
            <a href="contato">Contato</a>
        </li>
        <li>
            <a href="meuperfil">Meu perfil</a>
        </li>
        <li>
            <a href="#">Entrar</a>
        </li>
    </ul>
</nav>
<body>
    <br>
    <br>
    <form action="/formulario-contato" method="post" >
        <div>
            <label for="email" >Email:</label>
            <input type="texto" id="nome" name="nome_usuario" placeholder="Digite o Email" >
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="email" id="email" name="email_usuario" placeholder="Digite o contato">
        </div>
        <div>
            <label for="Mensagem">Mensagem:</label>
            <textarea id="texto" name="texto_usuario"placeholder="Digite a mensagem"></textarea>
        </div>
    </form>
    <br>
    <div class="button">
        <button type="submit">Enviar</button>
      </div>   

</body>
</html>