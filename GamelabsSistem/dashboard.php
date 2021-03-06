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
  <title>  Painel de controle | Gamelabs </title>
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
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Painel de controle</span>
          </a>
        </li>
        <li>
          <a href="cadastrar.php">
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
        <span class="dashboard">Painel de controle</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Procurar...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
      <img src="profile.png" alt="">
        <span class="admin_name" > <?php echo$logado?></span>
     
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Receita Bruta</div>
            <div class="number">0</div>
            <div class="indicator">
            

            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Máquinas disponíveis</div>
            <div class="number">2</div>
            <div class="indicator">
           
            </div>
          </div>
          <i class='bx bx-desktop cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Lucro total</div>
            <div class="number">R$0.00</div>
            <div class="indicator">
            
            </div>
          </div>
          <i class='bx 
          bx-money cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Disponível para saque</div>
            <div class="number">R$ 0.00</div>
            <div class="indicator">
              <span class="text"></span>
            </div>
          </div>
          <i class='bx 
          bx-money cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Aluguéis Recentes</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Data</li>
              <li><a href="#">05 Dezembro 2021</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Cliente</li>
            <li><a href="#">Daniel Batista Miranda</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Jogo</li>
            <li><a href="#">Forza Horizon 5</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">R$204.98</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">Ver todos</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Jogos Mais Procurados</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <!--<img src="images/sunglasses.jpg" alt="">-->
              <span class="product">Read Dead Redemption 2</span>
            </a>
          </li>
          <li>
            <a href="#">
               <!--<img src="images/jeans.jpg" alt="">-->
              <span class="product">Forza Horizon 5 </span>
            </a>

          </li>
          
          </ul>
        </div>
      </div>
    </div>
  </section>

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

