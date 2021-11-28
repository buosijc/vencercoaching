<?php

$servername = "localhost"; //Server Local
$database = "coachingdb";
$username = "f9cliente";
$password = "Anajuli@29";


//Create Connection
$conexao = mysqli_connect($servername, $username, $password, $database);

mysqli_set_charset($conexao, 'utf8');





