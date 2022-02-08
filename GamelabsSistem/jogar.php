<?php
session_start();
include_once('config.php');
 if(isset($_POST['acao']))
 {
     

     $nome = $_POST['name'];
     $especificacoes = $_POST['especif'];
     $ip = $_POST['ipmaqu'];
     $valorHR = $_POST['aluguel'];
 
     $result = mysqli_query($conexao, "INSERT INTO alugador(codigo, nome, ip, especificacoes, valorHR) VALUES
      (null,'$nome','$ip','$especificacoes','$valorHR')");
    
 }
$sqll = "SELECT * FROM alugador ";
$resultt = $conexao->query($sqll);
 
 ?>
 <?php
    // print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['nome'];
    $sql = "SELECT * FROM usuario ORDER BY codigo DESC";
    $result = $conexao->query($sql);


?>

<!DOCTYPE html>

<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
  <title>  Jogar | Gamelabs </title>
    <link rel="stylesheet" href="styleDashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <section class="home-section" style = "left: 0px; width: 100%;">
    <nav style = "left: 0px; width: 100%;">
      <div class="sidebar-button">
      <a href = "mainSiteCerto.php">  <i class='bx bx-arrow-back sidebarBtn'></i></a>
        <span class="dashboard"> Selecione uma máquina</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Procurar...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
      <img src="profile.png" alt="">
        <span class="admin_name"><?php echo$logado?></span>
     
      </div>
    </nav>

    <div class="home-content">
    
    <div class="overview-boxes">
    <?php   while($aluguel_data = mysqli_fetch_assoc($resultt)) {?>   
      <div class="box">
          <div class="right-side">

            <div class="box-topic"><?php  echo $aluguel_data["nome"]?></div>
            <div class="number">R$<?php  echo $aluguel_data["valorHR"]?>/hr</div>
            <div class="indicator">
            <div class="indicator">
            </div>
          </div>
        </div> 
       <a href = "https://www.youtube.com/watch?v=726a6DwOitQ"> <i class='bx bx-play  cart two' ></i></a>
      </div>
      <?php }?>
        
        
        
      </div>
 
      
    </div>
    
</div>
</form>

<style>
      
      /* Estrutura */
      .input-container {
        position: relative;
      }
      .input-container2 {
        position: relative;
      }
      *{
          font-family: 'Poppins', sans-serif;
      }
      .pintinho {
        border: 0;
        border-bottom: 2px solid #9e9e9e;
        outline: none;
        transition: .2s ease-in-out;
        box-sizing: border-box;
      }
      .pintinho2 {
        border: 0;
        border-bottom: 2px solid #9e9e9e;
        outline: none;
        transition: .2s ease-in-out;
        box-sizing: border-box;
      }
      
      .pintinholabel {
        top: 0;
        left: 0; right: 0;
        color: #616161;
        display: flex;
        align-items: center;
        position: absolute;
        font-size: 1rem;
        cursor: text;
        transition: .2s ease-in-out;
        box-sizing: border-box;
      }
      .pinto {
        top: 0;
        left: 0; right: 0;
        color: #616161;
        display: flex;
        align-items: center;
        position: absolute;
        font-size: 1rem;
        cursor: text;
        transition: .2s ease-in-out;
        box-sizing: border-box;
      }
      .pintinho,
      .pintinholabel {
        width: 100%;
        height: 3rem;
        font-size: 1rem;
      }
      
      .pintinho2,
      .pinto {
        width: 100%;
        height: 3rem;
        font-size: 1rem;
      }
      
      /* Interation */
      .pintinho:valid,
      .pintinho:focus {
        border-bottom: 2px solid #26a69a;  
      }
      .pintinho2:valid,
      .pintinho2:focus {
        border-bottom: 2px solid #26a69a;  
      }
      
      .pintinho:valid + .pintinholabel,
      .pintinho:focus + .pintinholabel {
        color: #26a69a;
        font-size: .8rem;
        top: -30px;
        pointer-events: none;
      }
      .pintinho2:valid + .pinto,
      .pintinho2:focus + .pinto {
        color: #26a69a;
        font-size: .8rem;
        top: -30px;
        pointer-events: none;
      }
      
      /* Just for leave it a little more beautiful */
    
      
      
            
            </style>

</body>
      <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
