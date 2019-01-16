<?php

$var1 = "Var first";
$var2 = "Var two";
$var3 = "Var three";


for($i=1;$i<=3;$i++){
	echo ${'var'.$i}."<br />";
}
?>