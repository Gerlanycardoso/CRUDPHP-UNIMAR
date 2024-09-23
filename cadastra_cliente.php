<?php
    require("conecta.php");

    $nome = $_POST['nome'];
    $sobrenome =  $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO cliente (nome, sobrenome, email, telefone)
    VALUES ('$nome', '$sobrenome', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>