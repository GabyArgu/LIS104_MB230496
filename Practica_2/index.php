<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">Calculadora de CUM</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>

                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Uv</th>
                        <th>Notas</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php

                        $Deno = 0;
                        $totalUv = 0;
                        $cum = 0;
                        $totalMaterias = 0;
                        $materias = simplexml_load_file('materias.xml');
                        foreach ($materias->materia as $materia) {
                            echo '<tr>';
                            echo '<td>' . $materia->codigo . '</td>';
                            echo '<td>' . $materia->nombre . '</td>';
                            echo '<td>' . $materia->uvs . '</td>';
                            echo '<td>' . $materia->nota . '</td>';
                            echo '<td>';
                            echo '<a href="#addnew" class="btn btn-success">Editar</a>';
                            echo '<a href="borrar.php? codigo=' . $materia->codigo . '" class="btn btn-danger">Borrar</a>';
                            echo '</td>';
                            echo '</tr>';

                            $Deno = $Deno + $materia->nota * $materia->uvs;
                            $totalUv = $totalUv + $materia->uvs;
                            $totalMaterias = $totalMaterias + 1;
                        }

                        $cum = round($Deno / $totalUv, 2);

                        echo '<h2>Cum: ' . $cum . '</h2>';



                        include_once 'nueva_modal.php';

                        include 'borrar_modal.php';

                        ?>
                    </tbody>
                </table>


                
           


            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>