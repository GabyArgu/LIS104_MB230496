<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Conversor</title>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-primary ">
            <span class="navbar-text mx-auto">
                <h1>Conversor de Magnitudes</h1>
            </span>
        </nav>
    </header>
    <div class="container">
        <?php
        function convertir($valor, $origen, $destino)
        {
            $conversiones = [
                'metros' => ['yardas' => 1.09361, 'pies' => 3.28084, 'varas' => 1.1963],
                'yardas' => ['metros' => 0.9144, 'pies' => 3, 'varas' => 1.0939],
                'pies' => ['metros' => 0.3048, 'yardas' => 0.333333, 'varas' => 0.3646],
                'varas' => ['metros' => 0.835905, 'yardas' => 0.91416, 'pies' => 2.7425],
            ];

            // Si la magnitud de origen y destino es la misma, devolver el mismo valor
            if ($origen == $destino) {
                return $valor;
            }

            // Realizar la conversión
            return $valor * $conversiones[$origen][$destino];
        }

        if (isset($_GET['enviar'])):
            $resultado = '';

            $valor = $_GET['valor'];
            $origen = $_GET['magnitud'];
            $destino = $_GET['convertir_a'];

            // Validar que se seleccionaron opciones válidas
            if ($valor && $origen && $destino) {
                $resultado = convertir($valor, $origen, $destino);
            } else {
                $resultado = 'Por favor, complete todos los campos.';
            }

            echo "<h2>Resultado:</h2>";
            echo "<p>" . $valor . ' ' . $origen . ' son ' . $resultado . ' ' . $destino . '</p>';

            echo "<br /><a href=\"{$_SERVER['PHP_SELF']}\" title=\"Regresar\" class=\"a-btn\">";
            echo "<span class=\"a-btn-text\">Regresar</span>";
            echo "</a>";
        else:
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                <div class="form-group mb-3">
                    <label class="form-check-label">Valor:</label>
                    <input class="form-control" min="1" type="number" name="valor" required />
                </div>

                <div class="form-group mb-3">
                    <label for="magnitude" class="form-label">Selecciona una Magnitud</label>
                    <select class="form-select" id="magnitud" name="magnitud" required>
                        <option value="">Seleccione una magnitud</option>
                        <option value="metros">Metros</option>
                        <option value="yardas">Yardas</option>
                        <option value="pies">Pies</option>
                        <option value="varas">Varas</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="convert_to" class="form-label">Selecciona la magnitud a la que deseas convertir</label>
                    <select class="form-select" id="convertir_a" name="convertir_a" required>
                        <option value="">Seleccione una magnitud de destino</option>
                        <option value="metros">Metros</option>
                        <option value="yardas">Yardas</option>
                        <option value="pies">Pies</option>
                        <option value="varas">Varas</option>
                    </select>
                </div>


                <input type="submit" name="enviar" value="Generar" class="btn btn-primary" />
            </form>
            <script src="js/validar.js"></script>
        <?php endif; ?>
    </div>
</body>
<script src="js/modernizr.custom.lis.js"></script>

</html>