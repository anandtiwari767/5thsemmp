<html>
<head>


<link rel="stylesheet" type="text/css" href="state.css"/>
<style>
ul{
	padding-top: 17px;
	margin-left:30%;
}
ul li{
	float : left;
	list-style : none;
	margin-left: 30px;
	background : #cc0000;
	color : white;
	padding:0 ;
}
ul li:hover
{
	background: orange;
	font-size: 18px;
}


</style>
</head>

<body  bgcolor="#e5dee3">

<?php

$state = $_POST[ 'statelist' ];
$hello = $_POST[ 't1' ];

if($hello=="")
	{
	
 echo "<center><h2 >PLEASE ENTER THE NAME</h2></center>";
 echo "<script> setTimeout(\"location.href='loginpage.php';\",2000);</script>";
			
}

else if($state=="")
{
	
 echo "<center><h2 >PLEASE ENTER THE STATE</h2></center>";
 echo "<script> setTimeout(\"location.href='loginpage.php';\",2000);</script>";
			
}


	
session_start();
$_SESSION[ 'hehe' ]=$hello;

$a=0;
$i=0;
$j=0;
$jsondata=file_get_contents("diploma.json");
$data=json_decode($jsondata,true);
$j=2;
$k=3;
for($i=0;$i<754;$i++){
	if($data[$i][$j]==$state)
	{
		
	  	$university[$a] = $data[$i][$k];
		$a++;
		
		
	}
	
}
?>
<div id="menu">

<ul >
<li>Welcome,<?php echo $hello;?></li>
<a href="index.php"><li>HOME </li>
<li>SERVICES </li>
<li>ABOUT US</li>
</ul>
<br clear="all"></div>
<marquee>
<h2 > Universities For <?php echo $state;?></h2>
</marquee>
<div id=state>
<?php
$result=count($university);

	
for($a=0;$a<$result;$a++){ 
echo '<a href="university.php?id=' . $university[$a] . '">' . $university[$a] . '</a>';

 echo "</br>";}
?>
</div>
</body>
</html>
