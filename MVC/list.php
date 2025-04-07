<?php
include_once 'Models/EditorialesModel.php';
$model = new EditorialesModel();
$editorial=[
    'codigo_editorial'=>"EDI789",
    'nombre_editorial'=>"Prueba INSERT",
    'contacto'=>"Jose",
    'telefono'=>"22222222"
];
echo $model->update($editorial);
//echo $model->delete('EDI789');
var_dump($model->get());


