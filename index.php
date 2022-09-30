<?php
if (count($_GET)==0)
	{
	include("mainpage.php");
	}
elseif (count($_GET,1)==1) 
	{
	if (isset($_GET[cat]))
		{
		include("catindex.php");
		}
	elseif (isset($_GET[id]))
		{
		include("logentry.php");
		}
	else
		{
		echo "Error: I don't know where you are trying to go...";
		}
	}
elseif (count($_GET,1)==2 && (isset($_GET[cat]) && isset($_GET[id])))
	{
	include("logentry.php");
	}
else
	{
	echo "Error: I don't know where you are trying to go...";
	}
?>