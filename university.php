<html>
<head>
<link rel="stylesheet" type="text/css" href="university.css"/>
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
<body bgcolor="#e5dee3">
<?php
session_start();
$hello=$_SESSION[ 'hehe' ];

$i=0;
$uniname = $_GET['id'];

$jsonhostel=file_get_contents("hostel.json");
$datahostel=json_decode($jsonhostel,true);
$jsonaccred=file_get_contents("accred.json");
$dataaccred=json_decode($jsonaccred,true);
$jsondata=file_get_contents("diploma.json");
$data=json_decode($jsondata,true);
for($i=0;$i<755;$i++)
{
if($data[$i][3]==$uniname)
{
	$id=$data[$i][0];
	$survey_year=$data[$i][1];
	$state		=$data[$i][2];
	$address1			=$data[$i][4];
	$address2			=$data[$i][5];
	$city			=$data[$i][6];
	$district			=$data[$i][7];
	$pin_code			=$data[$i][8];
	$website			=$data[$i][9];
	$yoe			=$data[$i][12];
	$specialized=$data[$i][18];
	$teachingstaff=$data[$i][24];
	$hostelcount=$data[$i][32];
	$regionalcenter=$data[$i][33];
	$type=$data[$i][17];
}

}
$result1=count($dataaccred);
for($i=0;$i<$result1;$i++)
{
	if($dataaccred[$i][1]==$uniname)
	{
		$is_accred=$dataaccred[$i][3];
		$accredagency=$dataaccred[$i][5];
		$accredmax=$dataaccred[$i][6];
		$accredscore=$dataaccred[$i][7];
		break;
	}
	else if($dataaccred[$i][1]!=$uniname)
	{
	$is_accred="NO DATA";
		$accredagency="NO DATA";
		$accredmax="NO DATA";
		$accredscore="NO DATA";	
	}
	
}
$result=count($datahostel);

for($i=0;$i<$result;$i++)
{
	if($datahostel[$i][1]==$uniname)
	{
		$hosteltype=$datahostel[$i][4];
		$hostelcap=$datahostel[$i][5];
		break;
	}
	else
	{
		$hosteltype="NO DATA";
		$hostelcap="NO DATA";
	}
	
}

?>
<div id=menu>

<ul >
<li>Welcome,<?php echo $hello?></li>
<a href="loginpage.php"><li>HOME </li></a>
<li>SERVICES </li>
<li>ABOUT US</li>
</ul>
<br clear="all">
</div> 
<h2 id="uniname"> <?php echo $uniname ?></h2>

<div id="final">


<table colspan='30'  width="600px" cellspacing="10">                           
<tr><td>ID OF THE UNIVERSITY : </td>     <td> <?php echo $id;?></td></tr>
<tr><td>SURVEY YEAR :</td>     <td><?php echo $survey_year;?></td></tr>
<tr><td>TYPE OF UNIVERSITY :</td>     <td><?php echo $type;?></td></tr>
<tr><td>ADDRESS OF UNIVERSITY :</td>     <td><?php echo $address1." ".$address2;?></td></tr>
<tr><td>CITY :</td>     <td><?php echo $city;?></td></tr>
<tr><td>DISTRICT :</td>     <td><?php echo $district;?></td></tr>
<tr><td>PINCODE :</td>     <td><?php echo $pin_code;?></td></tr>
<tr><td>WEBSITE :</td>     <td><a href="<?php echo $website;?>"><?php echo $website;?></a></td></tr>
<tr><td>YEAR OF ESTABLISHMENT :</td>     <td><?php echo $yoe;?></td></tr>
<tr><td>SPECIALIZED :</td>     <td><?php echo $specialized;?></td></tr>
<tr><td>TEACHING STAFF :</td>     <td><?php echo $teachingstaff;?></td></tr>
<tr><td>REGIONAL CENTRE :</td>     <td><?php echo $regionalcenter;?></td></tr></table>
<h2> ACCREDITATIONS :</h2>  
     <table colspan='30'  width="410px" cellspacing="10">                            
<tr><td>IS ACCREDED :</td>            <td><?php echo $is_accred;?></td></tr>
<tr><td>ACCREDED AGENCY :</td>        <td><?php echo $accredagency;?></td></tr>
<tr><td>ACCREDITATION SCORE :</td>    <td><?php echo $accredscore."/".$accredmax;?></td></tr></table>
<h2>HOSTELS INFO </h2>
<table colspan='30'  width="500px" cellspacing="10">
<tr><td>HOSTEL COUNT :</td>          <td><?php echo $hostelcount;?></td></tr>
<tr><td>HOSTEL TYPE :</td>           <td><?php echo $hosteltype;?></td></tr>
<tr><td>HOSTEL CAPACITY :</td>       <td><?php echo $hostelcap;?></td></tr></table>





</div>


</body>



</html>