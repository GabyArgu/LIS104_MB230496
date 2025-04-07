<?php
require_once 'Models/EditorialesModel.php';

$model = new EditorialesModel();
$editorial=[
    'codigo_editorial'=>"EDI928",
    'nombre_editorial'=>"Editorial Actualizar Registro",
    'contacto'=>"Jose",
    'telefono'=>"22222222"
];
$model->update($editorial);
print_r($model->get('EDI928'));