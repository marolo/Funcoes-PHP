<?php
 //http://blog.idealmind.com.br/topicos/php/
/*
 * Gerador de cуdigo
 *
 * Uma funзгo muito simples que permite a geraзгo de cуdigos e cupons aleatуrios em php.
 * Vocк poderб escolher um prefixo, o nъmero de caractere do cуdigo/cupom,
 * e a quantidade de cуdigos/cupons que vocк quer gerar.
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