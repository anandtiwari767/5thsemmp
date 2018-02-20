<head>
<title>
login for students
</title>
<link rel="stylesheet" type="text/css" href="loginpage.css"/>
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
<div id=menu>

<ul>
<li>Welcome</li>
<a href="index.php"><li>HOME </li></a>
<li>SERVICES </li>
<a href="aboutus.php"><li>ABOUT US</li></a>
</ul>
<br clear="all">
</div>
<div>
<img src="logo.gif" width="615" height="152" />	
<div id="hello">

<form align="center" action="state.php" method="post">
<table colspan="30">
<tr>
<td> NAME : &nbsp </td> <td> <input type="text"  name='t1'></td></tr>
<td></td></tr>

<td> </td></tr>

</tr>
<tr class="spaces"><td>STATE : &nbsp </td><td><select name="statelist"><option value="">------------Select State------------</option>

<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttrakhand">Uttrakhand</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select> </td></tr>

<tr><td> &nbsp&nbsp<input type="submit" value="SUBMIT" ></td></tr>

</table></div>

</form></div>
<body>
