<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" type="text/css" href="css/meuperfil.css"/>
</head>
<body>
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
        <form action="" method="POST">
        <label><br />
            Nome:
        </label><br />
            <input type="text" name="nome" placeholder="Primeiro Nome" />
        <label><br />
            Sobrenome:
        </label><br />
            <input type="text" name="sobrenome" placeholder="Segundo Nome" />
        <label><br />
            Email:
        </label><br />
            <input type="text" name="email" placeholder="email@hotmail.com.br" />
        <label><br />
            Senha:
        </label><br />
            <input type="password" name="senha" placeholder="********" />
        <label><br />
            Confirmar Senha:
        </label><br />
            <input type="password" name="csenha" placeholder="********" /><br /><br />
        
        <input type="submit" value="Registrar" name="button" />
                <input type="reset" name="Redefinir" value="resetar"/>
                </form>
            </body>
            <?php
            if(isset($_POST["button"])) {
                $nome       = $_POST["nome"];
                $sobrenome  = $_POST["sobrenome"];
                $email      = $_POST["email"];
                $senha      = $_POST["senha"];
                $csenha     = $_POST["csenha"];
        
                if($nome == "" || $sobrenome == "" || $email == "" || $senha == "" || $csenha == "") {
                    echo "<script> alert('Preencha todos os campos!'); </script>";
                    return true;
                }
                if ($senha != $csenha) {
                    echo "<script> alert ('As senhas devem ser iguais!'); </script>";
                    return true;
                }   
        
                $select = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email'");
                if($select) {
                $row = $select->num_rows;
                if($row > 0) {
                    echo "<script> alert ('Já existe um usuário com esse e-mail'); </script>";
                } else {
                    $insert = $mysqli->query("INSERT INTO `usuarios`(`nome`, `sobrenome`, `email`, `senha`) VALUES ('$nome', '$sobrenome', '$email', '$senha')");
                if($insert) {
                    echo "<script> alert ('Usuário registrado com sucesso!'); location.href='cadastrou.php' </script>";
                }   else {
                        echo $mysqli->error;
                    }   
                }
            }   else{
            echo $mysqli->error;
        
            }   
        
        }       
        ?>
</body>
</html>