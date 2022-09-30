<?php 
include("header.php"); 
$id = $_GET[id];
$sql = "select * from log where id=$id"; 
$result = $conn->query($sql);
$entry = $result->fetch_row();
$sql2 = "select * from log order by id desc limit 1";
$result2 = $conn->query($sql2);
$big = $result2->fetch_row();
$maxid = $big[0];
$sql3 = "select id from log where id < $id order by id desc limit 1";
$result3 = $conn->query($sql3);
$prev = $result3->fetch_row();
$sql4 = "select id from log where id > $id order by id asc limit 1";
$result4 = $conn->query($sql4);
$next = $result4->fetch_row();
$cat = $entry[5];
$subcat = $entry[6];

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

<TABLE WIDTH="100%"><TR><TD ALIGN="LEFT">[<A HREF="?id=<?php if($id>1) echo $prev[0]; else echo 1;?>">&lt;&lt;Prev</A>]<BR></TD><TD ALIGN="RIGHT">[<A HREF="?id=<?php if($id==$maxid) echo $id; else echo $next[0];?>">Next&gt;&gt;</A>]<BR></TD></TR></TABLE>
<CENTER><B>[<?php echo date("j F Y", mktime(0,0,0,$entry[2],$entry[1],$entry[3])) ?>]</B></CENTER>
<BR>
<?php
if($cat!=1) { ?><CENTER><B><?php echo $catname;?> - <?php echo $subcatname;?></B></CENTER><?php }
else{ ?><CENTER><B><?php echo $catname;?></B></CENTER><?php } ?>
<CENTER><B><?php echo "$entry[7]";?></B></CENTER>
<?php if($entry[4]!=0){ ?>
<CENTER><B><?php if($entry[4]==1) echo round($entry[4],1)."Hour"; else echo round($entry[4],1)." Hours";?></B></CENTER>
<?php } ?>
<BR>
<?php
for ($i=0; $i<$entry[18]; $i++)
	{
 	echo nl2br($entry[$i+8]);?>
 	<BR>
 	<CENTER><IMG SRC="../../Images/<?php echo strtolower(date("jMy", mktime(0,0,0,$entry[2],$entry[1],$entry[3])));?>_<?php echo $i+1;?>.jpg" BORDER="1" ></CENTER>
	<BR>
<?php 	
 	}
 	
 if (!empty($entry[$entry[18]+8]) && $entry[18]!=10)
 	{
	echo nl2br($entry[$entry[18]+8]);
	echo "<BR><BR>";
	}
?>
<TABLE WIDTH="100%"><TR><TD ALIGN="LEFT">[<A HREF="?id=<?php if($id>1) echo $id-1; else echo 1;?>">&lt;&lt;Prev</A>]<BR></TD><TD ALIGN="RIGHT">[<A HREF="?id=<?php if($id==$maxid) echo $id; else echo $id+1;?>">Next&gt;&gt;</A>]<BR></TD></TR></TABLE>
<?php include("footer.php"); ?>