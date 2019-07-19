<?php


function SpecialSplit($paquete2){
	$j=0;
	$sCount=0;
		
		for ($i=0;$i<strlen($paquete2);$i++){
			if(($paquete2[$i]==' ' ||$paquete2[$i]=='-' || $paquete2[$i]=='+') && $i!=$j){
				$campos[$sCount]=trim(substr($paquete2, $j, $i-$j));
				if($campos[$sCount]==''){//mejora para firmware que viene con split + y con negativos (ejemplo +34+56+-45+7)
					//echo "hola";
					continue;
				}
				//echo $campos[$sCount]." <br>";
				//var_dump($campos[$sCount], is_nan($campos[$sCount]));
				//echo "<br>";
				if(trim ($campos[$sCount])=="nan"){
				   // echo "detec";
				   
				   if($sCount==2){
					   echo "<ack>$campos[1]:$campos[0]:1</ack>";
					   exit;
				   }
					$campos[$sCount]=-1000;
				}
				$j=$i;
				$campos[$sCount]=(float)$campos[$sCount];
				$sCount++;
				
			}
		}
	
	$campos[$sCount]=substr($paquete2, $j, $i-$j); 
	if(trim ($campos[$sCount])=="nan"){
	   // echo "detec";
		$campos[$sCount]=-1000;
	}
	$campos[$sCount]=(float)$campos[$sCount];

	return ($campos);
}



?>