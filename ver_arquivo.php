<?php

session_start();   

require('conexao.php');


 
//recuperar o codigo do arquivo atraves do metodo GET
$codigo= $_SESSION['id'];

$consulta = "SELECT foto, foto_tipo FROM curriculos WHERE id_candidato = " . $codigo ;
$resultado = mysqli_query($conexao, $consulta);

$dados = mysqli_fetch_array($resultado);
$tipo = $dados['foto_tipo'];
$Arquivo = $dados['foto'];

// EXIBE ARQUIVO  - se o navegador não oferecer suporte para a extensão sera solicita dowload do arquivo
header("Content-type: ".$tipo."");
echo $Arquivo;

?>