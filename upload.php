<?php
$usr = $_POST[''];
$pass = $_POST[''];

$con = mysql_connect("localhost","$usr","$pass");
if (!$con)
	{
    die('Could not connect. Wrong username or password ');
	}

mysql_select_db("rv8plane_database", $con);

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$hours = $_POST['hours'];
$cat = $_POST['cat'];
$subcat = $_POST['subcat'];
$summary = $_POST['summary'];
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];
$text4 = $_POST['text4'];
$text5 = $_POST['text5'];
$text6 = $_POST['text6'];
$text7 = $_POST['text7'];
$text8 = $_POST['text8'];
$text9 = $_POST['text9'];
$text10 = $_POST['text10'];
$numpics = $_POST['numpics'];

$sql = "insert into log (day,month,year,hours,cat,subcat,summary,text1,text2,text3,text4,text5,text6,text7,text8,text9,text10,numpics) values ('".$day."','".$month."','".$year."','".$hours."','".$cat."','".$subcat."','".$summary."','".$text1."','".$text2."','".$text3."','".$text4."','".$text5."','".$text6."','".$text7."','".$text8."','".$text9."','".$text10."','".$numpics."')";
$result = mysql_query($sql,$con);
if($result)
	echo "The information was successfully uploaded to the database.";
else
	echo "Error: Nothing was uploaded to the database!";
	
if($cat==1)
	$catname = "Preparation";
elseif($cat==2){
	$catname = "Empennage";
	if($subcat==1)
		$subcatname = "Horizontal Stabilizer";
	elseif($subcat==2)
		$subcatname = "Vertical Stabilizer";
	elseif($subcat==3)
		$subcatname = "Rudder";
	elseif($subcat==4)
		$subcatname = "Elevators";
	elseif($subcat==5)
		$subcatname = "Trim Tab";}
elseif($cat==3){
	$catname = "Wings";
	if($subcat==1)
		$subcatname = "Spars";
	elseif($subcat==2)
		$subcatname = "Wing";
	elseif($subcat==3)
		$subcatname = "Tanks";
	elseif($subcat==4)
		$subcatname = "Ailerons";
	elseif($subcat==5)
		$subcatname = "Flaps";
	elseif($subcat==6)
		$subcatname = "Wingtips";}
elseif($cat==4){
	$catname = "Fuselage";
	if($subcat==1)
		$subcatname = "Firewall";
	elseif($subcat==2)
		$subcatname = "Bulkheads";
	elseif($subcat==3)
		$subcatname = "Longeron";
	elseif($subcat==4)
		$subcatname = "Aft Fuselage";
	elseif($subcat==5)
		$subcatname = "Center Fuselage";
	elseif($subcat==6)
		$subcatname = "Forward Fuselage";
	elseif($subcat==7)
		$subcatname = "Forward Fuse Prep";
	elseif($subcat==8)
		$subcatname = "Forward Fuse Assembly";
	elseif($subcat==9)
		$subcatname = "Aft Deck/Top Skins";
	elseif($subcat==10)
		$subcatname = "Cabin";
	elseif($subcat==11)
		$subcatname = "Canopy Frame";
	elseif($subcat==12)
		$subcatname = "Front Deck";
	elseif($subcat==13)
		$subcatname = "Wing Mating";
	elseif($subcat==14)
		$subcatname = "Tail Mounting";
	elseif($subcat==15)
		$subcatname = "Misc";}
elseif($cat==5){
	$catname = "Panel & Wiring";
	if($subcat==1)
		$subcatname = "Panel Planning";
	elseif($subcat==2)
		$subcatname = "Panel Cutting";
	elseif($subcat==3)
		$subcatname = "Wiring";}
elseif($cat==6){
	$catname = "Firewall Forward";
	if($subcat==1)
		$subcatname = "Firewall Forward";
	elseif($subcat==2)
		$subcatname = "Cowling";
	elseif($subcat==3)
		$subcatname = "Baffles";}
elseif($cat==7){
	$catname = "Finish Kit";
	if($subcat==1)
		$subcatname = "Canopy";
	elseif($subcat==2)
		$subcatname = "Engine Mount";
	elseif($subcat==3)
		$subcatname = "Landing Gear";}
else
	$catname = "Wrap-up Work";
?>

<html>
<body>

<br><br>

<html>
<body>

<table>
<tr><td>Date:</td><td><?php echo date("j F Y", mktime(0,0,0,$month,$day,$year)) ?></td></tr>
<tr><td>Hours:</td><td><?php echo $hours;?></td></tr>
<tr><td>Category:</td><td><?php echo $catname;?></td></tr>
<tr><td width=100>Sub-Category:</td><td><?php echo $subcatname;?></td></tr>
<tr><td>Summary:</td><td><?php echo $summary;?></td></tr>
</table>

<BR><BR>

</body>
</html>