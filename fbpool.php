<html>
<title>Biskit's 2010 Football Pool Entry Page</title>
<SCRIPT language=JavaScript>
<!--
    window.onload = function (){
    populatePoints(0);
};
    function checkfields() {
         var picks = new Array();
         var scores = new Array();
         var entryString = "";
         var entryString2 = "";
<?php
$conn = mysql_connect('biskitpoolnet.ipagemysql.com', 'generic', 'abc123');
if (!$conn) { 
    die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db(fbpool);

$sql = "SELECT name, email from player WHERE playerNumber = $playerNum";
$result = mysql_query($sql, $conn);
$row = mysql_fetch_assoc($result);
$pName = $row["name"];
$pEmail = $row["email"];
$FbWeek=6;
$sql = "SELECT * from schedule WHERE weekNum = $FbWeek";
$result = mysql_query($sql, $conn);
$row = mysql_fetch_assoc($result);
$g1v = $row["vTeam1"];
$g1h = $row["hTeam1"];
$g2v = $row["vTeam2"];
$g2h = $row["hTeam2"];
$g3v = $row["vTeam3"];
$g3h = $row["hTeam3"];
$g4v = $row["vTeam4"];
$g4h = $row["hTeam4"];
$g5v = $row["vTeam5"];
$g5h = $row["hTeam5"];
$g6v = $row["vTeam6"];
$g6h = $row["hTeam6"];
$g7v = $row["vTeam7"];
$g7h = $row["hTeam7"];
$g8v = $row["vTeam8"];
$g8h = $row["hTeam8"];
$g9v = $row["vTeam9"];
$g9h = $row["hTeam9"];
$g10v = $row["vTeam10"];
$g10h = $row["hTeam10"];
$g11v = $row["vTeam11"];
$g11h = $row["hTeam11"];
$g12v = $row["vTeam12"];
$g12h = $row["hTeam12"];
$g13v = $row["vTeam13"];
$g13h = $row["hTeam13"];
$g14v = $row["vTeam14"];
$g14h = $row["hTeam14"];
$g15v = $row["vTeam15"];
$g15h = $row["hTeam15"];
$g16v = $row["vTeam16"];
$g16h = $row["hTeam16"];
$tieb = $row["tiebreak"];
$bye = $row["Bye Teams"];
$sub = 12;
$gms = 16;
$addPoints = 0;
if ($g16v == ""){
  $sub = 13;
  $addPoints = 1;
  $gms=15;}
if ($g15v == ""){
  $sub = 14;
  $addPoints = 2;
  $gms=14;}
if ($g14v == ""){
  $sub = 15;
  $addPoints = 3;
  $gms = 13;}
echo "         var num = document.fbpool.elements.length - $sub\n";
echo "         var validflag = true\n";
echo "         var points = 16 - $gms + 1\n";

print <<<HERE
         
         for (var i=num; i<num+10; i++) 
          {
              if (document.fbpool.elements[i].value == null ||
                  document.fbpool.elements[i].value == "") 
                   {
                    validflag = false
                    alert("The " + document.fbpool.elements[i].name +
                          " field is blank. Please enter a value.")
                    break 
                   }
           } 
         if (validflag == false)
           { 
             return validflag
           }
         for (var i=2; i<num; i+=3) 
          {
              if (document.fbpool.elements[i-1].checked != true &&
                  document.fbpool.elements[i-2].checked != true)
                 {
                   validflag = false
                   alert (document.fbpool.elements[i-1].name +
                          " has not been selected.")
                   break
                 }
              else
              if ((document.fbpool.elements[i].value == null ||
                  document.fbpool.elements[i].value == "") &&
                 (typeof document.fbpool.elements[i] != 'submit' ||
                  typeof document.fbpool.elements[i] != 'reset'))
                   {
                    validflag = false
                    alert("The " + document.fbpool.elements[i-1].name +
                          " field is blank. Please enter a value.")
                    break 
                   }
               else
               if (document.fbpool.elements[i].value > 16) 
                   {
                    validflag = false
                    alert("The " + document.fbpool.elements[i].name +
                          " value is too large. Must be <= 16.")
                    break 
                   }
               else
               if (document.fbpool.elements[i].value < points) 
                   {
                    validflag = false
                    alert("The " + document.fbpool.elements[i].name +
                          " value is too small. Must be >= " + points)
                    break 
                   }
           }
          if (validflag == false)
           { 
             return validflag
           }
          var k = 1;
          for (var i=2; i<num; i+=3) 
           {
            scores[k] = document.fbpool.elements[i].value;
            k++;
            for (var j=i+3; j<num; j+=3)
              {
                if (document.fbpool.elements[i].value ==
                    document.fbpool.elements[j].value)
                   {
                    validflag = false
                    alert("The " + document.fbpool.elements[i].value +
                          " point value is duplicated.")
                    j = num
                    break 
                   }
              }
           }
          if (validflag == false)
           { 
             return validflag
           }
          var j = 1;
          for (var i=0; i<=num; i+=3)
              {
                if (document.fbpool.elements[i].checked == true)
                  {
                    picks[j] = "v"
                  }
                else
                  {
                    picks[j] = "h"
                  }
               j++;
              }
           for (var i=1; i<=16; i++)
              {
                if (picks[i] != null && picks[i] != "")
                  {
                    entryString = entryString + picks[i] + scores[i]
                  }
               }
          entryString2 = document.fbpool.realname.value + "*" + entryString;
          document.fbpool.entry.value = entryString2;
                  
          return validflag
      }
    /* function populatePoints(pointChosen){
         debugger;
 for (var k=1; k< 17; k++)
           {
           var pointValue = document.fbpool["Game_" + k + "_Points"].value
           var theDropDown = document.fbpool["Game_" + k + "_Points"].options
           //var numberOfOptions = theDropDown.options.length
           theDropDown.remove
           var x = 0
           //document.fbpool["Game_" + k + "_Points"].value = pointValue
           document.fbpool["Game_" + k + "_Points"].options[x] = new Option(0)
           x++
           for (var i=1;i<17;i++) {
             if (document.fbpool["Game_1_Points"].value != i &&
                 document.fbpool["Game_2_Points"].value != i &&
                 document.fbpool["Game_3_Points"].value != i &&
                 document.fbpool["Game_4_Points"].value != i &&
                 document.fbpool["Game_5_Points"].value != i &&
                 document.fbpool["Game_6_Points"].value != i &&
                 document.fbpool["Game_7_Points"].value != i &&
                 document.fbpool["Game_8_Points"].value != i &&
                 document.fbpool["Game_9_Points"].value != i &&
                 document.fbpool["Game_10_Points"].value != i &&
                 document.fbpool["Game_11_Points"].value != i &&
                 document.fbpool["Game_12_Points"].value != i &&
                 document.fbpool["Game_13_Points"].value != i &&   
                 document.fbpool["Game_14_Points"].value != i && 
                 document.fbpool["Game_16_Points"].value != i && 
                 document.fbpool["Game_15_Points"].value != i){
                 document.fbpool["Game_" + k + "_Points"].options[x] = new Option(i)
                //document.fbpool["Game_" + k + "_Points"].value = pointValue
                 x++}
           else if (pointValue = i){
                 document.fbpool["Game_" + k + "_Points"].options[x] = new Option(i)
                 document.fbpool["Game_" + k + "_Points"].selected = true
                 x++                
           }}
           document.fbpool["Game_" + k + "_Points"].value = pointValue
          } 
          }*/
function matchValue(collection, value) {
    // We need this to look for a certain value
    // in a collection of values because IE < 9
    // doesn't support .indexOf().
    for (var i = 0; i < collection.length; i++) {
        if (collection[i] == value) {
            return true;
        }
    }

    return false;
}

function populatePoints(pointChosen) {
    // Grab all your selects.
    var sels = document.querySelectorAll('select');
    // The number of selects returned by the query.
    var count = sels.length;
    // Value of the select changed.
    var pointChosenVal = pointChosen.value;
    // Array to keep the current values for all selects.
    var chosenValues = [count];

    for (var i = 0; i < count; i++) { 
        // Keeping the current values.
        chosenValues[i] = sels[i].value;
    }

    for (var i = 0; i < count; i++) {
        // The current value of this select.
        var thisSelVal = sels[i].value;

        // Remove all its options.
        sels[i].options.length = 0;

        // As our selects have an extra option (value = 0),
        // and considering that the number of options = number of selects,
        // we increase the count by 1.
        for (var k = 0; k <= count; k++) {  
            // 1) k = 0 => Add to the options.
            // 2) This is the pointChosen => Add to the options.
            // 3) This is another select, k matches its value or k
            //    isn't in the list of selected values => Add...              
                var points=0;
                if (k == 0){
                points = k;}
                else{
                points = k + $addPoints;}
            if (points == 0 ||
                (sels[i] == pointChosen && pointChosen.value != 0) ||
                ((sels[i] != pointChosen  || pointChosen.value == 0)
&& (points == thisSelVal || !matchValue(chosenValues, points))))
 {
debugger;
                var opt = document.createElement('option');
                opt.value = points;
                opt.text = points.toString();
                opt.selected = (points == thisSelVal);

                sels[i].add(opt);
            }
        }
    }
}
// -->
</SCRIPT>

<link href="Level1_Arial.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY bgColor=white leftMargin=0 link=blue text=blue topMargin=0 
vLink=blue marginwidth="0" marginheight="0"  onload="populatePoints();">
<TABLE border=0 cellPadding=0 cellSpacing=0>
  <TR height=140>
    <TD colSpan=2 height=200 width=700><IMG 
      src="fbpool10x.gif"> </TD></TR>
  <TR>
    <TD vAlign=top width=140>
      <TABLE border=0 cellPadding=0 cellSpacing=0>
        <TR>
          <TD height=350 vAlign=top width=140><FONT face=impact 
            size=3><BR><A 
            href="fbstandings.html">Standings</A><BR><BR><FONT 
            color=D00000>Submit Entry</FONT><BR><BR><A 
            href="fbrules.html">Rules</A><BR><BR><A 
            href="index.html">Home</A><BR><BR><A 
            href="mailto:kjsobiski@att.net">Questions?</A> 
      </FONT></TD></TR></TABLE></TD>
    <TD vAlign=top width=560>
      <FORM  action="cgi-bin/form.pl" method=post
      name=fbpool onSubmit="return checkfields()">
      <P align=center><FONT color=D00000 size=+2><B>Choose the team you think 
      will win</B></FONT><BR>
	  Week  $FbWeek
      <TABLE>
HERE;
dispGame($g1v, $g1h, 1, "Game_1", "Game_1_Points", "#C0C0C0");
dispGame($g2v, $g2h, 2, "Game_2", "Game_2_Points", "white");
dispGame($g3v, $g3h, 3, "Game_3", "Game_3_Points", "#C0C0C0");
dispGame($g4v, $g4h, 4, "Game_4", "Game_4_Points", "white");
dispGame($g5v, $g5h, 5, "Game_5", "Game_5_Points", "#C0C0C0");
dispGame($g6v, $g6h, 6, "Game_6", "Game_6_Points", "white");
dispGame($g7v, $g7h, 7, "Game_7", "Game_7_Points", "#C0C0C0");
dispGame($g8v, $g8h, 8, "Game_8", "Game_8_Points", "white");
dispGame($g9v, $g9h, 9, "Game_9", "Game_9_Points", "#C0C0C0");
dispGame($g10v, $g10h, 10, "Game_10", "Game_10_Points", "white");
dispGame($g11v, $g11h, 11, "Game_11", "Game_11_Points", "#C0C0C0");
dispGame($g12v, $g12h, 12, "Game_12", "Game_12_Points", "white");
dispGame($g13v, $g13h, 13, "Game_13", "Game_13_Points", "#C0C0C0");
if ($g14v != ""){
  dispGame($g14v, $g14h, 14, "Game_14", "Game_14_Points", "white");}
else
   {echo "<INPUT name=Game_14_Points type=hidden value=3>\n";}
if ($g15v != ""){
  dispGame($g15v, $g15h, 15, "Game_15", "Game_15_Points", "#C0C0C0");}
else
   {echo "<INPUT name=Game_15_Points type=hidden value=2>\n";}
if ($g16v != ""){
  dispGame($g16v, $g16h, 16, "Game_16", "Game_16_Points", "white");}
else
   {echo "<INPUT name=Game_16_Points type=hidden value=1>\n";}

printEnd($bye, $tieb, $FbWeek, $pEmail, $pName);
function printEnd($bye, $tieb, $FbWeek, $pEmail, $pName){
   echo "</TABLE>\n";
   echo "Bye Teams: $bye       </FONT></P>\n";
   echo "<INPUT name=recipient type=hidden value=kjsobiski@att.net>\n";
   echo "<INPUT name=subject type=hidden value='$pName Football Pool Picks'>\n";
   echo '<INPUT name=return_link_url type=hidden value="http://biskitpoolnet.ipage.com/index.html">';
   echo "<INPUT name=return_link_title type=hidden value='Back to Main Page'>\n";
   echo "<INPUT name=week type=hidden value=$FbWeek>\n";
   echo "<TABLE>\n";
   echo "<TR>\n";
   echo "<TD width=100></TD>\n";
   echo "<TD>Email <INPUT maxLength=30 name='email' size=30 value=$pEmail></TD></TR>\n";
   echo "<TR>\n";
   echo "<TD width=100></TD>\n";
   echo "<TD>Name <INPUT maxLength=50 name=realname size=50 value='$pName'></TD></TR>\n";
   echo "<TR>\n";
   echo "<TD width=100></TD>\n";
   echo "<TD>Sheet Type <INPUT maxLength=2 name='sheet type' size=2>\n"; 
   echo "(W)eekly, (S)eason, or (B)oth </TD></TR>\n";
   echo "<TR>\n";
   echo "<TD width=100></TD>\n";
   echo "<TD>$tieb <INPUT maxLength=6 name=tiebreaker size=6></TD></TR></TABLE></P>\n";
   echo '<INPUT name="standings page" type=hidden value="http://biskitpoolnet.ipage.com/fbstandings.html">'; 
   echo "<INPUT name=entry type=hidden value='x'>\n";
   echo "<CENTER><INPUT type=submit value='Click here to Send'> <INPUT type=reset value='Click here to Clear'>"; 
   echo "</CENTER></FORM></TD></TR></TABLE></BODY>";
}
function dispGame ($v, $h, $num, $game, $pts, $color) {
        echo "<TR>";
        echo "  <TD width=100></TD>\n";
        echo "  <TD bgcolor=$color width=60># $num</TD>\n";
        echo "  <TD bgcolor=$color width=185><INPUT name=$game type=radio value='$v WIN at $h'> $v</TD>\n";
        echo "  <TD bgcolor=$color width=185><INPUT name=$game type=radio value='$v lose at $h'> $h</TD>\n";
        echo " <TD bgcolor=$color width=15><SELECT name='$pts' onChange='populatePoints(this)'><option value = '0' selected>0<option value = '1'>1<option value = '2'>2<option value = '3'>3<option value = '4'>4<option value = '5'>5<option value = '6'>6<option value = '7'>7<option value = '8'>8<option value = '9'>9<option value = '10'>10<option value = '11'>11<option value = '12'>12<option value = '13'>13<option value = '14'>14<option value = '15'>15<option value = '16'>16 </SELECT></TD>\n";
        echo "</TR>\n";}
?>
</html>