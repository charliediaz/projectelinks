<?php



	echo "hello";
	
	$conexio;
	function conectar_bd()
	{
		global $conexio;
		//Definir datos de conexion con el servidor MySQL
		$elUsr = "root";
		$elPw  = "";
		$elServer ="localhost";
		$laBd = "projectelinks";
	 
		$conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error());
		 
		mysql_select_db($laBd, $conexio ) or die (mysql_error());
	} 
	
	conectar_bd();
	 
	//Recuperar informacion del visitante
	$id_tracking              = $_SERVER['PHP_SELF']; 
	$origen        = $_SERVER['HTTP_REFERER'];
	$destino        =   $_SERVER['PHP_SELF'];    
	 
	//Insertar los datos del visitante...
	$tx_qryInsert  ="INSERT INTO 
	tbl_tracking (id_tracking,origen,destino) 
	VALUES('$id_tracking','$origen','$destino') ;" ;
	$res = mysql_query ( $tx_qryInsert);
	 
	//Mostrar descripcion del error en caso de 
	//que no se haya insertado el tracking
	if(!$res){
		die(mysql_error());
	}
	
	header("Location: https://duckduckgo.com/");
	
	header("Location: http://fly-news.es/");
	
	header("Location: http://www.youtube.com");
	
	header("Location: http://www.aeromodelnet.com.ar/");
	
	header("Location: http://www.diariodeibiza.es/");
	
	header("Location: http://www.scopic.es/");
	
?>