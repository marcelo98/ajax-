<?php  
	$miGrado = $_POST['grado'];

	$arrPrimero = array('grupo_A', 'grupo_B', 'grupo_C');
	$arrSegundo = array('grupo_A', 'grupo_c');
	
	$arrRecorrer;

	$miSelect = "";
	if($miGrado == 'Primero'){
		$arrRecorrer = $arrPrimero;
	}else if ($miGrado == 'Segundo'){
		$arrRecorrer = $arrSegundo;
	}

	foreach ($arrRecorrer as $nombre) {
		$miSelect .="<option value=".$nombre.">".$nombre."</option>";
	}
	
	echo $miSelect;



	
 ?>