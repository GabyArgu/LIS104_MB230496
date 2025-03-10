<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Información recibida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section class="container my-5">
        <article>
            <h1 class="text-center fw-bold">Conversión de dolar a euro</h1>
            <div id="info" class="table-responsive">
                <?php
                $tasa_cambio = 0.92;

                $equivalente_euros = null;

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])):
                    $cantidad_dolares = $_POST['dolar'];

                    if (is_numeric($cantidad_dolares) && $cantidad_dolares > 0) {
                        $equivalente_euros = $cantidad_dolares * $tasa_cambio;
                    } else {
                        $error = "Por favor, ingrese una cantidad válida en dólares.";
                    }
                else:
                    echo "\t<tr>\n";
                    echo "\t\t<td colspan='2' class='text-danger'>No se han ingresado datos desde el formulario.</td>\n";
                    echo "\t</tr>\n";
                endif;
                ?>

                <?php
                if (isset($error)) {
                    echo "<p class='error text-center'>$error</p>";
                }
                ?>

                <?php if ($equivalente_euros !== null) : ?>
                    <!-- Mostrar resultado en una tabla -->
                    <table class="table table-bordered mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Cantidad en Dólares</th>
                                <th scope="col">Equivalente en Euros</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo number_format($cantidad_dolares, 2); ?> USD</td>
                                <td><?php echo number_format($equivalente_euros, 2); ?> EUR</td>
                            </tr>
                        </tbody>
                    </table>
                <?php endif; ?>
                <div id="link" class="text-center mt-4">
                    <a href="conversorform.html" class="btn btn-primary">Ingresar nuevos datos</a>
                </div>
            </div>
        </article>
    </section>
</body>

</html>