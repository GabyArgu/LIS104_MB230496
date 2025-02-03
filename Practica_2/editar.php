<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    // Cargar el archivo XML
    $materias = simplexml_load_file('materias.xml');
    
    // Buscar la materia por el código
    foreach ($materias->materia as $materia) {
        if ($materia->codigo == $_POST['codigo']) {
            // Modificar los valores de la materia
            $materia->codigo = $_POST['nuevoCodigo'];
            $materia->nombre = $_POST['nombre'];
            $materia->uvs = $_POST['uvs'];
            $materia->nota = $_POST['nota'];
            break;
        }
    }

    // Guardar los cambios en el archivo
    $materias->asXML('materias.xml');

    // Redireccionar al inicio
    header('Location: calculadora_cum.php');
    exit;
}
?>
