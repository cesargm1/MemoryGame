<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
        @vite(['resources/css/register.css'])

</head>
<body>
    <h1>Registrarse</h1>
    <form method="POST" action="/register">
    @csrf
      <label>
            nombre de usuario:
            <input type="text" name="name">
        </label>

        <label>
            email:
            <input type="email" name="email">
        </label>

         <label>
            contraseña:
            <input type="password" name="password">
        </label>

         <label>
            repetir contraseña:
            <input type="password" name="confirm_password">
        </label>
        <button type="submit">Registrarse</button>
  </form>
</body>
</html>

