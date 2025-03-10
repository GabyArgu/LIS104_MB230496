<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Variables en PHP</title>
    <!-- Incluir Bootstrap desde su CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Utilización de variables</h1>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $nombre_completo = "Gabriela Barrera";
                        $lugar_nacimiento = "San Salvador, El Salvador";
                        $edad = 21;
                        $carnet_universitario = "MB230496";
                        ?>
                        <table class="table">
                            <tr>
                                <th colspan='2'>Datos Personales</th>
                            </tr>
                            <tr>
                                <td>Nombre Completo:</td>
                                <td><?php echo $nombre_completo; ?></td>
                            </tr>
                            <tr>
                                <td>Lugar de Nacimiento:</td>
                                <td><?php echo $lugar_nacimiento; ?></td>
                            </tr>
                            <tr>
                                <td>Edad:</td>
                                <td><?php echo $edad; ?></td>
                            </tr>
                            <tr>
                                <td>Carnet Universitario:</td>
                                <td><?php echo $carnet_universitario; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Incluir jQuery y Bootstrap JS desde sus CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>