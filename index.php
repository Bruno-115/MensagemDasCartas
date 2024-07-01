<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MsgCartas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex  justify-content-start flex-wrap p-3">
        <div class="card border-2 border-info " style="width: 18rem; height: 22rem;">
            
            <div id="carta-frente" class="card-body">
                <a onmouseenter="rodarCarta()" class="btn position-absolute focus-ring py-1 px-2 text-decoration-none border rounded-2" style="width: 18rem; height: 22rem; top:0%;left:0%"></a>
                <h5 class="card-title text-center m-4 ">Criação: 22-02-2024</h5>
                <p class="card-text text-center text-break m-12">Clike na carta para revelar uma mensgaem misteriosa</p>
            </div>

            <div id="carta-atras" class="card-body position-absolute invisible" style="top:0%;left:0%;">
            <a onmouseleave="cartaFrente()" class="btn position-absolute focus-ring py-1 px-2 text-decoration-none border rounded-2" style="width: 18rem; height: 22rem; top:0%;left:0%"></a>    
                <h5 class="card-title text-center m-4">Titulo da carta</h5>
                <p class="card-text text-center text-break m-12">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>

        </div>
    </div>
</body>
<script src="carta.js"></script>
</html>