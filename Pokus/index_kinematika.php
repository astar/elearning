<?php
// N�kolik z�kladn�ch pokyn�:
// Pokud script nefunguje jak m�, odkomentovat toto:

//session_start();

/*
Pokud nefunguje �ten� z adres��e (chyba u p��kazu dir), doporu�uji nastavit chmod na 0777 na FTP serveru
pro adres�� "soubory".

Soubory v adres��i mus� b�t TXT nebo PHP!

Tento skript pou��v� COOKIE pro ukl�d�n� seznamu ji� otev�en�ch soubor�. Pro bezprobl�mov� fungov�n� doporu�uji
m�t v adres��i max. 10 soubor� s n�zvy bez h��k� a ��rek. Ale jinak jm�na soubor� nemus� b�t 1,2,3...
klidn� t�eba cervena.txt, zelena.txt apod.

Pro optim�ln� zobrazen� textu (h��ky a ��rky) uvnit� soubor� doporu�uji, aby k�dov�n� soubor� bylo UTF-8!
*/

// Po�et nalezen�ch soubor� defaultn� nastav�me na 0
$kolik = 0;

// Nastav�me root pro otev�r�n� soubor�
// - toto nen� nutn�, ale doporu�uji
$root = dirname(__FILE__);

// AKCE 1: Chceme smazat cookie, kde je ulo�en seznam ji� otev�en�ch soubor�?
// Vol�no pomoc� "?del"
if(isset($_GET['del'])):
  // Ano, chceme:
  setcookie("archiv", "");
  
  // P�esm�rujeme se zp�t na hlavn� str�nku:
  header("Location: index_kinematika.php");
  // M��eme pou��t i alternativu:
  //header("Location: index.php");
  
  // Pro vy��� bezpe�nost ukon��me �innost php skriptu
  exit;
endif;

// AKCE 2: Chceme zobrazit n�jak� soubor?
// Vol�no pomoc� "?akce"
if(isset($_GET['akce'])):
  // Ano, chceme:
  // Nejd��ve si vytvo��me arch�v ji� otev�en�ch soubor� (array), zat�m bude pr�zdn�
  $archiv = array();
  
  // Nyn� se jej pokus�me naplnit, ale jen za p�edpokladu, �e n�jak� soubory u� otev�eny byly
  // - pokud se tak stalo, bude existovat cookie ARCHIV:
  if(isset($_COOKIE['archiv'])):
    // Cookie archive obsahuje n�zvy soubor� v�etn� koncovek a ty jsou odd�leny ";"
    $archiv_beta = $_COOKIE['archiv'];
    
    // Rozd�l�me si n�zvy soubor� do pole
    $archiv = explode(";", $archiv_beta);
  endif;

  // Nyn� vytvo��me seznam (array) je�t� neotev�en�ch soubor� - zat�m je pr�zdn�
  $indexer = array();

  // Abychom ho naplnili budeme proch�zet slo�ku "soubory", kde jsou jednotliv� soubory
  // JE NUTN�, ABY VE SLO�CE BYLY JEN SOUBORY, KTER� LZE INCLUDOVAT DO PHP (txt, php) !!!!
  $adresar=dir("./Testy_kinematika/");

  // N�sleduj�c� ��dky skipnou p�id�n� "." a ".." do seznamu soubor�, proto�e to nejsou soubory
  $tmp=$adresar->Read();
  $tmp=$adresar->Read();

  // N�sleduj�c� cyklus projede adres�� a bude p�id�vat jm�na soubor� do pole "indexer"
  while($polozka=$adresar->Read())
  {
    // ALE pokud byl soubor ji� pou�it (byl v cookie tzn. je v $archiv), tak se do indexeru nep�id�
    if(in_array($polozka,$archiv)) continue;
    
    // Jinak tedy podle pl�nu p�id�me:
    $indexer[] = $polozka;
  }
  
  // Nyn� m�me v poli indexer potencion�ln� seznam jmen soubor�, kter� m��eme otev��t
  // Zb�v� jen vybrat jak�
  
  // Zav�eme �ten� z adres��e
  $adresar->Close();
  
  //------------------------------

  // Nyn� si spo��t�me kolik m�me soubor� v indexeru (a ode�eteme 1 proto�e pole je od indexu 0 a random n�e mus� vyb�rat od 0 ne od 1)
  $kolik = count($indexer)-1;
  
  // Nyn� se m��e st�t, �e "kolik" bude rovno -1, co� by znamenalo, �e ji� ve slo�ce nen� ��dn� soubor, kter� by mohl b�t zobrazen
  //  - pokud nen� co zobrazit ji� se nic ne�e�� a zobraz� se odkaz na hlavn� str�nku
  if($kolik>-1):
    // Pokud je co zobrazit, vybereme n�hodn� n�jak� ��slo v rozsahu index� pole indexer
    // - pod t�mto ��slem pak z indexeru vybereme n�zev souboru tzn. $indexer[$random], kde z�znam v poli reprezentuje cestu k souboru
    // tzn. pro p��klad $indexer[$random]=="1.txt" (t�eba), obsah pole pak vlo��me do include n�e
    $random = rand(0,$kolik);

    // Je�t� ale mus�me tento soubor, kter� zobraz�me p�idat do cookie, aby se p��t� ji� nevyb�ral
    //  - Prozat�m obsah nov� cookie nastav�me na null
    $archivace = null;
    
    // Nyn� si projedeme v�echny z�znamy v poli $archiv, kter� obsahu ji� v�echny d��ve zobrazen� soubory
    for($i=0;$i<count($archiv);$i++)
    {
      // V�echny d��ve zobrazen� soubory samoz�ejm� op�t p�id�me do seznamu a odd�lujeme je ";"
      $archivace .= $archiv[$i].";";
    }
    
    // + p�id�me nov� soubor, kter� zobrazujeme nyn�
    $archivace .= $indexer[$random];

    // a nastav�me cookie (pokud ji� existuje, tak bude star� p�eps�na novou)
    setcookie ("archiv", $archivace);
  endif;
