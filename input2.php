<?php
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$hours = $_POST['hours'];
$cat = $_POST['cat'];
$subcat = $_POST['subcat'];
$summary = $_POST['summary'];
$numpics = $_POST['numpics'];

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

<form action="upload.php" method="post">
<table>
<tr><td>Date:</td><td><?php echo date("j F Y", mktime(0,0,0,$month,$day,$year)) ?></td></tr>
<tr><td>Hours:</td><td><?php echo $hours;?></td></tr>
<tr><td>Category:</td><td><?php echo $catname;?></td></tr>
<tr><td width=100>Sub-Category:</td><td><?php echo $subcatname;?></td></tr>
<tr><td>Summary:</td><td><?php echo $summary;?></td></tr>
</table>

<input type="hidden" name="day" value=<?php echo $day;?> />
<input type="hidden" name="month" value=<?php echo $month;?> />
<input type="hidden" name="year" value=<?php echo $year;?> />
<input type="hidden" name="hours" value=<?php echo $hours;?> />
<input type="hidden" name="usr" value="rv8plane_brett" />
<input type="hidden" name="cat" value=<?php echo $cat;?> />
<input type="hidden" name="subcat" value=<?php echo $subcat;?> />
<input type="hidden" name="numpics" value=<?php echo $numpics;?> />
<input type="hidden" name="summary" value="<?php echo $summary;?>" />

<?php
for ($i=1; $i<=$numpics; $i++)
	{
?>
<CENTER><textarea name="text<?php echo $i;?>", rows=3, cols=100></textarea></CENTER>
<CENTER><IMG SRC="Images/<?php echo strtolower(date("jMy", mktime(0,0,0,$month,$day,$year)));?>_<?php echo $i;?>.jpg" BORDER="1" ></CENTER>
<?php 	
 	}
for ($i=$numpics+1; $i<=10; $i++)
	{
?>
<CENTER><textarea name="text<?php echo $i;?>", rows=3, cols=100></textarea></CENTER>
<?php 	
 	}
?>
<BR><BR>
Password:<input type="password" name="password"/></input>
<BR>
<input type="submit" value="Upload"/>
<input type="button" value="Cancel" onclick = "window.location.href='http://www.rv8plane.com'"/>
</form>

</body>
</html>