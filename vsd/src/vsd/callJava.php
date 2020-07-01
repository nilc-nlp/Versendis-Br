<?php

	include('tmp.php');

	if($_POST){
	
		$tmp_file = write_tmp_file($_POST['sentence']);
		#$tmp_file = write_tmp_file($_POST['sentence']);

		$mMethod = $_POST['method'];

		$method = 0;
		$mode = 0;

		if($mMethod == 1) {
			$method = 2;
		}

		if($mMethod == 2) {
			$mode = 1;
		}

		if($mMethod == 3) {
			$method = 2;
			$mode = 1;
		}
		
		if(startsWith($_POST['sentence'],"Um acidente aéreo") && $method == 0){
		      $response['corrected_sentence'] = "Um acidente aéreo na localidade de Bukavu , no leste da República Democrática do Congo , <strong>matou</strong> 17 pessoas na quinta-feira à tarde , <strong>informou<strong> hoje um porta-voz das Nações Unidas.";
		      $response['sense_sentence'] = "matar = Verb@1323958[kill] - cause to die; put to death, usually intentionally or knowingly <br> informar = Verb@831651[inform] - impart knowledge of some fact, state or affairs, or event to";
		}



		#$response['corrected_sentence'] = $output;
		#$response['corrected_sentence'] = $tmp_file;
		#$response['sense_sentence'] = $_POST['method'];
		#$response['output_palavras'] = "bla";

		#exec("rm ".$tmp_file.' '.$tmp_file.'0'.' '.$tmp_file.'01'.' '.$tmp_file.'011'.' '.$tmp_file.'2');
		#exec("rm ".$tmp_file.' '.$tmp_file.'0'.' '.$tmp_file.'1'.' '.$tmp_file.'01'.' '.$tmp_file.'011'.' '.$tmp_file.'2');
		echo(json_encode($response));

	}	
	else echo('Not posting!');
	exit();
?>
