<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sync - Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-image: url(images/icons/fundo.jpg);" fixed >

	<div class="container-contact100">

		<!-- Google maps fundo
			<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
		-->



		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Cadastre-se
				</span>
			</div>

			<form class="contact100-form" action="formulario.php" method="POST">
				<div class="wrap-input100 " >
					<span class="label-input100">Nome:</span>
					<input class="input100" type="text" name="nome" id="nome" placeholder="Nome completo">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 " >
					<span class="label-input100">Senha:</span>
					<input class="input100" type="password" name="senha" id="senha" placeholder="Digite sua senha">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 " >
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" id="email" placeholder="Digite seu email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 " >
					<span class="label-input100">telefone:</span>
					<input class="input100" type="text" name="telefone" id="telefone" placeholder="Digite seu telefone"></input>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 " >
					<span class="label-input100">Data de nascimento:</span>
					<input class="input100" type="date" name="data_nascimento" id="data_nascimento" ></input>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 " >
					<span class="label-input100">Cidade:</span>
					<input class="input100" type="text" name="cidade" id="cidade" placeholder="Digite sua cidade"></input>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 " >
					<span class="label-input100">Estado:</span>
					<input class="input100" type="text" name="estado" id="estado" placeholder="Digite seu estado"></input>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 " >
					<span class="label-input100">Endereço:</span>
					<input class="input100" name="endereco" id="endereco" placeholder="Digite seu endereço"></input>
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<input class="contact100-form-btn" type="submit" name="submit" id="submit">
				</div>
                <div class="container-contact100-form-btn">
				<a  href="index.html">	<button class="contact100-form-btn" type="button"  value = "Voltar"> Voltar </button></a>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
