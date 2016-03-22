<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Centro de Ayuda</title>
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
			<div class="col-xs-5">
			<p>Inserta tu e-mail y envia un mensaje con tu comentario o duda</p><br>
				<form action="">
					<label class="label label-primary control-label">Introduce tu correo</label>
 					<input type="mail" id="nombre" name="nombre" placeholder="Introduce tu mail" class="form-control"></br>
					<label class="label label-primary control-label">Escribe tu comentario o duda</label>
					<textarea name="duda" id="duda" cols="52" rows="10"></textarea>
					<button class="btn btn-md btn-primary rderecha" id="boton" name="boton">Enviar</button>
				</form>
			</div>
			<div class="col-xs-offset-2 col-xs-4">
				<br><br>
				<img src="img/duda.gif" class="img-responsive">
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br>
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