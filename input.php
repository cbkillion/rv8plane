<html>
<body>
<table>
<form action="input2.php" method="post">
<tr><td>Day:</td><td><input type="text" name="day" /></input></td></tr>

<tr><td>Month:</td><td>
<select name="month">
<option value="1">January</option>
<option value="2" selected = "selected">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
</td></tr>

<tr><td>Year:</td><td>
<select name="year">
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012" selected="selected">2012</option>
</select>
</td></tr>

<tr><td>Hours:</td><td><input type="text" name="hours" /></input></td></tr>

<tr><td>Category:</td><td>
<select name="cat">
<option value="1">Preparation
<option value="2">Empennage</option>
<option value="3" selected="selected">Wings</option>
<option value="4">Fuselage</option>
<option value="5">Panel & Wiring</option>
<option value="6">Firewall Forward</option>
<option value="7">Finish Kit</option>
<option value="8">Wrap-up Work</option>
</select>
</td></tr>

<tr><td>Sub-Category:</td><td>
<select name="subcat">
<option value="0">None</option>
<optgroup label="Empennage">
<option value="1">Horizontal Stabilizer</option>
<option value="2">Vertical Stabilizer</option>
<option value="3">Rudder</option>
<option value="4">Elevators</option>
<option value="5">Trim Tab</option>
</optgroup>
<optgroup label="Wings">
<option value="1">Spars</option>
<option value="2">Wing</option>
<option value="3">Tanks</option>
<option value="4">Ailerons</option>
<option value="5">Flaps</option>
<option value="6">Wingtips</option>
</optgroup>
<optgroup label="Fuselage">
<option value="1">Firewall</option>
<option value="2">Bulkheads</option>
<option value="3">Longerons</option>
<option value="4">Aft Fuselage</option>
<option value="5">Center Fuselage</option>
<option value="6">Foward Fuselage</option>
<option value="7">Foward Fuse Prep</option>
<option value="8">Foward Fuse Assembly</option>
<option value="9">Aft Deck/Top Skins</option>
<option value="10">Cabin</option>
<option value="11">Canopy Frame</option>
<option value="12">Front Deck</option>
<option value="13">Wing Mating</option>
<option value="14">Tail Mounting</option>
<option value="15">Misc</option>
</optgroup>
<optgroup label="Finish Kit">
<option value="1">Canopy</option>
<option value="2">Engine Mount</option>
<option value="3">Landing Gear</option>
</optgroup>
<optgroup label="Firewall Forward">
<option value="1">Firewall Forward</option>
<option value="2">Cowling</option>
<option value="3">Baffles</option>
</optgroup>
<optgroup label="Panel & Wiring">
<option value="1">Panel Planning</option>
<option value="2">Panel Cutting</option>
<option value="3">Wiring</option>
</optgroup>
</td></tr>

<tr><td>Summary:</td><td><textarea name="summary", rows=1, cols=40></textarea></td></tr>

<tr><td>Number of Pictures:</td><td><input type="text" name="numpics" /></input></td></tr>
</table>

<br>
<br>
<input type="submit" value="Next" />
<input type="button" value="Cancel" onclick = "window.location.href='http://www.rv8plane.com'"/>
</form>

</body>
</html>

