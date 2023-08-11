<?php
$servidor="localhost";
$bancodedados="projetocap";
$usuario="root";
$senha="";

$conexao = mysqli_connect($servidor, $bancodedados , $usuario, $senha);
if (!$conexao)
{
    echo ("Falha ao conectar ! :" .$mysqli_connect_errno());
}
else
    echo "Conectado ao Bando de Dados";
?>