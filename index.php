<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MsgCartas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .rounded {
            filter: brightness(40%);
        }
        .card {
            margin: 1rem;
            border: none;
        }
        .card-inner,.card-creation {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .card:hover .card-inner {
            transform: rotateY(180deg);
        }
        .card-frente, .card-atras {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        .card-atras {
            transform: rotateY(180deg);
        }
    </style>


</head>
<body>
<?php 
    $connection = mysqli_connect('localhost','root','','msgcartas'); 
?> 
    <div class="d-flex flex-wrap justify-content-start p-3">

    <div class="card  overflow-hidden" style="width: 18rem; height: 22rem;">
                
                <div class="card-creation">
                            
                <img class="rounded float-start z-0" style="width: 18.3rem; height: 22.3rem; top:-1%; left:-1%;" src="cartaFundo.jpg" alt="">
             
                <div id="carta-frente" class="card-frente card-body">
                    <h5 class="card-title text-center m-4 z-3 text-light text-uppercase">Criar sua propria mensagem</h5>
                    <p class="card-text text-center text-break m-12 z-3 text-light">Clique no botão da carta para escrever qualquer coisa, um fato, uma mensagem,curiosidade ou oq conseguir imaginar</p>
                    <button class="btn btn-primary text-uppercase mt-2" type="submit" value="POST" onclick="cartaRevelar()" style="margin-left: 4.5rem;">Criar carta</button>    
                </div>
                <form id="carta-atras" class="card-body card-atras" method="post">
                        <p class="card-title text-center text-light text-uppercase">Inserir um titulo</label>
                        <input class="form-control" name="titulo" type="text">
                        <p class="card-title text-center text-light text-uppercase">Inserir o conteudo</label>
                        <textarea class="form-control" name="conteudo" id="exampleFormControlTextarea1" rows="7"></textarea>
                        <button class="btn btn-success mt-2">Enviar carta</button>
                </form>
                </div>
    
            </div>
 <?php 
    $query = "INSERT INTO carta (carta_titulo, carta_conteudo) VALUES ('$_POST[titulo]', '$_POST[conteudo]');";
    $enviarCarta = mysqli_query($connection,$query);
 ?>

        <!--------------------------------------------------------------------------------------------------------- -->
     <?php 
       $query ="SELECT * FROM carta";
       $todasCartas = mysqli_query($connection,$query);
       while($row = mysqli_fetch_array($todasCartas)){
        $data_carta = $row['data_carta'];
        $carta_conteudo = $row['carta_conteudo'];
        $carta_titulo = $row['carta_titulo'];
        echo '<div class="card  overflow-hidden" style="width: 18rem; height: 22rem;">
                
            <div class="card-inner">
                        
            <img class="rounded float-start z-0" style="width: 18.3rem; height: 22.3rem; top:-1%; left:-1%;" src="
            cartaFundo.jpg" alt=""> 
                <div id="carta-frente" class="card-frente card-body">
                <h5 class="card-title text-center m-4 z-3 text-light">';echo $data_carta; echo '</h5>
                <p class="card-text text-center text-break m-12 z-3 text-light">Passe o mouse na carta para revelar uma mensagem misteriosa</p>
            </div>

                <div id="carta-atras" class="card-body overflow-auto  card-atras">
                <h5 class="card-title text-center m-4 text-light">';echo $carta_titulo; echo '</h5>
                <p class="card-text text-center text-break m-12 overflow-auto text-light">';echo $carta_conteudo; echo'</p>
                </div>
                    
            </div>

        </div>';
       }
       ;
    ?>

    </div>
</body>
<script>
function cartaRevelar() {
    const cartas = document.getElementsByClassName('card-creation');
    for (let carta of cartas) {
        carta.style.transform = 'rotateY(180deg)';
    }
}
</script>
</html>