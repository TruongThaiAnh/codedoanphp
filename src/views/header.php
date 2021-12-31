<?php
?>
<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="shortcut icon" href="<?php echo BASE_URL ?>/assets/img/mountain_icon-icons.com_54385.png" type="image/x-icon">
      <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
      <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/fonts/simple-line-icons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
      <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/smoothproducts.css">
      <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/bootstrap/css/lastfix.css">
      <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/fonts/fontawesome-all.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
      <link rel="stylesheet" href="<?php echo BASE_URL ?>/fix/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo BASE_URL ?>/fix/fonts/fontawesome-all.min.css">

</head>

<body>
      <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container"><a class="navbar-brand logo" href="index.php">ABC SHOP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav ml-auto">
                              <!-- tim kiem -->
                              <li class="nav-item" style="margin-right: 4rem;">
                                    <form class="d-flex" action="<?php echo BASE_URL . '/tim-kiem' ?>" method="get">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                                          <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                              </li>
                              <!-- tim kiem -->

                              <li class="nav-item active "><a class="nav-link" href="<?php echo BASE_URL ?>">Home</a></li>
                              <!-- <li class="nav-item"><a class="nav-link" href="src/views/product-page.php">Product</a></li>  -->
                              <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL . '/gio-hang' ?>">Shopping Cart</a></li>
                              <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL . '/about' ?>">About Us</a></li>
                              <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL . '/dang-nhap' ?>">Login</a></li>
                        </ul>
                  </div>
            </div>
      </nav>