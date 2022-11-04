<?php
$porta="localhost:3307";
$Bbradesco="conexao";
$usuario="root";
$senha="";

$conexao=new PDO("mysql:host=$porta;dbname=$Bbradesco;","$usuario","$senha");
?>