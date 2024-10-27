<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer Excel</title>
</head>
<body>
    <h2>Subir Archivo Excel</h2>
    <p>Introduce tu excel para mostar su contenido..</p>
    <form action="read_excel.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xls, .xlsx" required>
        <pre>
        <button type="submit">Subir</button>
        </pre>
    </form>
    <h2>Descarga excel con datos de alumnos</h2>
    <form action="create_excel.php" method=POST> 
        <input type=submit name=Enviar value=Descargar>
    </form>

    <h2>Enviar correo a los alumnos</h2>
    <form action="enviar_correos.php" method=POST> 
        <input type=submit name=Enviar value="Enviar Correo">
    </form>
</body>
</html>
