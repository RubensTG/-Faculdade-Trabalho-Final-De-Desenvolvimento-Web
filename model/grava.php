<?php
include "conexao.php";

$recnome = $_GET['fnome'];
$recrg = $_GET['frg'];
$reccelular = $_GET['fcelular'];

mysqli_query($conexao, "insert into clientes (nome, rg, celular) values('recnome', 'recrg', 'reccelular')");

header("location:lista.php")

?>