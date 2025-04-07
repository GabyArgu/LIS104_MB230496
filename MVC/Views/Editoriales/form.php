<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Editorial</title>
    <?php include  'Views/cabecera.php'; ?>
</head>

<body>
    <?php include 'Views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3><?= isset($editorial) ? "Actualizar" : "Nuevo"; ?> Editorial</h3>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?= isset($editorial) ? "Editoriales/update" : "Editoriales/create"; ?>" method="POST">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código del Editorial:</label>
                        <input type="text" class="form-control" name="codigo_editorial" id="codigo_editorial" placeholder="Ingresa el código del editorial"
                            value="<?php if (isset($editorial)) echo $editorial[0]['codigo_editorial']; ?>" <?php if(isset($editorial)) echo "readonly"; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Editorial:</label>
                        <input type="text" class="form-control" name="nombre_editorial" id="nombre_editorial" placeholder="Ingresa el nombre del editorial"
                            value="<?php if (isset($editorial)) echo $editorial[0]['nombre_editorial']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Contacto:</label>
                        <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Ingresa el nombre del contacto"
                            value="<?php if (isset($editorial)) echo $editorial[0]['contacto']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa el teléfono del contacto"
                            value="<?php if (isset($editorial)) echo $editorial[0]['telefono']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="/Editoriales">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>