<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head><title>Kurz klasické mechaniky v úlohách a testech pro e-learning</title>
  <meta name="AUTHOR" content="Petr Horálek">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="Keywords" content="Informace">
  <meta name="description" content="Kurz klasické mechaniky v úlohách a testech pro e-learning">
  <link rel="STYLESHEET" href="Styl.css" type="text/css">
  <script type="text/javascript" src="skripty.js"></script>

<style type="text/css">
.bok {text-align: left}
</style>
</head>

<body>
<div style="text-align: center">
 <div style="text-align: left; width: 900px; margin: 0px auto; font: 12px/14px Verdana">	
 

<div id="hlavicka1">
  <a href="index.php?web=projekt" title="O projektu Kurs klasické mechaniky"><img src="Obrazky/Hlavicka1.jpg" border="0" alt=""></a>
</div>

<div id="hlavicka2">
  <img src="Obrazky/Hlavicka2.jpg" border="0" alt="">
</div>


</div>


<div style="text-align: center">
 <div style="text-align: left; width: 782px; margin: 0px auto; font: 12px/14px Verdana">


<div id="levy">
<table width="220">
<tr>
<td height="165px">
<center><img src="Obrazky/More/<?php echo(rand(1,66))?>.jpg" top="10px" alt=""></center>
</td>
</tr>
</table>

<div style="width: 200px; height: 52px; margin-left: 10px">
<center><small><i>Poznání je hluboké jako moře nebo vesmír kolem nás. Stačí se ponořit<br>a jeho bohatství přijde samo.</i></small></center>
</div>

</div>


<div id="levys">
<font size="1">
<center>
Optimalizováno pro rozlišení<br>
1024x756 px nebo vyšší<br>
a pro webové prohlížeče<br>
<a href="http://firefox.czilla.cz/" target="_blank"><b>Mozilla Firefox 4+</b></a>,<br><a href="http://windows.microsoft.com/cs-CZ/internet-explorer/products/ie/home" target="_blank"><b>Internet Explorer 8+</b></a>.</center><br>
</font>

 <table width="200" align="center">
<tr>
 <td width="100">
   <font size="1" face="Tahoma">
	Počítadlo návštěv<br>od 3. března 2009
   </font>
 </td>


 <td width="100">
 <!-- ---- ABZ rychle pocitadlo ---- -->
 <a href="http://pocitadlo.abz.cz/" title="Počítadlo návštěv"><img src="http://pocitadlo.abz.cz/aip.php?tp=bb" alt="Počítadlo návštěv" border="0"></a>
 <!-- ---- http://pocitadlo.abz.cz/ ---- -->
 </td>
</tr>
 </table>
 </div>
  	  <div id="obsah">
		<div id="zarovnani">

                 <?$web=$_GET["web"];
		 if(isset($web)):
	         include $web . ".php";
		    else:
	            include "uvod.php";
		 endif;?>

		</div>
 	  </div>

<div id="menu">
 <table width="790px">
 <tr>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=uvod'" 		width="90"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=uvod" title="Úvod">				<font style="font-size: 13px; font-weight:bold">Úvod		</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=projekt'" 	width="110" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=projekt" title="O projektu">			<font style="font-size: 13px; font-weight:bold">O projektu	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=nastrahy'" 	width="150" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=nastrahy" title="Nástrahy fyziky">		<font style="font-size: 13px; font-weight:bold">Nástrahy fyziky	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=zasobnik'" 	width="130" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=zasobnik" title="Zásobník úloh">		<font style="font-size: 13px; font-weight:bold">Zásobník úloh	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=testy'" 		width="60"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=testy" title="Interaktivní testy">		<font style="font-size: 13px; font-weight:bold">Testy	  	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=experimenty'" 	width="120" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=experimenty" title="Demonstrační experimenty">  <font style="font-size: 13px; font-weight:bold">Experimenty	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=odkazy'" 	width="80"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=odkazy" title="Zajímavé odkazy">		<font style="font-size: 13px; font-weight:bold">Odkazy		</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=kontakty'" 	width="90"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=kontakty" title="Kontakty">			<font style="font-size: 13px; font-weight:bold">Kontakty	</font></a></font></td>
 </tr>
</table>
</div>


 </div>
</div>
</div>
</body>
</html>


