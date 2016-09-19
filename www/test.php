<?php
$strDato = trim($_POST['dato']);

if($strDato == ""){
	echo "Digite un numero";
}else{
	if(is_numeric($strDato)){
		echo ($strDato * 2);
	}else{
		echo "Ingrese solo numeros";
	}
}

?>