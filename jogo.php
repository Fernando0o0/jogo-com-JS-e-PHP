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
    <link rel="stylesheet" href="estilo.css">
    <title>JOGO</title>
</head>
<body >

        <p>tempo restante: <p id="tempo">20</p></p>

<div style="position:relative; bottom:-530px">
<img id="1" src="imagens/coracao_cheio.png">
<img id="2" src="imagens/coracao_cheio.png">
<img id="3" src="imagens/coracao_cheio.png">
    </div>

<script>
  var a = 1
  var tempo = 20
 function posicao(){

    if(document.getElementById('id')){
        document.getElementById('id').remove()
        document.getElementById(a).src = 'imagens/coracao_vazio.png'
        
        a++
    }

    if(a > 3){
        location.href = "fim_de_jogo.php";
    } 

    width = Math.random() * window.innerWidth
    height = Math.random() * window.innerHeight

    width = width - 200
    height = height - 200

    width = (width < 0)? 0 : width
    height = (height < 0)? 0 : height

    console.log(window.innerHeight)
    console.log(height)

    document.getElementById('tempo').innerHTML = tempo 
    tempo--

    if(tempo <= 0){
        location.href = "vitoria"
    }

    function remove(){
        x.remove()
    }

    var x = document.createElement('img')
    x.id = 'id'
    x.src = 'imagens/mosca.png'
    x.style.height = '100px'
    x.style.width = '100px'
    x.style.position = 'relative'
    x.style.left = width + "px"
    x.style.top = height + 'px'
    x.onclick = function() {
        this.remove()
    }

    document.body.appendChild(x)
 }

    function temporestante(){
        document.write(tempo)

        tempo--
    }

setInterval(() => {
    posicao()
}, 1000); 

</script>
</body>
</html>