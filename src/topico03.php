<?php
$cep = "03911240";
echo "cep = $cep";
$valor=5124.784;
echo "<br>Valor = $valor"; //Valor = 5124.784
echo "<br>R$ ".number_format($valor,2,",",".");
echo "<br>R$ ".number_format($valor,0,",",".");

/*
R$ 5.124,78
*/

$nome="Bete";
echo "<br>Nome = $nome";
echo '<br>Nome = $nome';
$cor="red";
echo "<p style='color:$cor'>$nome</p>";

/*
$valor = "5124.784";
$valorInt = (int)$valor;
var_dump($valorInt);
echo "<br>$valorInt";
$valorFloat = (float)$valor;
var_dump($valorFloat);
$valornovo = $valorFloat - $valorInt;
echo "<br>$valornovo";
echo " ".number_format($valornovo,3)
*/

$valor = 5124.784;
$inteiro =(int)$valor;
$decimal=$valor-$inteiro;
echo "<br>valor = $inteiro";
echo "<br>valor = ".$decimal;
printf("<br>valor = %.3f",$decimal);
?>