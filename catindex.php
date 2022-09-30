<?php 
$cat = $_GET['cat'];

if($cat==1){
	$catname = "Preparation";
	$numsc = 0;}
elseif($cat==2){
	$catname = "Empennage";
	$numsc = 5;
	$subcatnames = array("Horizontal Stabilizer","Vertical Stabilizer","Rudder","Elevators","Trim Tab");}
elseif($cat==3){
	$catname = "Wings";
	$numsc = 6;
	$subcatnames = array("Spars","Wing","Tanks","Ailerons","Flaps","Wingtips");}
elseif($cat==4){
	$catname = "Fuselage";
	$numsc = 15;
	$subcatnames = array("Firewall","Bulkheads","Longeron","Aft Fuselage","Center Fuselage","Forward Fuselage","Forward Fuse Prep","Forward Fuse Assembly","Aft Deck/Top Skins","Cabin","Canopy Frame","Front Deck","Wing Mating","Tail Mounting","Misc");}
elseif($cat==5){
	$catname = "Panel & Wiring";
	$numsc = 3;
	$subcatnames = array("Panel Planning","Panel Cutting","Wiring");}
elseif($cat==6){
	$catname = "Firewall Forward";
	$numsc = 3;
	$subcatnames = array("Firewall Forward","Cowling","Baffles");}
elseif($cat==7){
	$catname = "Finish Kit";
	$numsc = 3;
	$subcatnames = array("Canopy","Engine Mount","Landing Gear");}
elseif($cat==8){
	$catname = "Wrap-up Work";
	$numsc = 0;}

include("header.php");

$sql = "SELECT SUM(hours) FROM log WHERE cat=$cat";
$result = $conn->query($sql);
$cattotal = $result->fetch_array();
?>

<CENTER><H3><U><B><?php echo $catname;?> [<?php echo round($cattotal[0],1);?> Hours]</B></U></H3></CENTER>

<?php
for ($i=1; $i<=$numsc; $i++)
	{
$sql = "SELECT SUM(hours) FROM log WHERE cat=$cat AND subcat=$i";
$result = $conn->query($sql);
$subcattotal = $result->fetch_row();

$sql = "select * from log where cat=$cat and subcat=$i";
$result = $conn->query($sql);
$subcatrows = $result->num_rows;
if($subcatrows!=0)
	{
?>
	<B><?php echo $subcatnames[$i-1];?> [<?php echo round($subcattotal[0],1);?> Hours]</B>
	<Table Border="0">
	<?php
	$sql = "select * from log where cat=$cat and subcat=$i order by id"; 
	$result = $conn->query($sql);
	for ($k=1; $k<=$result->num_rows; $k++)
		{
		$entry = $result->fetch_row();
	?>
	<TR><TD WIDTH="10"></TD><TD WIDTH="160" VALIGN=TOP>[<A HREF="/?id=<?php echo $entry[0];?>"><?php echo date("j F Y", mktime(0,0,0,$entry[2],$entry[1],$entry[3]));?></A>]</TD><TD>
	<?php 
	if ($entry[4]!=0)
		{?>
		[<?php echo round($entry[4],1); if ($entry[4]==1) echo " Hour"; else echo " Hours";?>] - <?php echo $entry[7];?></TD></TR>
	<?php   }
	else
		echo $entry[7];?></TD></TR>
<?php
  		}
?>
	</Table>
	<BR>
<?php	
	}
	}
if($numsc==0)
	{
	$sql = "select * from log where cat=$cat order by id"; 
	$result = $conn->query($sql);
	?><Table Border="0"><?php
	for ($k=1; $k<=$result->num_rows; $k++)
		{
		$entry = $result->fetch_row();
	?>
	<TR><TD WIDTH="10"></TD><TD WIDTH="160" VALIGN=TOP>[<A HREF="/?id=<?php echo $entry[0];?>"><?php echo date("j F Y", mktime(0,0,0,$entry[2],$entry[1],$entry[3]));?></A>]</TD><TD>
	<?php 
	if ($entry[4]!=0)
		{?>
		[<?php echo round($entry[4],1); if ($entry[4]==1) echo " Hour"; else echo " Hours";?>] - <?php echo $entry[7];?></TD></TR>
	<?php   }
	else
		echo $entry[7];?></TD></TR>
<?php
  		}
?>
	</Table>
<?php
	}
?>

<?php include("footer.php"); ?>