endif;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head><title>Kurz klasick� mechaniky v �loh�ch a testech pro e-learning</title>
  <meta name="AUTHOR" content="Petr Hor�lek">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
  <meta name="Keywords" content="Informace">
  <meta name="description" content="Kurz klasick� mechaniky v �loh�ch a testech pro e-learning">
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
  <a href="index.php?web=projekt" title="O projektu Kurs klasick� mechaniky"><img src="Obrazky/Hlavicka1.jpg" border="0" alt=""></a>
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
<center><small><i>Pozn�n� je hlubok� jako mo�e nebo vesm�r kolem n�s. Sta�� se pono�it<br>a jeho bohatstv� p�ijde samo.</i></small></center>
</div>

</div>


<div id="levys">
<font size="1">
<center>
Optimalizov�no pro rozli�en�<br>
1024x756 px nebo vy���<br>
a pro webov� prohl�e�e<br>
<a href="http://firefox.czilla.cz/" target="_blank"><b>Mozilla Firefox 4+</b></a>,<br><a href="http://windows.microsoft.com/cs-CZ/internet-explorer/products/ie/home" target="_blank"><b>Internet Explorer 8+</b></a>.</center><br>
</font>

 <table width="200" align="center">
<tr>
 <td width="100">
   <font size="1" face="Tahoma">
	Po��tadlo n�v�t�v<br>od 3. b�ezna 2009
   </font>
 </td>


 <td width="100">
 <!-- ---- ABZ rychle pocitadlo ---- -->
 <a href="http://pocitadlo.abz.cz/" title="Po��tadlo n�v�t�v"><img src="http://pocitadlo.abz.cz/aip.php?tp=bb" alt="Po��tadlo n�v�t�v" border="0"></a>
 <!-- ---- http://pocitadlo.abz.cz/ ---- -->
 </td>
</tr>
 </table>
 </div>






  	<div id="obsah">
		<div id="zarovnani">
  





<h2>Kinematika ��stice - obt�n� ot�zky</h2>

<?php
		  // Zde �e��me obsah HTML str�nky
		  
		  // Pokud jsme ji� nevy�erpali v�echny soubory, zobraz�me odkaz "Vyber soubor"
      if($kolik>-1):
        // Jo a taky pokud m�me pr�v� aktivn� "?akce", tak zobraz�me soubor, kter� byl vybr�n p�es rand
        if(isset($_GET['akce'])) include $root."/Testy_kinematika/".$indexer[$random];
        echo '<a href="?akce"><b>Vygeneruj novou ot�zku</b></a>';
      else:
	// Pokud nen� co vybrat (v�echny soubory vy�erp�ny), zobraz�me menu s odkazem na hlavn� str�nku
        echo '�lohy z tohoto tematick�ho celku jsou vy�erp�ny (pr�v� nyn� nebo v ned�vn� minulosti jste z tohoto po��ta�e ji� ot�zky proch�zel/a).<br>Co chcete ud�lat?<br><br><a href="index.php?web=testy"><b>Opustit tematick� celek</b></a><br />';
        echo '<a href="?del"><b>Vygenerovat ot�zky znovu</b></a>';
      endif;
?>





 	</div>

 </div>

<div id="menu">
 <table width="790px">
 <tr>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=uvod'" 		width="90"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=uvod" title="�vod">				<font style="font-size: 13px; font-weight:bold">�vod		</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=projekt'" 	width="110" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=projekt" title="O projektu">			<font style="font-size: 13px; font-weight:bold">O projektu	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=nastrahy'" 	width="150" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=nastrahy" title="N�strahy fyziky">		<font style="font-size: 13px; font-weight:bold">N�strahy fyziky	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=zasobnik'" 	width="130" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=zasobnik" title="Z�sobn�k �loh">		<font style="font-size: 13px; font-weight:bold">Z�sobn�k �loh	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=testy'" 		width="60"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=testy" title="Interaktivn� testy">		<font style="font-size: 13px; font-weight:bold">Testy	  	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=experimenty'" 	width="120" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=experimenty" title="Demonstra�n� experimenty">  <font style="font-size: 13px; font-weight:bold">Experimenty	</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=odkazy'" 	width="80"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=odkazy" title="Zaj�mav� odkazy">		<font style="font-size: 13px; font-weight:bold">Odkazy		</font></a></font></td>
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=kontakty'" 	width="90"  align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=kontakty" title="Kontakty">			<font style="font-size: 13px; font-weight:bold">Kontakty	</font></a></font></td>
 </tr>
</table>
</div>

</div>
</div>
</div>
</body>
</html>


