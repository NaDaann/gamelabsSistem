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
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Game Labs</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
<link href="js/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/facebox.js" type="text/javascript"></script>

  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/select2.min.css" />
  <link rel="stylesheet" href="css/select2-bootstrap4.min.css" />

  <link rel="stylesheet" href="css/slick-animation.css" />
  <link rel="stylesheet" href="style.css" />
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>

<body>
  <header id="main-header">
    <div class="main-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
              <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-icon" data-toggle="collapse">
                  <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                </div>
              </a>
              <a href="index.html" class="navbar-brand">
                <img src="images/logo.png" class="img-fluid logo" alt="" />
              </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="menu-main-menu-container">
                  <ul id="top-menu" class="navbar-nav ml-auto">
                    <li class="menu-item"><a href="#">Início</a></li>
                    <li class="menu-item"><a href="#">Jogos</a></li>
                    <li class="menu-item"><a href="#">Ajuda</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="mobile-more-menu">
                <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-ellipsis-h"></i>
                </a>
                <div class="more-menu" aria-labelledby="dropdownMenuButton">
                  <div class="navbar-right position-relative">
                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                      <li>
                        <a href="#" class="search-toggle">
                          <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box iq-search-bar">
                          <form action="#" class="searchbox">
                            <div class="form-group position-relative">
                              <input type="text" class="text search-input font-size-12"
                                placeholder="Procurar..." />
                              <i class="search-link fa fa-search"></i>
                            </div>
                          </form>
                        </div>
                      </li>
                    
                      <li>
                        <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                         <!-- <img src="images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />-->
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                          <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 pl-3 pr-3">
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-user text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Perfil</h6>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-cog text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Configurações</h6>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-inr text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Planos</h6>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-sign-out text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Sair</h6>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="navbar-right menu-right">
                <ul class="d-flex align-items-center list-inline m-0">
                  <li class="nav-item nav-icon">
                    <a href="#" class="search-toggle device-search">
                      <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box iq-search-bar d-search">
                      <form action="#" class="searchbox">
                        <div class="form-group position-relative">
                          <input type="text" class="text search-input font-size-12"
                            placeholder="Procurar..." />
                          <i class="search-link fa fa-search"></i>
                        </div>
                      </form>
                    </div>
                  </li>
            
                  <li class="nav-item nav-icon">
                    <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center p-0">
                      <img src="profile.png" class="img-fluid user-m rounded-circle" alt="" />
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                      <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 pl-3 pr-3">
                          <a href="dashboard.php" class="iq-sub-card setting-dropdown">
                            <div class="media align-items-center">
                              <div class="right-icon">
                                <i class="fa fa-user text-primary"></i>
                              </div>
                              <div class="media-body ml-3">
                                <h6 class="mb-0">Perfil</h6>
                              </div>
                            </div>
                          </a>
                          <a href="configuracoes.php" class="iq-sub-card setting-dropdown">
                            <div class="media align-items-center">
                              <div class="right-icon">
                                <i class="fa fa-cog text-primary"></i>
                              </div>
                              <div class="media-body ml-3">
                                <h6 class="mb-0">Configurações</h6>
                              </div>
                            </div>
                          </a>
        
                          <a href="index.php" class="iq-sub-card setting-dropdown">
                            <div class="media align-items-center">
                              <div class="right-icon">
                                <i class="fa fa-sign-out text-primary"></i>
                              </div>
                              <div class="media-body ml-3">
                                <h6 class="mb-0">Sair</h6>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="nav-overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- slider starts  -->
  <section id="home" class="iq-main-slider p-0">
    <div id="home-slider" class="slider m-0 p-0">
      <div class="slide slick-bg s-bg-1">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">
                  <img src="images/gat5logo.png" alt="">
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul
                      class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">+18</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  Grand Theft Auto V é um jogo eletrônico de ação-aventura desenvolvido pela Rockstar North e publicado pela Rockstar Games.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                    Plataformas :
                    <span class="text-body">PlayStation 4, Xbox Series X, Xbox 360, Xbox One, PlayStation 3, PlayStation 5, Microsoft Windows</span>
                  </div>
                  <div class="text-primary title genres">
                    Estúdio : <span class="text-body">Rockstar Games</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                    <a rel="facebox"  class="btn btn-hover iq-button" href="jogar.php"><i class="fa fa-play mr-3"></i>Jogar Agora</a>
                  <a href="#" class="btn btn-link">Mais detalhes
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slick-bg s-bg-2">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">
                  <img src="images/forza5.png" alt="">
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul
                      class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">L</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  Forza Horizon 5 é um jogo eletrônico de corrida desenvolvido pela Playground Games e publicado pela Xbox Game Studios.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                  Plataformas:
                    <span class="text-body">Xbox Series X, Xbox One, Microsoft Windows.</span>
                  </div>
                  <div class="text-primary title genres">
                    Estúdio <span class="text-body">Xbox Game Studios.</span>
                  </div>

                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="jogar.php" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Jogar Agora</a>
                  <a href="#" class="btn btn-link">Mais Detalhes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slick-bg s-bg-3">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">
                 <img src="images/logoFarcry.png" alt="">
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul
                      class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half"></i></li>
                    </ul>
               
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">+18</span>
                    
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  Far Cry 6 é um jogo eletrônico de tiro em primeira pessoa desenvolvido pela Ubisoft Toronto e publicado pela Ubisoft. 
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                    Plataformas : 
                    <span class="text-body">Xbox Series X, PlayStation 4, Amazon Luna, PlayStation 5, Xbox One, Google Stadia, Microsoft Windows.</span>
                  </div>
                  <div class="text-primary title genres">
                    Estudio : <span class="text-body">Ubisoft, Ubisoft Milan</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="jogar.php" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Jogar Agora</a>
                  <a href="#" class="btn btn-link">Mais Detalhes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider ends -->

  <!-- main content starts  -->
  <div class="main-content">
    <!-- parallax section  -->
    <section id="parallex" class="parallax-window">
      <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center h-100 parallaxt-details">
          <div class="col-lg-4 r-mb-23">
            <div class="text-left">
              <a href="javascript:void(0)">
                <img src="images/parallax/cyberpunklogo.png" alt="">
              </a>
              <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                <ul
                  class="ratting-start p-o m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                  <li>
                    <a href="#" class="text-primary"><i class="fa fa-star"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star-half-o"></i></a>
                  </li>
                  <li>
                    <a href="#" class="text-primary"><i class="pl-2 fa fa-star-o"></i></a>
                  </li>
                </ul>
              </div>
              <p>
                Cyberpunk 2077 é um jogo eletrônico de RPG de ação desenvolvido e publicado pela CD Projekt.
              </p>
              <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                <div class="text-primary title starring">
                  Plataformas : 
                  <span class="text-body">Xbox Series X, PlayStation 4, PlayStation 5, Xbox One, Google Stadia, Microsoft Windows.</span>
                </div>
                <div class="text-primary title genres">
                  Estudio : <span class="text-body">CD Projekt, CD Projekt RED</span>
                </div>
              </div>
              <div class="parallax-buttons" style="margin-top: 5%;">
                <a href="jogar.php" class="btn btn-hover">Jogar Agora</a>
                <a href="#" class="btn btn-link">Mais Detalhes</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="parallax-img">
              <a href="#"><img src="images/parallax/cyberpunk.png" alt="" class="img-fluid w-100" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="main-content">
      <!-- parallax section  -->
      <section id="parallex2" class="parallax-window2">
        <div class="container-fluid h-100">
          <div class="row align-items-center justify-content-center h-100 parallaxt-details">
            <div class="col-lg-4 r-mb-23">
              <div class="text-left">
                <a href="javascript:void(0)">
                  <img src="images/read-removebg-preview.png" alt="" >
                </a>
                <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                  <ul
                    class="ratting-start p-o m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                    <li>
                      <a href="#" class="text-primary"><i class="fa fa-star"></i></a>
                    </li>
                    <li>
                      <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                    </li>
                    <li>
                      <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                    </li>
                    <li>
                      <a href="#" class="text-primary"><i class="pl-2 fa fa-star-half-o"></i></a>
                    </li>
                    <li>
                      <a href="#" class="text-primary"><i class="pl-2 fa fa-star-o"></i></a>
                    </li>
                  </ul>
                </div>
                <p>
                  Cyberpunk 2077 é um jogo eletrônico de RPG de ação desenvolvido e publicado pela CD Projekt.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title starring">
                    Plataformas : 
                    <span class="text-body">Xbox Series X, PlayStation 4, PlayStation 5, Xbox One, Google Stadia, Microsoft Windows.</span>
                  </div>
                  <div class="text-primary title genres">
                    Estudio : <span class="text-body">CD Projekt, CD Projekt RED</span>
                  </div>
                </div>
                <div class="parallax-buttons" style="margin-top: 5%;">
                  <a href="jogar.php" class="btn btn-hover">Jogar Agora</a>
                  <a href="#" class="btn btn-link">Mais Detalhes</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="parallax-img">
                <a href="#"><img src="images/parallax/redead.jfif" alt="" class="img-fluid w-100" /></a>
              </div>
            </div>
          </div>
        </div>
      </section>


    
                                  

  <!-- main content ends  -->


  <footer class="iq-bg-dark">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row footer-standard">
          <div class="col-lg-5">
            <div class="widget text-left">
              <div>
                <ul class="menu p-0">
                  <li><a href="#">Termos de uso</a></li>
                  <li><a href="#">Política privada</a></li>
                  <li><a href="#">Suporte</a></li>
                </ul>
              </div>
            </div>
            <div class="widget text-left">
              <div class="textwidget" style="margin-top: 5%;">
                <p><small> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &copy 2021 GameLabs</small></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <h6 class="footer-link-title">
              Redes Sociais:
            </h6>
            <ul class="info-share">
              <li>
                <a href="#">
                  <i>
                  <fa class="fa fa-facebook"></fa>
                </a>
              </li>
              <li>
                <a href="#">
                  <i>
                  <fa class="fa fa-youtube"></fa>
                </a>
              </li>
              <li>
                <a href="#">
                  <i>
                  <fa class="fa fa-instagram"></fa>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="widget text-left">
              <div class="textwidget">
               
                <h6 class="footer-link-title">
         <img src="images/logo.png" class="img-fluid logo " alt="" />
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- js files  -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/slick-animation.min.js"></script>

  <script src="main.js"></script>
</body>

</html>