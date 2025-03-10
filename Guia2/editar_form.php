<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['codigo'])) {
	$codigo = $_GET['codigo'];

	// Cargar el archivo XML
	$materias = simplexml_load_file('materias.xml');

	// Buscar la materia en el XML
	foreach ($materias->materia as $materia) {
		if ($materia->codigo == $codigo) {
			// Guardar los datos de la materia para usarlos en el formulario
			$nombre = $materia->nombre;
			$uvs = $materia->uvs;
			$nota = $materia->nota;
			break;
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Calculadora de CUM</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>

<body>
	<div class="container">
		<h1 class="page-header text-center">Editar materia</h1>

		<form method="POST" action="editar.php">
			<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">

			<div class="row form-group">
				<div class="col-sm-2">
					<label class="control-label" for="codigo">Codigo:</label>
				</div>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nuevoCodigo" id="nuevoCodigo" value="<?php echo $codigo; ?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-2">
					<label class="control-label" for="nombre">Nombre:</label>
				</div>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-2">
					<label class="control-label" for="uvs">UVS:</label>
				</div>
				<div class="col-sm-10">
					<input type="number" min="2" max="5" class="form-control" name="uvs" id="uvs" value="<?php echo $uvs; ?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-2">
					<label class="control-label" for="nota">Nota:</label>
				</div>
				<div class="col-sm-10">
					<input type="number" min="0" max="10" step="0.1" class="form-control" name="nota" id="nota" value="<?php echo $nota; ?>">
				</div>
			</div>

			<div class="modal-footer">
				<a href="calculadora_cum.php" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
				<button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Editar</a>
			</div>
		</form>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>