<?php
include("conexao.php");

if(isset($_POST['btn-submit'])){

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $phone=$_POST['telefone'];


/*
$sql="Select nome,email,telefone from cadastro where nome='$nome' and email='$email'
and telefone='$telefone'";

*/

$sql="SELECT email from cadastro where email='$email'";

$rs=$mysqli->query($sql);

if(mysqli_num_rows($rs)>0){
    $_SESSION['cadastrado']='Usuário já Cadastrado';

    header('Location:cadastro.html');
    echo "<br>Usuário já está Cadastrado!";
}

else{
    $sql = "INSERT INTO cadastro(nome, email, telefone) Values ('$nome', '$email', '$telefone')";
    $mysqli->query($sql);
    
    header('Location:cadastro.html');
    echo "<br>Usuário cadastrado com sucesso!";
}
$mysqli->close();
}

?>