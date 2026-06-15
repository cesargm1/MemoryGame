<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="/css/contact.css">
</head>
<body>
    <form method="POST">
    @csrf
    <label>
        <input type="email" name="email">
        Escribe tu email
    </label>
    <label>
        <input type="text" name="name">
        Escribe tu nombre
    </label>

    <select name="select">
        <option value="value1">Value 1</option>
        <option value="value2" selected>Value 2</option>
        <option value="value3">Value 3</option>
   </select>
     <label>
        problema
       <textarea name="problem" id="" cols="50" rows="20" placeholder="escribe la descripcion del problema">
       </textarea>
    </label>
    <label>
        <input type="hidden" name="ip">
    </label>
    <button type="submit" name="submit">enviar incidencia</button>
</form>
</body>
</html>