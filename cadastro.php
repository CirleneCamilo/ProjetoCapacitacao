<?php
include("conexao.php");

$nome=$_POST['nome'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO cadastro(nome, email, phone) Values ('$nome', '$email', '$phone')";

if(mysqli_query($conexao,$sql)){
    echo "Usuário cadastrado com sucesso";
}

else{
    echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>