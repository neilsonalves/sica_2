<?php

include("config/conexao.php");
session_start();

if($_SESSION['asseco'] != 'true'){
    header('location:login.php');
}

$con = $conexao;

if(!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

// mysqli_select_db($con,"ajax_demo");

$sql="SELECT * FROM sensores ";

$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>.:SICA:.</title>
  

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">

  

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
<div class="col">
    <a class="navbar-brand mr-1" href="index.php">SICA</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

</div>

    <!-- Navbar(menu superior) -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="usuario.php">Usuario</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>

  </nav>
<br>
  <div id="wrapper">

    <!-- Sidebar(menu esquedo) -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Painel de Controle</span>
        </a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#">
          <i class="fas fa-user-circle fa-fw"></i>
          <span>Usuario</span>
        </a>
      </li> -->
      <li class="nav-item dropdown">
        <a  class="nav-link" href="configuracao.php">
          <i class="fas fa-fw fa-tools"></i>
          <span>Configurações</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Gráficos</span></a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabelas</span></a>
      </li> -->
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs(menu de navegação)-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Visão Geral</li>
        </ol>

        <!-- Icon Cards-->
        
        <?php
                  while($row = mysqli_fetch_array($result)) {
                    echo "<div class='row'>
                    <div class='col-xl-3 col-sm-6 mb-3'>
                      <div class='card text-white bg-danger o-hidden h-100'>
                        <div class='card-body'>
                          <div class='card-body-icon'>
                            <!-- <i class='fas fa-fw fa-life-ring'></i> -->
                          </div>
                          <div class='mr-5'>".$row['nome']."</div>
                          <div class='mr-5' style='font-size:12px;'>".$row['tipo']."</div>
                        </div>
                        <a class='card-footer text-white clearfix small z-1' href='detalhe.php?q=".$row['id']."'>
                          <span class='float-left'>Ver Detalhes</span>
                          <span class='float-right'>
                            <i class='fas fa-angle-right'></i>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>";
                  }
        ?>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <!-- <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="config/sair.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- <script src="vendor/datatables/jquery.dataTables.js"></script> -->
  <!-- <script src="vendor/datatables/dataTables.bootstrap4.js"></script> -->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <!-- <script src="js/demo/datatables-demo.js"></script> -->
  <!-- <script src="js/demo/chart-area-demo.js"></script> -->
  <script src="js/index.js"></script>
</body>

</html>
<?php

mysqli_close($con);
?>
