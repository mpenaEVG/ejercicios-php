<!DOCType html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ejercicio1</title>
  </head>
  <body>

  <h1>calculadora</h1>

  <form action="../controlador/script.php" method="get">
    <label>elige un numero</label>
    <input type=number name=numero1 min=1 max=100 required>
    </br>
    <label>elige otro<label>
    <input type=number name=numero2 min=1 max=100 required>
    </br>
    <label>elige una operacion</label>
    <select id=operacion name=operacion>
        <option value='+'>suma</option>
        <option value='-'>resta</option>
        <option value='*'>multiplicacion</option>
        <option value='/'>division</option>
    </select>
    </br>
    <input type=submit name=enviar>

  </form>
</body>
</html>
