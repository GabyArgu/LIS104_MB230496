<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Autor</title>
    <?php include  'Views/cabecera.php'; ?>
</head>

<body>
    <?php include 'Views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3><?= isset($autor) ? "Actualizar" : "Nuevo"; ?> Autor</h3>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?= isset($autor) ? "Autores/update" : "Autores/create"; ?>" method="POST">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código del Autor:</label>
                        <input type="text" class="form-control" name="codigo_autor" id="codigo_autor" placeholder="Ingresa el código del autor"
                            value="<?php if (isset($autor)) echo $autor[0]['codigo_autor']; ?>" <?php if(isset($autor)) echo "readonly"; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Autor:</label>
                        <input type="text" class="form-control" name="nombre_autor" id="nombre_autor" placeholder="Ingresa el nombre del autor"
                            value="<?php if (isset($autor)) echo $autor[0]['nombre_autor']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa el teléfono de contacto"
                            value="<?php if (isset($autor)) echo $autor[0]['telefono']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="/Autores">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>