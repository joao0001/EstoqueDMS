<?php
include "conect.php";


$produto = "$_POST[produto]";
$cor = "$_POST[cor]";
$valor = "$_POST[valor]";
$quantidade = "$_POST[quantidade]";
$fornecedor = "$_POST[fornecedor]";
$datadecomp = "$_POST[datadecomp]";

$sql->query("INSERT INTO produto(produto, cor, valor, quantidade, fornecedor, datadecomp)
VALUES ('$produto','$cor','$valor','$quantidade', '$fornecedor' , '$datadecomp')");

?>
