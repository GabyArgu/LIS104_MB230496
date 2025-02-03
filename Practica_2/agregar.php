<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    // Cargar el archivo XML
    $materias = simplexml_load_file('materias.xml');
    
    // Crear un nuevo nodo <materia>
    $nuevaMateria = $materias->addChild('materia');
    $nuevaMateria->addChild('codigo', $_POST['codigo']);
    $nuevaMateria->addChild('nombre', $_POST['nombre']);
    $nuevaMateria->addChild('uvs', $_POST['uvs']);
    $nuevaMateria->addChild('nota', $_POST['nota']);
    
    // Guardar los cambios en el archivo
    $materias->asXML('materias.xml');

    // Redireccionar al inicio
    header('Location: calculadora_cum.php');
    exit;
}