<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de memoria</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main>
        <h1>Juego de memoria</h1>
            <section class="actions">
            <button class="start">Empezar juego</button>
            <button class="reset">resetear</button>
        </section>

        <div class="timer-section">
            <span class="timer"></span>
            <span class="timer-value"></span>
            <span class="moves"></span>
        </div>

        <section class="board"></section>
    </main>
</body>
</html>