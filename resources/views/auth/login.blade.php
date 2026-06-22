<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/login.css'])
</head>
<body>

<div class="login-container">
    <h1>Iniciar sesión</h1>
    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Entrar</button>
       @if ($errors->any())
           @foreach ($errors->all() as $error)
             <div class="alert alert-danger" role="alert">
                 {{ $error }}
             </div>
          @endforeach
        @endif
    </form>

    <p>¿No tienes cuenta? <a href="/register">Registrate</a></p>
</div>

</body>
</html>