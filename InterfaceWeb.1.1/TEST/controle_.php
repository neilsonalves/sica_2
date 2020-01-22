<?php

session_start();

if($_SESSION['asseco'] != 'true'){
    header('location:index.html');
}


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>.:: SICA ::.</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script type='text/javascript' src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
	</head>
<body>
	<div class="header">
		<div class="row container">
				<div class="col-1"><a href="index.html"><img src="img/logo.png"></a></div>
				<div class="col"><h1>SISTEMA DE IRRIGAÇÃO</h1></div>
		</div>
	</div>
	<div  class="row container conteudo">
		<form  class="col">
			<h4>CONFIGURAÇÃO</h4>
			<br>
			<div  id="">
				<h6>SEVIDOR</h6>
				<p><h6>ENDEREÇO:</h6><input class="" id="url" type="text" value="ws://iot.eclipse.org:1883/mqtt"></p>
				<p><h6>PORTA:</h6><input class="" id="port" type="number" value="1883"></p>
			</div>
			<br>
			<div  id="publish">
				<h6>Definir os tópicos MQTT de subscribe e publish</h6>
				<p><h6>SUBSCRIBE(Tópico de envio de informações):</h6><input class="" id="pub-topic-text" type="text" value="MQTT_IFPI_CAANG_SUB"></p>
				<p><h6>PUBLISH(Tópico de recepcao de informações):</h6><input class="" id="pub-subscribe-text" type="text" value="MQTT_IFPI_CAANG_PUB"></p>
			</div> 
			<div>
				<h6>respostas do servidor</h6>
				<div id="debug">...</div>
			</div>
			<div id="broker">
				<input class="but btn btn-success desligado" id="connect-button" type="button" value="">
				<!-- <input class="but btn btn-danger  ligado" id="disconnect-button" type="button" value=""> -->
			</div>
		</form>
		<div class="col">
			<h4>MONITORAMENTO</h4>
			<br>
			<h6>bomba de água 1</h6>
			<div id="btn_bb1">
				<!-- <input class="but btn btn-success ligado" id="liga-output" type="button"    value=""> -->
				<input class="but btn btn-danger desligado" id="desliga-output" type="button" value="">
			</div>
			<br><br>
			<h6> Leitura do sensor do solo</h6>
			Leitura do sensor do solo:<span  id="sensor">000</span>%
			<div id="status_io"></div>
		</div>
	</div>
	</script>
</body>
</html>