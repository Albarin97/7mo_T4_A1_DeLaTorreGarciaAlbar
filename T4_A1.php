<!DOCTYPE html>
<html>
<head>
	<title>Arreglos y Funciones</title>
</head>
<body>

	<?php 
	$vector_alumnos["Albar"][0]=100;
	$vector_alumnos["Albar"][1]=85;
	$vector_alumnos["Albar"][2]=90;
	$vector_alumnos["Albar"][3]=100;
	$vector_alumnos["Albar"][4]=70;
	$vector_alumnos["Albar"][5]=65;
	
	$vector_alumnos["Luiz"][0]=85;
	$vector_alumnos["Luiz"][1]=50;
	$vector_alumnos["Luiz"][2]=50;
	$vector_alumnos["Luiz"][3]=75;
	$vector_alumnos["Luiz"][4]=100;
	$vector_alumnos["Luiz"][5]=100;
	
	$vector_alumnos["Ivan"][0]=100;
	$vector_alumnos["Ivan"][1]=85;
	$vector_alumnos["Ivan"][2]=95;
	$vector_alumnos["Ivan"][3]=65;
	$vector_alumnos["Ivan"][4]=80;
	$vector_alumnos["Ivan"][5]=95;
	
	$vector_alumnos["Dani"][0]=100;
	$vector_alumnos["Dani"][1]=45;
	$vector_alumnos["Dani"][2]=80;
	$vector_alumnos["Dani"][3]=85;
	$vector_alumnos["Dani"][4]=95;
	$vector_alumnos["Dani"][5]=90;
	
	$vector_alumnos["Felix"][0]=100;
	$vector_alumnos["Felix"][1]=100;
	$vector_alumnos["Felix"][2]=100;
	$vector_alumnos["Felix"][3]=100;
	$vector_alumnos["Felix"][4]=95;
	$vector_alumnos["Felix"][5]=100;
	
	$vector_alumnos["Miguel"][0]=100;
	$vector_alumnos["Miguel"][1]=100;
	$vector_alumnos["Miguel"][2]=75;
	$vector_alumnos["Miguel"][3]=95;
	$vector_alumnos["Miguel"][4]=95;
	$vector_alumnos["Miguel"][5]=100;

	$vector_alumnos["Deisy"][0]=85;
	$vector_alumnos["Deisy"][1]=85;
	$vector_alumnos["Deisy"][2]=85;
	$vector_alumnos["Deisy"][3]=50;
	$vector_alumnos["Deisy"][4]=100;
	$vector_alumnos["Deisy"][5]=75;
	
	$vector_alumnos["Adan"][0]=50;
	$vector_alumnos["Adan"][1]=60;
	$vector_alumnos["Adan"][2]=30;
	$vector_alumnos["Adan"][3]=50;
	$vector_alumnos["Adan"][4]=70;
	$vector_alumnos["Adan"][5]=50;
	
	$vector_alumnos["Mario"][0]=10;
	$vector_alumnos["Mario"][1]=20;
	$vector_alumnos["Mario"][2]=65;
	$vector_alumnos["Mario"][3]=50;
	$vector_alumnos["Mario"][4]=10;
	$vector_alumnos["Mario"][5]=60;
	
	$vector_alumnos["Andrew"][0]=100;
	$vector_alumnos["Andrew"][1]=50;
	$vector_alumnos["Andrew"][2]=70;
	$vector_alumnos["Andrew"][3]=70;
	$vector_alumnos["Andrew"][4]=85;
	$vector_alumnos["Andrew"][5]=85;
	

	$prom_gen = obtener_promedio($vector_alumnos);
	echo "<br><br>Promedio General Del Grupo: ".$prom_gen;
	echo "<br>";
	$promedio_al0=promedio_por_alumno($vector_alumnos, "Albar");
	$promedio_al1=promedio_por_alumno($vector_alumnos, "Luiz");
	$promedio_al2=promedio_por_alumno($vector_alumnos, "Ivan");
	$promedio_al3=promedio_por_alumno($vector_alumnos, "Dani");
	$promedio_al4=promedio_por_alumno($vector_alumnos, "Felix");
	$promedio_al5=promedio_por_alumno($vector_alumnos, "Miguel");
	$promedio_al6=promedio_por_alumno($vector_alumnos, "Deisy");
	$promedio_al7=promedio_por_alumno($vector_alumnos, "Adan");
	$promedio_al8=promedio_por_alumno($vector_alumnos, "Mario");
	$promedio_al9=promedio_por_alumno($vector_alumnos, "Andrew");
	
	echo "<br>Promedio Albar: ".$promedio_al0;
	echo "<br>Promedio Luiz: ".$promedio_al1;
	echo "<br>Promedio Ivan: ".$promedio_al2;
	echo "<br>Promedio Dani: ".$promedio_al3;
	echo "<br>Promedio Felix: ".$promedio_al4;
	echo "<br>Promedio Miguel: ".$promedio_al5;
	echo "<br>Promedio Deisy: ".$promedio_al6;
	echo "<br>Promedio Adan: ".$promedio_al7;
	echo "<br>Promedio Mario: ".$promedio_al8;
	echo "<br>Promedio Andrew: ".$promedio_al9;

	echo "<br>";

	$arreglo = array($promedio_al0, $promedio_al1, $promedio_al2, $promedio_al3, $promedio_al4, $promedio_al5, $promedio_al6, $promedio_al7, $promedio_al8, $promedio_al9);
	mejor_promedio($prom_gen, $arreglo);

	function obtener_promedio($arreglo){
		$promedio_general=0;

		$promedio_mat0=0;
		$promedio_mat1=0;
		$promedio_mat2=0;
		$promedio_mat3=0;
		$promedio_mat4=0;
		$promedio_mat5=0;

		foreach ($arreglo as $alumno) {
			$promedio_mat0+=$alumno[0];
			$promedio_mat1+=$alumno[1];
			$promedio_mat2+=$alumno[2];
			$promedio_mat3+=$alumno[3];
			$promedio_mat4+=$alumno[4];
			$promedio_mat5+=$alumno[5];

			for ($i=0; $i < 6; $i++) { 
				$promedio_general+=$alumno[$i];
			}
		}
		echo "<br>Promedio Materia 1: ".$promedio_mat0/10;
		echo "<br>Promedio Materia 2: ".$promedio_mat1/10;
		echo "<br>Promedio Materia 3: ".$promedio_mat2/10;
		echo "<br>Promedio Materia 4: ".$promedio_mat3/10;
		echo "<br>Promedio Materia 5: ".$promedio_mat4/10;
		echo "<br>Promedio Materia 6: ".$promedio_mat5/10;

		return $promedio_general/60;
	}

	function promedio_por_alumno($vector, $nombre){
		$prom=0;
		for ($i=0; $i < 6; $i++) { 
			$prom+=$vector[$nombre][$i];
		}
		return $prom/6;
	}

	function mejor_promedio($prom, $arreglo){
		$cont=0;
		$mejor=$arreglo[0];
		for ($i=0; $i < 10; $i++) { 
			if ($arreglo[$i]>$mejor) {
				$mejor=$arreglo[$i];
			}
			if ($arreglo[$i]>$prom) {
				$cont++;
			}
		}
		echo "<br>".$cont." Alumnos tienen mejor promedio que el grupal";
		echo "<br>El mejor promedio obtenido por un alumno es de: ".$mejor;
	}



	?>
</body>
</html>