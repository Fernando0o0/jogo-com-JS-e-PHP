<?php 
session_start();
echo "Hello world!";

$_SESSION['autenticado'] = 'erro';


$var = array('email' => 'fernando@gmail.com', 'senha' => 'fernando');

if($_POST['email'] == $var['email'] && $_POST['senha'] == $var['senha'] ) {
    $_SESSION['autenticado'] = 'autenticado';
    header('location: jogo.php');
}


if($_SESSION['autenticado'] != 'autenticado'){
    header('location: index.html');
} 


?>