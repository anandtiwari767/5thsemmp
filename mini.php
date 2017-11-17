<?php
$i=0;
$j=0;
$jsondata=file_get_contents("diploma.json");
$data=json_decode($jsondata,true);
$j=2;
$k=3;
for($i=0;$i<300;$i++){
	if($data[$i][$j]=="Gujarat")
	{
		
	  	echo $data[$i][$k];
		echo "</br>";
		
	}
}
?>