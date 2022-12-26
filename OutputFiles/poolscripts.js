var cookies=new Object();
  
 function cookieIsEmpty(s)
 {var whitespace = "  \t\n\r" ;
 var i; if ((s == null) || (s.length == 0)) return true;
 for (i=0; i< s.length; i++) {var c = s.charAt(i);
 if (whitespace.indexOf(c) == -1) return false;} return true;}
 
 function extractCookies()
 {var name,value; var beginning, middle, end;
 for (name in cookies){cookies = new Object();break;}
 beginning=0;
 while (beginning < document.cookie.length)
 {middle = document.cookie.indexOf ('=', beginning);
 end = document.cookie.indexOf(';', beginning);
 if (end == -1) end = document.cookie.length;
 if ((middle>end) || (middle ==-1))
 {name=document.cookie.substring(beginning,end);
 value="" ;}
 else{name=document.cookie.substring(beginning,middle);
 value=document.cookie.substring(middle+1,end);}
 cookies[name] = unescape(value);beginning=end +2;}};
 
 function openPicks()
 {
 document.cookie = "pickPlayer=newClick;"; 
 document.location="players.html";
 }
 function openPicks16()
 {
 document.cookie = "pickPlayer=newClick;"; 
 document.location="players16.html";
 }
 
 function openPlayer(toPlayer)
 {
if(document.layers) return;
 var passPlayer=toPlayer;
 var passPickPlayer=escape(passPlayer);
 document.cookie = "pickPlayer=" + passPickPlayer; 
 document.location="players.html";
 }

  function clickStandings()
  {if(document.layers) return;
 document.cookie = "viewRound=" + escape("2nd Round"); 
  document.cookie = "sortBy=" + escape("Sorted by Score");  
  document.cookie = "viewPage=1";  
  document.location="standings.html";
  }
 
  function clickStandings16()
  {if(document.layers) return;
 document.cookie = "viewRound=" + escape("Sweet 16 Pool");
  document.cookie = "sortBy=" + escape("Sorted by Score");
  document.cookie = "viewPage=1";  
  document.location="standings.html" ;
  }
  

function drawHorizMenu() {
document.write("<div id=\"horizMenu\">");
 document.write("<table border=0 cellpadding=2 cellspacing=0>"); 
 document.write("<tr>");
 
document.write("<td nowrap class=\"menu\">");
document.write("<a href=\"index.html\" class=\"menu\" onMouseover=\"window.status='Pool Home';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Pool Home</a>");
document.write("</td>");
 document.write("</tr>");
 document.write("</table>");
 document.write("</div>");
}
var statBarMsg="Welcome";
function drawTop()
{
 window.status = statBarMsg;

if(document.layers){
document.write("<img name=\"showBanner\" height=70 width=70 src=\"basketball_m-DI.png\">");
document.write("<p><B>Biskit Pool 2012</B></b>");
document.write("<B>Your browswer must be updated to view this website!</B>");

return;}

 document.write("<div style=\"width:100%;padding=0px;\">");
 document.write("<table width=\"100%\" border=0 cellpadding=0 cellspacing=0>");
 document.write("<tr><td nowrap class=\"topBorder\">");
 document.write("<center>");
 document.write("<table border=0 cellpadding=0 cellspacing=0><tr>");
 document.write("<td nowrap class=\"topLeft\">");
document.write("<img class=\"logo\" name=\"showBanner\" height=90 width=90 src=\"basketball_m-DI.png\">");
document.write("</td>");
 document.write("<td width=100% nowrap class=\"topLeftTtl\">");
 document.write("Biskit Pool 2012");
 document.write("</td>");
 document.write("</tr></table>");
 document.write("</center>");
 document.write("</td></tr>");
 
 document.write("</table></div>");
 
drawHorizMenu();
document.write("<div id=\"updateMsg\">");
document.write("Website last updated 3/18/12 at 11:10 p.m. ET.");
document.write("</div>");
}

 function openAllPicks()
 {document.cookie = "allPicksPg=1"; document.location="allpicks.html";}
 

function drawRawBottom()
{

}

