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
    <img id="logo" src="img/logo academia.png" alt="logo" width="200" height="50">
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
            <a href="/home">Deslogar</a>
        </li>
    </ul>
</nav>
<body>
    <br>
    
    <h1 align="center">Comentários e Sujestões </h1>
    <br>
    <div id="contatoss">
    <form action="/formulario-contato" method="post" >
        
        <div>
            <label for="email" >Email:</label>
            <input type="texto" id="nome" name="nome_usuario" placeholder="Digite seu email" >
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="email" id="email" name="email_usuario" placeholder="Digite seu telefone">
        </div>
        <div>
            <label for="Mensagem">Mensagem:</label>
            <textarea id="texto" name="texto_usuario"placeholder="Digite sua mensagem"></textarea>
        </div>
    </form>
    <br>
    
    <div class="button">
    <button onclick="funcao1()">Enviar</button>
<br>
<p id="demo"></p>

<script>
function funcao1()
{
var x;
var r=confirm("Sua Mensagem Foi Registrada. OBRIGADO!");
if (r==true)
  {
  x="Mensagem Registrada";
  }
else
  {
  x="Mensagem Cancelada!";
  }
document.getElementById("demo").innerHTML=x;
}
</script>
    <nav class="mapa">
                <ul>
                <img class="contato" src="img/contato.jpg" width="1520" height="470">
                <li><a href="https://www.google.com.br/maps/dir/ETEC+Bebedouro+-+Rua+L%C3%BAcio+Sarti+-+Parque+Eldorado,+Bebedouro+-+SP/Bebedouro,+SP/@-20.9326541,-48.5034852,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x94bbe3fc6d36abe3:0xa82d881d960144c8!2m2!1d-48.5060193!2d-20.9344468!1m5!1m1!1s0x94bbe6a81c8c2e0f:0x2da192d382c1dbf4!2m2!1d-48.4942428!2d-20.9318346" target="_blank"><img class="imgB2" src="img/mapa.png" width="350px" height="250px"alt="Perfil no Instagram"></a></li>
               </ul>
               <div class="col-sm-6 col-lg-3">
               <img class="locA2" src="img/loc.png">
    				<h2 class="textB2">Endereço</h2>
    				<div class="textB3">
    				    	<ul>
    				    		Marechal castelo<p>
    				    		Branco N90<p>
    				    		Bairro: Baraldi<p>
    				    		Bebedouro<p>
    				    		CEP: 14730.000
    				    	</ul>
    				    </div>

                        <div class="col-sm-6 col-lg-3">
               <img class="empresaA2" src="img/empresa.png">
    				<h2 class="textB4">Nossa Empresa</h2>
    				<div class="textB5">
    				    	<ul>
    				    		Trabalhamos<br>
    				    		dando o melhor para <br>
    				    		nossos clientes e<br>
                                contribuindo<br>
    				    		para o meio ambiente!<p>
    				    		
    				    	</ul>
    				    </div>

                        <img class="telefoneA3" src="img/telefone.png">
    				<h2 class="textB6">(17) 99125-5869  </h2>

                    <img class="logoera" src="img/bicicleta.png">
    </nav>
    
    <footer>
            <div class="logoverde" width="1530" height="450"  >
                 Para mais informações, conecte com nossas redes sociais!
            </div>
            <nav class="redes" width="50" height="50">
                <ul>
                    <li><a href="https://www.instagram.com/corpoevidaacademia/" target="_blank"><img src="img/instagram.png"  alt="Perfil no Instagram"></a></li>
                    <li><a href="https://www.instagram.com/corpoevidaacademia/" target="_blank"><img src="img/facebook.png" alt="Perfil no Twitter"></a></li>
                    <li><a href="https://www.instagram.com/corpoevidaacademia/" target="_blank"><img src="img/telegram.png" alt="Perfil no Twitter"></a></li>
               </ul>
            </nav>
        </footer>
   
</body>
</html>