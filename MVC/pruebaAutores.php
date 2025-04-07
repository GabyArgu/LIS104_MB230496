<?php
require_once 'Models/AutoresModel.php';

$model=new AutoresModel();
$autores=$model->get();
foreach ($autores as $autor) {
    echo $autor['nombre_autor'] . "<br>";
}