function drawSideMenu() {
 document.write("<div id=\"sideMenu\">");
 document.write("<table border=0 cellpadding=1 cellspacing=0>");
document.write("<tr><td class=\"sideMenuHead\" nowrap>CONTEST INFORMATION</td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"index.html\" class=\"sideMenu\" onMouseover=\"window.status='Pool Home';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Pool Home</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"rules.html\" class=\"sideMenu\" onMouseover=\"window.status='Contest&nbsp;Rules';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Contest&nbsp;Rules</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"prize.html\" class=\"sideMenu\" onMouseover=\"window.status='Prizes';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Prizes</a></td></tr>");
document.write("<tr><td class=\"sideMenuHead\" nowrap>STANDINGS & REPORTS</td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"standings.php\" class=\"sideMenu\" onMouseover=\"window.status='Pool Standings';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Pool Standings</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"javascript:openPicks()\" class=\"sideMenu\" onMouseover=\"window.status='Player Brackets';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Player Brackets</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"results.html\" class=\"sideMenu\" onMouseover=\"window.status='Tournament Results Bracket';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Tournament Results Bracket</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"statbits.html\" class=\"sideMenu\" onMouseover=\"window.status='Updated Pool Analysis';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Updated Pool Analysis</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"playerlist.html\" class=\"sideMenu\" onMouseover=\"window.status='Player List';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Player List</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"javascript:openAllPicks()\" class=\"sideMenu\" onMouseover=\"window.status='All Picks Spreadsheet';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">All Picks Spreadsheet</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"comparepicks.html\" class=\"sideMenu\" onMouseover=\"window.status='Compare Picks Bracket';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Compare Picks Bracket</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"statsfg.html\" class=\"sideMenu\" onMouseover=\"window.status='Final Game Picks';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Final Game Picks</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"statsff.html\" class=\"sideMenu\" onMouseover=\"window.status='Final Four Picks';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Final Four Picks</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"statsteams.html\" class=\"sideMenu\" onMouseover=\"window.status='Summary of Team Picks';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Summary of Team Picks</a></td></tr>");
document.write("<tr><td class=\"sideMenuHead\" nowrap>NOTABLE WEBSITES</td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://www.finalfour.net\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Official NCAA Website';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Official NCAA Website</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://web1.ncaa.org/app_data/weeklyrpi/rpi1.html?\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Official (NCAA) RPI';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Official (NCAA) RPI</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://www.collegehoopsnet.com\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='College Hoops Net';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">College Hoops Net</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://www.hoopville.net\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Hoopville';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Hoopville</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://www.sportsline.com/collegebasketball\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='CBS Sportsline';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">CBS Sportsline</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://sports.espn.go.com/ncb/ncaatourney05/index\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='ESPN';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">ESPN</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://sports.yahoo.com/ncaab/scoreboard\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Live College Scores';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Live College Scores</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://sportsillustrated.cnn.com/basketball/ncaa\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Sports Illustrated';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Sports Illustrated</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://msn.foxsports.com/cbk\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='The Sporting News';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">The Sporting News</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://sports.yahoo.com/ncaab\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Yahoo! College Basketball';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Yahoo! College Basketball</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://www.yocohoops.com/\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Yoco Collegeball Blog';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Yoco Collegeball Blog</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://bracketology101.blogspot.com/\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Bracketology 101 Blog';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Bracketology 101 Blog</a></td></tr>");
document.write("<tr><td class=\"sideMenuItem\" nowrap><a href=\"http://www.usatoday.com/sports/sagarin/bkt0506.htm\" target=\"_blank\" class=\"sideMenu\" onMouseover=\"window.status='Sagarin Rankings';return true\" onMouseout=\"window.status='" + statBarMsg + "';return true\">Sagarin Rankings</a></td></tr>");

document.write("</table>");
 document.write("</div>");
}
function drawSideMenuLt() {
document.write("<TD nowrap valign=\"top\">");
 drawSideMenu();
 document.write("</TD>");
}
 
 function drawSideMenuRt() {
document.write("</tr></table>");
 document.write("<center>");
 document.write("<div style=\"padding:2px;margin-top:12px;border:solid 1px #000;background-color:#FFF;color:#000;font-size:12px;height:20px;width:100%\">");
 document.write("NCAA tournament scores delivered to your mobile device with a ");
 document.write("<a target=\"_blank\" href=\"http://www.sportsalert.net/default.aspx?referrer=leapydog\">");
 document.write("<span style=\"text-decoration:none;\"><u>special offer from <span style=\"font-size:14px;\">SportsAlert!</span></u></span></a>");
 document.write("</div></center>");
 document.write("<table border=0 cellpadding=0 cellspacing=0><tr><td>&nbsp;</td>");
 return;
}

