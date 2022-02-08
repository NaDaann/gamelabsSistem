<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM planos WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $plano = $user_data['plano'];
                $linksite = $user_data['linksite'];
                $preco = $user_data['preco'];

            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
    if($plano == "Basic"){
        $preco == "";
        $preco == "R$ 50,00";
   
    }else if($plano == "Pro"){
        $preco == "";
       $preco == "R$ 70,00";
    }
    else {
        $preco == "";
       $preco == "R$ 80,00";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sync - Planos</title>
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
				  Editar Plano
				</span>
			</div>

			<form class="contact100-form" action="saveEdit.php" method="POST">	
				
				
          
				<div class="wrap-input100 " >
					<span class="label-input100">Planos:</span>
					<select class="input100" type="text" name="plano" id="planos" value=<?php echo $plano;?> >
						<option value="Basic">Basic</option>
						<option value="Pro">Pro</option>
						<option value="Ultra">Ultra</option>
					<span class="focus-input100"></span>
</select>
				</div><br><br>

				<div class="wrap-input100 " >
					<span class="label-input100">link:</span>
					<input class="input100" type="text" name="linksite" id="linksite" placeholder="Digite seu novo link"  value=<?php echo $linksite;?> required>
					<span class="focus-input100"></span>
				</div><br><br>

                <div class="wrap-input100 " >
					<span class="label-input100">Preco:</span>
					<input class="input100" type="text"  name="preco" id="preco"  value=<?php echo $preco;?> required>
					<span class="focus-input100"></span>
				</div><br><br>
          
			
				


				<div class="container-contact100-form-btn">
					<input type="hidden" name="id" value=<?php echo $id;?>>
   
					<input class="contact100-form-btn" type="submit" name="update" id="submit" >
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
