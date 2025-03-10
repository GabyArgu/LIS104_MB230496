<?php

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    $materias = simplexml_load_file('materias.xml');
    foreach ($materias->materia as $materia) {
        if ($materia->codigo == $codigo) {
            file_put_contents('materias.xml', str_replace($materia->asXML(), '', file_get_contents('materias.xml')));
            header('Location: calculadora_cum.php');
            exit;
        }
    }
}
