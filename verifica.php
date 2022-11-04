<?php 
session_start();
$email="raissamonikp@123.com";
$senha="mortandela";
$emailRecebido=$_POST['email'];
$senhaRecebido=$_POST['senha'];
if($email==$emailRecebido && $senha==$senhaRecebido)
{
    $_SESSION['deslocado']=1;
    header('location:index.php');
} else{
    $_SESSION['deslocado']=0;
    header('location:login.php');
}