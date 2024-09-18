
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Building a Metaverse For Smart Cities </title>
  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Smart City</a></h1>
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="additional _information.php#add_infor">ADDITIONAL INFORMATION</a></li>
          <li><a class="nav-link scrollto" href="smart_city.php#smart_city">Smart City</a></li>
          <li><a class="nav-link scrollto" href="Instructions.php#Instructions">INSTRUCTIONS</a></li>
          <li><a class="nav-link scrollto" href="About.php#About">About US</a></li>
          <li><a class="nav-link scrollto" href="#contact">Comments</a></li>
           <?php if(isset($_SESSION["LoginAdmin"]) && $_SESSION["LoginAdmin"]!=""){?>
             <li><a class="nav-link scrollto" href="logout.php">LOGOUT</a></li>
           <?php }elseif(isset($_SESSION["LoginUser"]) && $_SESSION["LoginUser"]!=""){?>
               <li><a class="nav-link scrollto" href="logout.php">LOGOUT</a></li>
              <?php }else{?>
              <li><a class="nav-link scrollto" href="login.php">REGISTER / LOGIN</a></li>
                <?php }?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
