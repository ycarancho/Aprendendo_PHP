<?php 


$str = "  Limpando strings     ";
echo $str. "<br>";
echo "String limpa: " . trim($str) . "<br>";
// comandos para limpar;

trim($str); //limpa todos os epações em branco da direita e esquerda;
ltrim($str);// Limpa todos os espaçoes em branco da esquerda
rtrim($str);// limpa espaços em brando da direita.