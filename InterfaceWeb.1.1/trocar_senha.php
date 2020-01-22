<?php

session_start();

if($_SESSION['asseco'] != 'true'){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
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

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Redefinir Senha</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Esqueceu sua senha?</h4>
          <p>Digite seu endereço de e-mail e enviaremos instruções sobre como redefinir sua senha.</p>
        </div>
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Insira o endereço de E-mail</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Redefinir</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Registrar</a>
          <a class="d-block small" href="login.html">Login</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
