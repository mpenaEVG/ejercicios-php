<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer Excel</title>
</head>
<body>
    <h1>Subir Archivo Excel</h1>
    <p>Introduce tu excel para mostar su contenido..</p>
    <form action="read_excel.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xls, .xlsx" required>
        <pre>
        <button type="submit">Subir</button>
        </pre>
    </form>
</body>
</html>
