<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="google-site-verification" content="iA8Eh06grT_B1lV8FRZktfw4sDbLGaYv0HlOk3HnTSk" />


  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="<?php echo $ogImage; ?>">
  <meta property="og:url" content="https://www.avkstudio.com<?php echo $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Fonts & Styles -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/slicknav.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
  <!-- Page Preloader -->
  <div id="preloder"><div class="loader"></div></div>

  <!-- Site Header -->
  <header class="header-section">
    <a href="index.php" class="site-logo">
      <img src="img/AVK_LOGO (1).png" alt="AVK Studio Logo" style="width:20%;">
    </a>
    <div class="header-controls">
      <button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
    </div>
    <ul class="main-menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li>
        <a href="#">Other Services</a>
        <ul class="sub-menu">
          <li><a href="webbuild.php">Website Building</a></li>
          <li><a href="customsoftware.php">Custom Software Development</a></li>
        </ul>
      </li>
    </ul>
  </header>
