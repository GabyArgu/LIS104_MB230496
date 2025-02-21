<!DOCTYPE html>
<html lang="es">

<head>
    <title>Calculo promedio</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Promedios de Estudiantes</h2>

        <?php
        $estudiantes = array(
            "Gabriela Barrera" => array("tarea" => 10, "investigacion" => 10, "examen_parcial" => 10),
            "Christopher Alvarenga" => array("tarea" => 9.5, "investigacion" => 8, "examen_parcial" => 1),
            "Gerardo Rivera" => array("tarea" => 6, "investigacion" => 9.5, "examen_parcial" => 7),
            "Verónica Mazariego" => array("tarea" => 10, "investigacion" => 9, "examen_parcial" => 2),
        );

        echo '<table class="table table-bordered table-striped">';
        echo '<thead class="thead-dark"><tr>';
        echo '<th>Nombre</th><th>Tarea</th><th>Investigación</th><th>Examen Parcial</th><th>Promedio</th>';
        echo '</tr></thead><tbody>';

        foreach ($estudiantes as $nombre => $notas) {
            // Calcular el promedio ponderado
            $promedio = ($notas['tarea'] * 0.5) + ($notas['investigacion'] * 0.3) + ($notas['examen_parcial'] * 0.2);

            echo '<tr>';
            echo '<td>' . $nombre . '</td>';
            echo '<td>' . $notas['tarea'] . '</td>';
            echo '<td>' . $notas['investigacion'] . '</td>';
            echo '<td>' . $notas['examen_parcial'] . '</td>';
            echo '<td class="text-center">' . number_format($promedio, 2) . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';
        ?>
    </div>
</body>

</html>