<?php 

// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}


//variables
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$color = isset($_POST['color']) ? Filtro($_POST['color']) : '';
$apellido = isset($_POST['apellido']) ? Filtro($_POST['apellido']) : '';
$fecha = isset($_POST['fecha']) ? Filtro($_POST['fecha']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$region = isset($_POST['region']) ? (int) $_POST['region'] : 0;
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$web = isset($_POST['web']) ? Filtro($_POST['web']) : '';
$error = '';


?>
<!DOCTYPE html>
<html> 
<head>
	<meta name="author" content="pakus el incomparable">
	 <title>Formulario enviado</title>


	 <body>
<div class="container">
  <span style="padding-top: 10px;"></span>
<?php
// Mostrar contenido
if($enviado == 1 && $contenido == 1) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  exit;
} else if(empty($nombre)) {
  $error = 'Por favor, ingrese su nombre.';
} else if(empty($apellido)) {
  $error = 'Por favor, ingrese su apellido.';
} else if(empty($fecha)) {
  $error = 'Por favor, ingrese su Fecha de Nacimiento.';
} else if(empty($foto)) {
  $error = 'Por favor, seleccione su foto de perfil.';
} else if(empty($descripcion)) {
  $error = 'Por favor, ingrese su descripción.';
}  else if(empty($sexo)) {
  $error = 'Por favor, ingrese su sexo.';
}


if(!empty($error)) {
?>
<div class="alert alert-info">
  <i class="glyphicon glyphicon-info-sign"></i>
  <?php echo $error; ?>
</div>
<a href="./" class="btn btn-warning">
  <i class="glyphicon glyphicon-chevron-left"></i>
  Volver
</a>


<h3> FOrmularuio enviado Satisfactoriamente! </h3>
 <h3 class="panel-title">Datos enviados</h3>

 <p> Bienvenido (a) <b> <?php echo $nombre; ?> </b> <b> <?php echo apellido; ?> </b> </p>
 <p>Fecha de nacimiento : <b> <? php echo $fecha; ?> </b> </p>
 <p> Sexo: <b> <? php echo $fecha; ?> </b> </p>
<p> Areas de Interes: <b> <? php echo $interes; ?> </b> </p>
<p> Pagina personal: <b> <? php echo $web; ?> </b> </p>
<p> Color Favorito: <b> <? php echo $color; ?> </b> </p>
</html>