<?php 
include 'bd.php';
include 'funciones.php';


if(!empty($_GET['d'])){
	$paquete2=$_GET['d'];
	$PaqueteTipo="d";
	$TipoSensor="d";
}
$campos=SpecialSplit($paquete2);

$id_nodo=$campos[1];

$queEmp = "SELECT a0,a1,a2,a3,a4,a5,a6, b0,b1,b2,b3,b4,b5,b6 from nodo where id_nodo=$id_nodo";
    
    $resEmp = mysql_query($queEmp, $conEmp);
    $totEmp = mysql_num_rows($resEmp);
    if($datatmp = mysql_fetch_array($resEmp)) {
        $a[0]=round($datatmp['a0'],4);
        $a[1]=round($datatmp['a1'],4);
        $a[2]=round($datatmp['a2'],4);
		$a[3]=round($datatmp['a3'],4);
		$a[4]=round($datatmp['a4'],4);
		$a[5]=round($datatmp['a5'],4);
		$a[6]=round($datatmp['a6'],4);
		
        $b[0]=round($datatmp['b0'],4);
        $b[1]=round($datatmp['b1'],4);
        $b[2]=round($datatmp['b2'],4);
		$b[3]=round($datatmp['b3'],4);
		$b[4]=round($datatmp['b4'],4);
		$b[5]=round($datatmp['b5'],4);
		$b[6]=round($datatmp['b6'],4);
    }else{
		echo "<ack>0:$id_nodo:1</ack>";
        mysql_close($conEmp);
    }



if($campos[2] == 0){
	echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
}else if($campos[2] == 1){
	
	if($a[0]!=(float)$campos[3]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($a[1]!=(float)$campos[4]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($a[2]!=(float)$campos[5]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($a[3]!=(float)$campos[6]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($a[4]!=(float)$campos[7]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($a[5]!=(float)$campos[8]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($b[0]!=(float)$campos[9]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($b[1]!=(float)$campos[10]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($b[2]!=(float)$campos[11]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($b[3]!=(float)$campos[12]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($b[4]!=(float)$campos[13]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	if($b[5]!=(float)$campos[14]){
		echo "<ack>$id_nodo:1:$a[0]:$a[1]:$a[2]:$a[3]:$a[4]:$a[5]:$b[0]:$b[1]:$b[2]:$b[3]:$b[4]:$b[5]</ack>";
		exit;
	}
	echo "<ack>0:$id_nodo:1</ack>";
	
}else if($campos[2] == 2){
	//datos que son para verificar el chip , la compañia y el nombre del firmware
	//$campos[3] = ultimos 8 numeros del CCID del chip
	//$campos[4] = Compañia conectada
	//$campos[5] = Nombre Firmware
	//
	/*$queEmp = "SELECT a0,a1,a2,a3,a4,a5,a6, b0,b1,b2,b3,b4,b5,b6 from nodo where id_nodo=$id_nodo";
    
    $resEmp = mysql_query($queEmp, $conEmp);
    $totEmp = mysql_num_rows($resEmp);
    if($datatmp = mysql_fetch_array($resEmp)) {
		
	}*/
	
	
	echo "<ack>0:$id_nodo:2</ack>";
}
	mysql_close($conEmp);
?>

