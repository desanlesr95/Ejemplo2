<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Enviar Pagos</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		
		<div class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand">Inicio</a>
					<a href="ayuda.php" class="navbar-brand">Centro de Ayuda</a>
					<a href="beneficios.php" class="navbar-brand">Beneficios</a>
					<a href="registrar.html" class="navbar-brand">Registrar</a>
				</div>
			</div>
		</div>

		<div class="row-fluid">

			<form  role="form" method="post">
				<div class="col-xs-4">
					<p>Inserte tus datos</p>
						<label class="label label-primary control-label">Numero de Cuenta</label>
 						<input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre" class="form-control"></br>
						<label class="label label-primary control-label">NIP</label>
						<input type="password" id="pass" name="pass" placeholder="Introduce tu NIP" class="form-control"></br>
						<img src="img/cambio.png" class="img-responsive">
				</div>

				<div class="col-xs-offset-1 col-xs-5">
					<p>Inserte los datos de la cuenta que se le enviara el pago</p>
					<label class="label label-primary control-label">Numero de Cuenta</label>
 					<input type="text" id="nombre" name="nombre" placeholder="Introduce el No. Cuenta" class="form-control"></br>
					<label class="label label-primary control-label">Introduce la cantidad a enviar</label>
 					<input type="text" id="nombre" name="nombre" placeholder="Peso Mexicanos MXN" class="form-control"></br>
 					<label class="label label-primary control-label">Introduce un asunto por el cual se envia el pago</label>
 					<textarea name="asunto" id="asunto" cols="30" rows="10"></textarea><br>
					<button class="btn btn-md btn-danger" id="boton" name="boton">Enviar</button>
				</div>

 				
			</form>
				
		</div>
	</div>
	<br><br><br>
	<div class="container">
		<div class="row-fluid">
			<ul class="nav nav-tabs" role="tablist">
        		<li><a href="#">Conocenos</a></li>
        		<li><a href="#">Seguridad</a></li>
        		<li><a href="#">Normas</a></li>
        		<li><a href="#">Aclaraciones</a></li>
        		<li><a href="condicion.html">Terminos y Condiciones</a></li>
      		</ul>
		</div>
	</div>
</body>
</html>