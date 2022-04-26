<?php
include("pessoa.class.php");

$pessoa = new Pessoa();

$pessoa->setNome($_GET ['txtNome']);
echo "Nome: ".$pessoa->getNome();

?>