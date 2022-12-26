<html>
<?php
include 'header.php';
$page = "fbpoolentry.php";
$date = date('m/d/Y', time());
$dtyr = date('Y', time());
$dtdy = date('d', time());
print <<<HERE
<div id="submitWeek">
<br />
Submit Entry<br /><br />
      <form name=form1 method=post action=$page>
        <p>Choose week
          <select name=FbWeek>
HERE;
$selected1 = "selected";
if ($dtyr > '2022' && $dtdy > '01') {
$selected18 = "selected"; 
}elseif ($date > '12/26/22' ) {
$selected17 = "selected"; 
}elseif ($date > '12/19/22') {
$selected16 = "selected"; 
}elseif ($date > '12/12/22') {
$selected15 = "selected"; 
}elseif ($date > '12/05/22') {
$selected14 = "selected"; 
}elseif ($date > '11/28/22') {
$selected13 = "selected"; 
}elseif ($date > '11/21/22') {
$selected12 = "selected"; 
}elseif ($date > '11/14/22') {
$selected11 = "selected"; 
}elseif ($date > '11/07/22') {
$selected10 = "selected"; 
}elseif ($date > '10/31/22') {
$selected9 = "selected"; 
}elseif ($date > '10/24/22') {
$selected8 = "selected"; 
}elseif ($date > '10/17/22') {
$selected7 = "selected"; 
}elseif ($date > '10/10/22') {
$selected6 = "selected"; 
}elseif ($date > '10/03/22') {
$selected5 = "selected"; 
}elseif ($date > '09/26/22') {
$selected4 = "selected"; 
}elseif ($date > '09/19/22') {
$selected3 = "selected"; 
}elseif ($date > '09/12/22') {
$selected2 = "selected"; 
}

echo "<option $selected1 value=\"1\">Week 1 - 9.08.22</option>";
echo" <option $selected2 value=\"2\">Week 2 - 9.15.22</option>";
echo"<option $selected3 value=\"3\">Week 3 - 9.22.22</option>";
echo"<option $selected4 value=\"4\">Week 4 - 9.29.22</option>";
echo"<option $selected5 value=\"5\">Week 5 - 10.6.22</option>";
echo" <option $selected6 value=\"6\">Week 6 - 10.13.22</option>";
echo"<option $selected7 value=\"7\">Week 7 - 10.20.22</option>";
echo" <option $selected8 value=\"8\">Week 8 - 10.27.22</option>";
echo"<option $selected9 value=\"9\">Week 9 - 11.03.22</option>";
echo" <option $selected10  value=\"10\">Week 10 - 11.10.22</option>";
echo" <option $selected11 value=\"11\">Week 11 - 11.17.22</option>";
echo" <option $selected12 value=\"12\">Week 12 - 11.24.22</option>";
echo"<option $selected13 value=\"13\">Week 13 - 12.1.22</option>";
echo" <option $selected14 value=\"14\">Week 14 - 12.8.22</option>";
echo"<option $selected15 value=\"15\">Week 15 - 12.15.22</option>";
echo"<option $selected16 value=\"16\">Week 16 - 12.22.22</option>";
echo"<option $selected17 value=\"17\">Week 17 - 12.29.22</option>";
echo"<option $selected18 value=\"18\">Week 18 - 1.8.23</option>";
echo"</select>";
echo"</p>";

$conn = mysqli_connect('biskitpoolnet.ipagemysql.com', 'generic', 'abc123');
if ($conn->connect_error) { 
    die('Connection failed: ' . $conn->connect_error); 
}  
mysqli_select_db($conn, 'fbpool');
$sql = "SELECT playernumber, name from player where active='Y' order by name";
$result = mysqli_query($conn, $sql);
echo "Who are you?<select name=\"playerNum\">"; 
while($row = mysqli_fetch_array($result)) { 
echo("<option value=". $row['playernumber'] . ">". $row['name'] ."</option>");
} 
echo "</select>";
print <<<HERE
        <p>
          Thursday Only &nbsp<input type="checkbox" name="Thursday" id="Thursday" onclick="handleClick()">
        <p>
          <input type="submit" name="Submit" value="Submit">
        </p>
      </form>
      <font color="#FFFFFF">re</font> 
      
</div>
</BODY>
HERE;
echo "<SCRIPT language=JavaScript>\n";
echo "function handleClick(){\n";
echo "var form = document.getElementsByName(\"form1\")[0];\n";
echo "var checkBox=document.getElementById(\"Thursday\");\n";
echo "if(checkBox.checked){\n";
echo "       form.action = \"fbpoolentrythursday.php\"}\n";
echo "     else {\n";
echo "       form.action = \"fbpoolentry.php\";\n";
echo "    };\n";
echo "    };</SCRIPT>";

	?>
</HTML>
