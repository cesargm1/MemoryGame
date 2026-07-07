<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DrawBox</title>
    @vite(['resources/css/DrawBox/app.css', 'resources/js/DrawBox/app.js' ] )

</head>
<body>
    <div class="app">
        <h1>DrawBox</h1>

        <div class="toolbar">
            <label>
                <input type="color" class="color" name="color">
            </label>

       <div class="brush-size">

          <label>
             Grosor de la linea
             <input
            type="range"
            class="size"
            id="size"
            min="6"
            max="100"
            value="6">
         </label>
        <span class="size-value"></span>
    </div>


            <svg class="trash" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"/>

                <path d="M10 11v6M14 11v6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"/>
            </svg>

            <button class="eraser" title="Goma">
             <svg viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">

        <path
            d="M16.5 3.5L20.5 7.5C21.3 8.3 21.3 9.7 20.5 10.5L11 20H5.5C4.7 20 4 19.3 4 18.5V17L13.5 7.5C14.3 6.7 15.7 6.7 16.5 7.5"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"/>

        <path
            d="M7 20H18"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"/>
    </svg>
        </button>
            <button class="download">
                Descargar
            </button>
        </div>

        <canvas class="drawing-area" width="700" height="600"></canvas>
    </div>
</body>
</html>