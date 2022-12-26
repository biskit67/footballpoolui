<html><title>Biskit's Football Pool</title>
<link href="Level1_Arial.css" rel="stylesheet" type="text/css"></HTML>
<html>
<?php
$page = "fbpool-old.php";

print <<<HERE
<BODY bgColor=white leftMargin=0 link=blue text=blue topMargin=0 
vLink=blue marginwidth="0" marginheight="0">
      <TABLE border=0 cellPadding=0 cellSpacing=0>
  <TBODY>
  <TR height=140>
    <TD bgColor=white colSpan=2 height=200 width=700><IMG 
      src="fbpool10x.gif"> </TD></TR>
  <TR>
    <TD vAlign=top width=140>
      <TABLE border=0 cellPadding=0 cellSpacing=0>
        <TBODY>
        <TR>
          <TD bgColor=white height=350 vAlign=top width=140><FONT face=impact 
            size=3><BR><A 
            href="fbstandings.html">Standings</A><BR><BR>
              <font color="#D00000">Submit 
            Entry</font><BR>
            <BR><A 
            href="fbrules.html">Rules</A><BR><BR>
            <FONT 
            color=#D00000><a href="index.html">Home</a></FONT><BR>
            <BR><A 
            href="mailto:kjsobiski@att.net">Questions?</A> 
      </FONT></TD></TR></TBODY></TABLE></TD>
    <TD vAlign=top width=560>
      <CENTER>
      </CENTER>
      <div align="center"><BR>
        Submit entry <BR>
      </div>
      <CENTER>
      <BR>
      <font color="#FFFFFF">he</font>
      <form name="form1" method="post" action=$page>
        <p>Choose week
          <select name="FbWeek">
            <option value="1">Week 1 - 9.4.14</option>
            <option value="2">Week 2 - 9.11.14</option>
            <option value="3">Week 3 - 9.18.14</option>
            <option value="4">Week 4 - 9.25.14</option>
            <option value="5">Week 5 - 10.2.14</option>
            <option value="6">Week 6 - 10.9.14</option>
            <option value="7">Week 7 - 10.16.14</option>
            <option value="8">Week 8 - 10.23.14</option>
            <option value="9">Week 9 - 10.30.14</option>
            <option value="10">Week 10 - 11.6.14</option>
            <option value="11">Week 11 - 11.13.14</option>
            <option value="12">Week 12 - 11.20.14</option>
            <option value="13">Week 13 - 11.27.14</option>
            <option value="14">Week 14 - 12.4.14</option>
            <option value="15">Week 15 - 12.11.14</option>
            <option value="16">Week 16 - 12.18.14</option>
            <option value="17">Week 17 - 12.28.14</option>
          </select>
        </p>
HERE;
$conn = mysql_connect('biskitpoolnet.ipagemysql.com', 'generic', 'abc123');
if (!$conn) { 
    die('Could not connect: ' . mysql_error()); 
}  
mysql_select_db(fbpool);
$sql = "SELECT playernumber, name from player order by name";
$result = mysql_query($sql, $conn);
echo "Who are you?<select name=\"playerNum\">"; 
while($row = mysql_fetch_array($result)) { 

echo("<option value=". $row['playernumber'] . ">". $row['name'] ."</option>");
} 
echo "</select>";
print <<<HERE
        <p>
          <input type="submit" name="Submit" value="Submit">
        </p>
      </form>
      <font color="#FFFFFF">re</font> 
      
      <BR>
      </CENTER>
      <BR><BR><BR><BR></TD></TR></TBODY></TABLE>
</BODY>
HERE;
	?>
</HTML>