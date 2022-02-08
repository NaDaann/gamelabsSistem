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
  <title>  Cadastrar Máquinas | Gamelabs </title>
    <link rel="stylesheet" href="styleDashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar">
    <div class="logo-details">
 
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href = "mainSiteCerto.php"> <span class="logo_name">  <img src="Background.png" class="limage" alt="" width="70%"></span></a>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Painel de controle</span>
          </a>
        </li>
        <li>
          <a href="cadastrar.php" class="active">
            <i class='bx bx-add-to-queue'></i>
            <span class="links_name">Cadastrar Máquina</span>
          </a>
        </li>
        <li>
          <a href="listarmaquinas.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Suas Máquinas</span>
          </a>
        </li>
        <li>
          <a href="analise.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Análise</span>
          </a>
        </li>
        <li>
          <a href="mensagens.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Mensagens</span>
          </a>
        </li>
        <li>
          <a href="configuracoes.php">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Configurações</span>
          </a>
        </li>
        <li class="log_out">
          <a href="index.php">
            <i class='bx bx-log-out' style="color: red;"></i>
            <span class="links_name">Sair</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Cadastrar Máquinas</span>
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
    <form  action="cadastrar.php" method="POST">
    <div class="home-content">
    <div class="overview-boxes">
    <div class="box">
          <div class="right-side">
            <div class="input-container">
      <input id="name" name = "name" class="pintinho" type="text" pattern=".+" required  />
      
      <label class="pintinholabel" for="name">Nome da máquina</label>
    </div>
            <div class="indicator">
            </div>
          </div>

        </div>
        <div class="box">
          <div class="right-side">
          <div class="input-container2">
      <input id="ipmaqu" name = "ipmaqu" class="pintinho2" type="text" pattern=".+" required  />
      
      <label class="pinto" for="ipmaqu">Ip da máquina</label>
    </div>
            <div class="indicator">
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
          <div class="input-container2">
      <textarea id="especif" name = "especif" class="pintinho2" pattern=".+" required  ></textarea>
      
      <label class="pinto" for="especif">Especificações</label>
    </div>
            <div class="indicator">
            
            </div>
          </div>
         
        </div>
        <div class="box">
          <div class="right-side">
          <div class="input-container2">
      <input id="aluguel" class="pintinho2" name = "aluguel" type="number" step='0.01' pattern=".+" required  />
      
      <label class="pinto" for="aluguel">Preço do aluguel / hora </label>
    </div>
            <div class="indicator">
              <span class="text"></span>
            </div>
          </div>
          &nbsp;&nbsp;&nbsp;<button class='bx bx-play cart' type = "submit" name = "acao" style = "border: hidden; margin-top: 1%;"> </button>
        </div>
      </div>
 
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="sales-details">
          <ul class="details">
              <li class="topic">Nome da máquina</li></ul>
              <ul class="details">
            <li class="topic">Ip</li></ul>
            <ul class="details">
            <li class="topic">Especificações</li></ul>
            <ul class="details">
            <li class="topic">Valor/Hora</li></ul></div>
         <?php   while($aluguel_data = mysqli_fetch_assoc($resultt)) {?>    
           <div class="sales-details">
        
            <ul class="details">
            
              <li><a href="#"><?php  echo $aluguel_data["nome"]?></a></li>
            </ul>
            <ul class="details">

            <li><a href="#"><?php echo $aluguel_data["ip"] ?></a></li>
          </ul>
          <ul class="details">
         
            <li><a href="#"><?php echo $aluguel_data["especificacoes"]?></a></li>
          </ul>
          <ul class="details">
          
            <li><a href="#">R$<?php  echo  $aluguel_data["valorHR"]
          ?></a></li>
          </ul>
          </div> 
          <?php }?>
          <div class="button">
            <a href="#">Ver todos</a>
          </div>

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
