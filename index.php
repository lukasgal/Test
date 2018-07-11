<?
header("Location: http://intra.zusnemcicenh.cz/");
include "auth.php";
$title  = "Na úvod";
include "head.php";
include "class.aktualita.php";
$aktual = new Aktualita;

?>

<code>


<div style="text-align:left;padding:10px;font-size:11pt;">
<?php if($keci):?>Tato sekce je urèena pro pracovníky ZUŠ Nìmèice nad Hanou. 
<br>- Naleznete zde kompletní archiv notového materiálu
<br>- Dále jsou zde ke stažení formuláøe a pedagogické dokumenty.
<br>- V sekci Diskuze mùžte sdílet své názory a diskutovat s kolegy o èemkoliv.	
<hr>
<?php endif;?>
<?php
print "<div style=\"border:1px outset black;\">";
print "<div style=\"font-size:11pt;text-align:left;background:silver;color:black;padding-left:5px;font-weight:bold;\"><img src=\"images/info.gif\" border=0> Aktuality za tento týden</div>";
print "<div style=\"text-align:left;margin:10px;background:white;color:black;max-height:300px;overflow:auto;\">";
print "<table style=\"text-align:left;font-family:monospace;font-size:9pt;width:99%;\">";
$pred = date(("Y-m-d H:i:s"),strtotime("-7 day"));
$ted = date("Y-m-d H:i:s");
$res = mysql_query("select * from aktuality WHERE datum<'$ted' AND datum> '$pred' AND type='v' AND kam<>'svp' ORDER BY datum DESC");
if(mysql_num_rows($res)==0)
	print "<tr><td style=\"line-height:13px;\">Tento týden nebyla provedena žádná aktualizace...</td></tr>";

while($p = mysql_fetch_array($res)):
print "<tr><td style=\"line-height:13px;border-bottom:1px solid gray;\">".$aktual->tiskni_hlasku($p["kam"],trim($p["method"]),$p["nazev"],$p["uzivatel"],format_datetime($p["datum"]),$p["text"])."</td></tr>";
endwhile;
print "</table>";
print "</div>";
print "</div>";
?>
<br>
<div id="help" style="border:1px outset black;font-size:10pt;">
<div style="background:silver;padding-left:5px;font-weight:bold;"><img src="images/help.gif" border=0> Nápovìda</div>
<ul>
	<li><a href="#" onclick="showPopWin('intranet.help.php?archiv=true', 800, 500, null);" style="color:blue;">Notový archiv</a>
	<li><a href="#" onclick="showPopWin('intranet.help.php?diskuze=true', 800, 500, null);" style="color:blue;">Diskuze</a>
	<li><a href="#" onclick="showPopWin('intranet.help.php?svp_=true', 800, 500, null);" style="color:blue;">ŠVP</a>
	<li><a href="#" onclick="showPopWin('intranet.help.php?dokumenty=true', 800, 500, null);" style="color:blue;">Dokumenty</a>
	<li><a href="#" onclick="showPopWin('intranet.help.php?heslo=true', 800, 500, null);" style="color:blue;">Zmìna hesla</a>
</ul>


</div>



</div>