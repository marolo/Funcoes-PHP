<?php
 //http://blog.idealmind.com.br/topicos/php/
/*
 * Gerador de c�digo
 *
 * Uma fun��o muito simples que permite a gera��o de c�digos e cupons aleat�rios em php.
 * Voc� poder� escolher um prefixo, o n�mero de caractere do c�digo/cupom,
 * e a quantidade de c�digos/cupons que voc� quer gerar.
 *
*/ 
$prefixo = "EP3";
$tamanho = 10;
$qtd     = 50;
$c       = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 
for($i = 0; $i<$qtd; $i++)
{
	$cod = $prefixo;
	for( $j = 0; $j< ( $tamanho - strlen($prefixo) ); $j++)
	{
		$cod .= $c{mt_rand(0,35)};
	}
	echo "$cod<br />";
}
 
?>