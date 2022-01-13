<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>NKD STOCK MANAGEMENT</title>
    
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!--========================================
  =            plugins CSS           =
  =========================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css"> 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!--====  End of Plugins CSS  ====-->

  <!--========================================
  =            plugins javascript            =
  =========================================-->

  <!-- jQuery 3 -->
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>

  <!--====  End of Plugins javascript  ====-->

</head>

<!--========================================
  =            BODY ELEMENTS          =
=========================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php

  /*========================================
  =          HEADER ( ENTETE DU PROJET )            =
  =========================================*/

  include ("modules/header.php");

  /*========================================
  =          MENU LATERAL            =
  =========================================*/

  include ("modules/menu.php");

  /*========================================
  =          CONTENU            =
  =========================================*/

  include ("modules/contenu.php");

  /*========================================
  =          FOOTER            =
  =========================================*/

  include ("modules/footer.php")

  ?>

  

  <!-- =============================================== -->
  

</div>
<!-- ./wrapper -->


<script src="views/js/template.js"></script>
</body>
</html>
