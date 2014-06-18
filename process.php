<?php 	

include("conexion.php");




if (isset($_POST["btn1"])) {



	$btn=$_POST["btn1"];





	if ($btn=="Capturar") {  

		$hora=$_POST['hora'];
		$minuto=$_POST['minuto'];
		$hormin=$hora.":".$minuto;
		$dia=$_POST['dia'];
		$mes=$_POST['mes'];
		$año=$_POST['año'];
		$fecha=$año."-".$mes."-".$dia;

		$conexion=mysql_connect($host,$user,$pw)or die("problemas al conectar el host");
		mysql_select_db($bd,$conexion)or die("problemas al conectarla");
		mysql_query("SET NAMES utf8");
		mysql_query("INSERT INTO captura (horin,fechin,pdc,linea,estacion,descr,causa,interv,tipo,area,subsist,element) 
					VALUES ('$hormin','$fecha','$_POST[pdc]','$_POST[Lin]','$_POST[est]','$_POST[descr]','$_POST[causa]','$_POST[interv]',
							'$_POST[tipo]','$_POST[area]','$_POST[subs]','$_POST[element]')", $conexion);
		echo "<h1>Datos insertados correctamente</h1>";
		echo '<meta http-equiv="refresh" content="2;URL=\'http://stccayc.org.mx/avsform"\'">';
		//header("location:index.html");



		

	}if ($btn=="Buscar"){



		echo "boton Buscar";

	}if ($btn=="Estadisticas"){



		echo "boton Estadisticas";

	}



	
	}















 ?>