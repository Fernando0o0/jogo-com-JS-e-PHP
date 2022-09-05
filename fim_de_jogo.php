<?php
    session_start();
    if($_SESSION['autenticado'] != 'autenticado'){
        header('location: index.html');}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div style="width:35%; margin:0px auto">
    <img src="imagens/game_over.png">
    </div>

    <div style="width:15%; margin:0px auto">
    <input style="margin:0px 5%" class="btn btn-primary" type="button" value="MENU" onclick="menu()">
    <input style="margin:0px 5%" class="btn btn-primary" type="button" value="JOGAR" onclick="jogar()">
    </div>

    <script>


function menu(){
    location.href = 'index.html'
}

function jogar(){
    location.href = 'jogo.php'

}
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>