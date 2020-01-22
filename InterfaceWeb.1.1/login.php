<!-- <?php

session_start();

if(($_SESSION['asseco'] == 'true')){
  header('location:index.php');
}
?> -->

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
      <div class="card-header">Login</div>
      <div class="card-body">
        
        <form id="formLogin" name="formLogin" method="POST" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="user" class="form-control" placeholder="usuario" required="required" autofocus="autofocus" name="user">
              <label for="user">Usuario</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="senha" class="form-control" placeholder="Password" required="required" name="senha">
              <label for="senha">Senha</label>
            </div>
          </div>
          <!-- <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div> -->
          <!-- <a class="btn btn-primary btn-block" href="index.php">Login</a> -->
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="404.php">Registrar-se</a>
          <a class="d-block small" href="404.php">Esqueceu a Senha?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script>
    $(function(){
      $('#formLogin').submit(function(){
        var dados;
        // dados = $(this).serialize();
        dados = new FormData(this);
        
        $.ajax({
          type: "POST",
          url: "config/processa.php",
          data: dados,
          processData: false,
          cache: false,
          contentType: false,
          success: function( data ){
            if(data.indexOf('login_ok') >= 0){
              window.location.href = 'index.php';
            }else if(data.indexOf('login_error') >= 0){
              alert('login_error')
              console.log(data)
            }else{
              // console.log('bug de codigo')
            }
          }
        });
      return false;
		});
	});
  </script>
</body>

</html>
