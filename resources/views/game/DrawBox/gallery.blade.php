<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de dibujos</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f4f4;
            color:#333;
        }

        header{
            background:#4f46e5;
            color:white;
            padding:25px;
            text-align:center;
            box-shadow:0 2px 10px rgba(0,0,0,.15);
        }

        main{
            max-width:1200px;
            margin:40px auto;
            padding:0 20px;
        }

        .gallery{
            display:grid;
            grid-template-columns:repeat(auto-fill,minmax(250px,1fr));
            gap:25px;
        }

        .card{
            background:white;
            border-radius:12px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
            transition:.2s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .image{
            height:220px;
            background:#ececec;
            display:flex;
            justify-content:center;
            align-items:center;
            color:#888;
            font-size:18px;
        }

        .info{
            padding:15px;
        }

        .info h3{
            margin-bottom:8px;
        }

        .info p{
            color:#666;
            font-size:14px;
        }
    </style>
</head>
<body>

    <header>
        <h1>🎨 Galería de dibujos</h1>
        <p>Todos los dibujos guardados aparecerán aquí.</p>
    </header>

    <main>

        <div class="gallery">

            @foreach ($drawings as $drawing)
                
            <div class="card">
                <div class="image">
                    <img src="storage/app/public/img/drawings/{{$drawing->image}}" alt="draw">
                </div>

                <div class="info">
                    <h3>usuario {{$drawing->user->nickname}}</h3>
                    <p>Juego: DrawBox</p>
                    <p>fecha de creacion: {{$drawing->created_at}}</p>
                </div>
            </div>
            @endforeach

        </div>

    </main>

</body>
</html>