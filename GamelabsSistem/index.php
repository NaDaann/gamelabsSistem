<?php

    if(isset($_POST['acao']) && !empty($_POST['usuarioC']) && !empty($_POST['email']) && !empty($_POST['senhaC']))
    {
        include_once('config.php');

        $nome = $_POST['usuarioC'];
        $email = $_POST['email'];
        $senha = $_POST['senhaC'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome,senha,email) 
        VALUES ('$nome','$senha','$email')");
     

    }
    else{
      echo "<script type='javascript'>alert('Preencha todos os campos corretamente!');";
      echo "javascript:window.location='index.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/styleLogin.css" />
    <title>GameLabs</title>
  </head>
  <div id="popup1" class="overlay">
	<div class="popup">
		<h2>Cadastro efetuado com sucesso</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="gifsucess.gif" alt="">
		</div>
    <div class="content">
      <p style="visibility: hidden;">pintinho</p>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="pintinho" href="#popup1">Continuar</a>
	</div>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #00ccff;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.pintinho {
  font-size: 1em;
  padding: 10px;
  color: black;
  border: 2px solid #00ccff;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.pintinho:hover {
  background: #00ccff;
  color: white;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #00ccff;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
  </style>
</div>
  <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" action="testLogin.php" method="POST">
            <h2 class="title">Entrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuário" name="nome" id="nome" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" name="senha" id="senha" />
            </div>
            <input type="submit" value="Entrar" class="btn solid" name="submit" id="submit" />
            <p class="social-text">Visite nossas midias sociais:</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </form>
          <form method="POST" class="sign-up-form" >
            <h2 class="title">Cadastrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuário" id="usuarioC" name="usuarioC" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" id="email" name="email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" id="senhaC" name="senhaC" />
            </div>
            <input type="submit" class="btn" value="Cadastrar" name="acao" />
            <p class="social-text">Visite nossas midias sociais:</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
            
          </form>
        </div>
      </div>

      <div class="panels-container">
          
        <div class="panel left-panel">
     <!--   <img src="gamlabs/images/logo.png" style="width: 180px; margin-right: 92.5%;    text-align: top;" alt="" /> -->
          <div class="content">
            <h3>Novo por aqui?</h3>
            <p>
              Cadastre-se agora para aproveitar os benefícios da nossa plataforma!
            </p>
            <button type= "button" name = "acao" class="btn transparent" id="sign-up-btn">
             Cadastrar
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Já possui uma conta?</h3>
            <p>
              Clique para fazer login!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>




</div><!--form_cd-->
    <script src="app.js"></script>
</body>


</html>
