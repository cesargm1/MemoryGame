<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ranking</title>
    @vite(['resources/css/ranking.css'])
</head>
<body>

<div class="container">

    <h1>🏆 Ranking Memory Game</h1>

    <div class="ranking">
        @foreach ( $scores as $score )
            
        <div class="card">
            <div class="position">{{$loop->iteration}}</div>
            <div class="info">
                <p class="points">puntos: {{$score->points}}</p>
                <p class="user">👤 {{ $score->user->nickname }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>