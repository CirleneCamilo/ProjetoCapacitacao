<?php
$hostname="localhost";
$bancodedados="projetocap";
$usuario="root";
$senha="";

//Criar conexão

$mysqli=new $mysqli($hostname, $bancodedados , $usuario, $senha);

//Verificar conexão

if ($mysqli->conecct_errno){

    echo "Falha ao conectar ! :(" .$mysqli->connect_errno.")" .$mysqli->connect_errno;
}

else{
    echo "Conectado ao Bando de Dados";
}
?>