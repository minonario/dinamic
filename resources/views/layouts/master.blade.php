<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="assets/img/iconfav.png" rel="icon">
  <link href="assets/img/iconfav.png" rel="apple-touch-icon">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
    <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
  <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <?php 
  
  $routeArray = app('request')->route()->getAction();
  $controllerAction = class_basename($routeArray['controller']);
  list($controller, $action) = explode('@', $controllerAction);

  if ($action === 'requisitos'){ ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/requisitos.css">
  
  <?php
  }else{
  ?>
      <link href="assets/css/styledos.css" rel="stylesheet">
  <?php }?>    
  
  @stack('plugin-styles')
  
  <style>
    .cuerpo input[type=text], .cuerpo input[type=number], .cuerpo input[type=email], .cuerpo select {
      width: 100%;
    }
    #tipo {
      text-align: right;
      padding-right: 10px;
    }
    
    .error-message {
        width: 100%;
        color: #dc3545;
        font-size: 12px;
        padding: 0;
        margin: 0;
        top: 30px;
        line-height: 13px;
        position: absolute;
        left: 18px;
        text-align: left;
    }
    .cuerpo div {
      position: relative;
      padding-bottom: 14px;
    }
    .cuerpo .forminput {
      margin-bottom: 15px !important;
    }
    .invalid {
      border-bottom: 2px solid red;
    }
    .checkbox_sel .error-message {
      display: inline-block;
    }
    .cuerpo .checkbox_sel .forminput {
      margin-top: 0;
    }
    
    /**** CONTACT *****/
    #mainform label.error {
      color: #dc3545;
      font-size: 12px;
      top: -10px;
      position: relative;
    }
    .contact .php-email-form button[type="submit"] {
      float: right;
    }
    .contact .php-email-form input {
      padding: 0px 10px;
    }
    .oculto {
      display: none;
    }
    .cuerpo .forminput.valid-checkbox {
      margin-bottom: 0 !important;
    }
    .checkbox_sel .error-message{
      top: inherit !important;
      bottom: 10px;
      left:0;
    }
  </style>

</head>

<body>
  
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center" style="border-bottom: 2px solid rgba(128, 128, 128, 0.144);">
          <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
              <h1><a href="{{ url('/') }}"><img src="img/l2.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
              <ul>
                <li><a class="nav-link scrollto {{ active_class(['producto']) }}" href="{{ url('/producto') }}">Producto</a></li>
                <li><a class="nav-link scrollto {{ active_class(['aliados']) }}" href="{{ url('/aliados') }}">Aliados</a></li>
                <li><a class="nav-link scrollto {{ active_class(['tutoriales']) }}" href="{{ url('/tutoriales') }}">Tutoriales</a></li>
                <li><a class="nav-link scrollto {{ active_class(['faq']) }}" href="{{ url('/faq') }}">FAQ</a></li>
                <li><a class="nav-link scrollto {{ active_class(['adquiere']) }}" href="{{ url('/adquiere') }}">¡Adquiere tu punto!</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
          </div>
        </header><!-- End Header -->

        @yield('content')
        
        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
        
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
        <script src="assets/js/messages_es.min.js"></script>
        
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        
        <?php 
  
        $routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list($controller, $action) = explode('@', $controllerAction);

        if ($action === 'adquiere'){ ?>
            <script src="assets/js/formulariox.js?v=2"></script>
        <?php
        }elseif ($action === 'index'){
        ?>

        <?php } ?>
<!--          <script src="js/jquery-3.4.1.min.js"></script>
                <script src="js/popper.min.js"></script>
                <script src="js/bootstrap.min.js"></script>-->

        <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        @stack('custom-scripts')
</body>

</html>