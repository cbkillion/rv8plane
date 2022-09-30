<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
  <TITLE>Brett Killion's RV-8 Airplane</TITLE>
<link rel="stylesheet" type="text/css" href="/rv.css" />
</HEAD>
<BODY>
 <DIV ALIGN="CENTER">
  <TABLE class="main" WIDTH="90%" >
    <TR> <!-- Header -->
      <TD CLASS="TopLeft" WIDTH="150" HEIGHT="94">
        <CENTER>
          <IMG SRC="/thumb.jpg" HEIGHT="96" WIDTH="152" BORDER="0">
        </CENTER>
      </TD>
      <TD class="TopMiddle">
        <CENTER><a href="http://www.rv8plane.com"><IMG SRC="/banner.png" height="96"></CENTER></a>
      </TD>
    </TR>
    <TR> <!-- Main Content -->
      <TD class="nav" WIDTH="150">
        <DIV id="DIVnav">

<?php
$conn = new mysqli("localhost", "rv8plane_visitor", "password", "rv8plane_database");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT SUM(hours) FROM log";
$result = $conn->query($sql);
$totalhours = $result->fetch_array();
?>
          <H4>Total Hours: <?php echo round($totalhours[0],1); ?></H4><HR>

<H4>Build Log</H4>
<UL> 
<LI><A HREF="/?cat=1">Preparation</A></LI>
<LI><A HREF="/?cat=2">Empennage</A></LI>
<LI><A HREF="/?cat=3">Wings</A></LI>
<LI><A HREF="/?cat=4">Fuselage</A></LI>
<LI><A HREF="/?cat=5">Panel / Wiring</A></LI>
<LI><A HREF="/?cat=6">Firewall Forward</A></LI>
<LI><A HREF="/?cat=7">Finish Kit</A></LI>
<LI><A HREF="/?cat=8">Wrap Up Work</A></LI>
</UL>
<HR>
<H4>Resources</H4>
<UL>
<LI><A HREF="http://www.rivetbangers.com">Rivet Bangers</A></LI>
<LI><A HREF="http://www.vansairforce.net">Vans Air Force</A></LI>
<LI><A HREF="http://www.vansaircraft.com">Van's Aircraft</A></LI>
</UL>
<BR>
<HR>
  <A HREF="/admin">Admin</A>

        </DIV>
      </TD>
		<TD CLASS="main"> <!-- Main Data Display  -->