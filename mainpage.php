<?php include("header.php");?>

<CENTER><H3><U><B>News</B></U></H3>
The project was sold in 2013.
<BR>
I will try and keep this site up for reference.
<BR>
<BR>
</CENTER>
<HR>
  
<CENTER><H3><U><B>Most Recent Updates</B></U></H3></CENTER>

<TABLE BORDER="0">

<?php
$sql = "select * from log order by id desc limit 10"; 
$result = $conn->query($sql);

while($entry = $result->fetch_array()) {
?>

<TR><TD WIDTH="160" VALIGN=TOP><A HREF="/?id=<?php echo $entry[0];?>">[<?php echo "$entry[1] ";echo date("F", mktime(0,0,0,$entry[2],$entry[1],$entry[3])); echo " $entry[3]";?>] </A></TD><TD VALIGN=TOP>


<?php echo $entry[7];?></TD></TR>
<?php
  }// close out for loop
?>
  </TABLE>

<BR>
<HR>

<P>
I am building a Van's RV-8 aircraft. What is it? It is an all-metal plane that
is put together with rivets. Lots of rivets. The plane holds two people in a tandem
configuration (pilot in front, passenger in back), is capable of aerobatic flight
in the range of +6g/-3g, and cruises upwards of 200 mph. Construction comes with
many choices including engine size, nose gear vs tail-dragger,
constant speed vs fixed-pitch prop, etc...
</P>

<HR>
Disclaimer: If for some reason you think I know what I am doing, you are mistaken.
What I do or say is not necessarily the right way to build an airplane. There are many people
out there who know how to build an airplane, however, I am not one of those people.

<?php include("footer.php"); ?>