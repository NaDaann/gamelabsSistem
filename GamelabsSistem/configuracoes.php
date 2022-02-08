<?php
session_start();
    include_once('config.php');
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
  <title>  Configurações | Gamelabs </title>
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
          <a href="cadastrar.php" >
            <i class='bx bx-add-to-queue'></i>
            <span class="links_name">Cadastrar Máquina</span>
          </a>
        </li>
        <li>
          <a href="listarmaquinas.php" >
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Suas Máquinas</span>
          </a>
        </li>
        <li>
          <a href="analise.php" >
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Análise</span>
          </a>
        </li>
        <li>
          <a href="mensagens.php" >
            <i class='bx bx-message' ></i>
            <span class="links_name">Mensagens</span>
          </a>
        </li>
        <li>
          <a href="configuracoes.php" class="active">
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
        <span class="dashboard">Configurações</span>
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
