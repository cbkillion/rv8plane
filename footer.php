   </TD>
    </TR>
    <TR> <!-- Footer -->
      <TD class="BotLeft" WIDTH="150">
       <SCRIPT TYPE="text/javascript">
        <!--
          var a = "brett";
          var b = "rv8plane";
          var c = "com";
          var d = a + "@" + b + "." + c;
          document.write("[<A HREF=\"mailto:" + d + "\">" + d + "</A>]");
        // -->
        </SCRIPT>
      </TD>
      <TD class="BotRight">

<?php
$sql = "select * from log order by id desc limit 1";
$result = $conn->query($sql);
$maxid = $result->fetch_row();
?>     
		Last Update: <?php echo date("j F Y", mktime(0,0,0,$maxid[2],$maxid[1],$maxid[3]));?>

      </TD>
    </TR>
  </TABLE>
 </DIV>
</BODY>
</HTML>	