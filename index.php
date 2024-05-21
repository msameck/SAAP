<?php
  include("database/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SAAP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/img/favicon.png" rel="icon">
  <link href="public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="public/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php?menuop=home">SAAP</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php?menuop=home">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?menuop=sobre">Sobre</a></li>
          <li><a class="nav-link scrollto" href="index.php?menuop=servicos">Serviços</a></li>
          <li><a class="nav-link scrollto o" href="index.php?menuop=meus_requerimentos">Meus Requerimentos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <li><a class="getstarted scrollto" href="#">Cadastre-se</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- (Menu) .navbar -->
    </div>
  </header><!-- Fim Header -->

  <main class="main" id="main">
  <?php
    $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] :"home";
    switch ($menuop) {
      case 'home':
        include("pages/home/home.php");
        break;
      case 'sobre':
        include("pages/sobre/sobre.php");
        break;
      case 'servicos':
        include("pages/servicos/servicos.php");
        break;
      case 'meus_requerimentos':
        include("pages/meus_requerimentos/meus_requerimentos.php");
        break;
      default:
        include("pages/home/home.php");
        break;
    }
  ?>
  </main>

</body>
</html>
