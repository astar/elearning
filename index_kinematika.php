<?php
// Nìkolik základních pokynù:
// Pokud script nefunguje jak má, odkomentovat toto:

//session_start();

/*
Pokud nefunguje ètení z adresáøe (chyba u pøíkazu dir), doporuèuji nastavit chmod na 0777 na FTP serveru
pro adresáø "soubory".

Soubory v adresáøi musí být TXT nebo PHP!

Tento skript používá COOKIE pro ukládání seznamu již otevøených souborù. Pro bezproblémové fungování doporuèuji
mít v adresáøi max. 10 souborù s názvy bez háèkù a èárek. Ale jinak jména souborù nemusí být 1,2,3...
klidnì tøeba cervena.txt, zelena.txt apod.

Pro optimální zobrazení textu (háèky a èárky) uvnitø souborù doporuèuji, aby kódování souborù bylo UTF-8!
*/

// Poèet nalezených souborù defaultnì nastavíme na 0
$kolik = 0;

// Nastavíme root pro otevírání souborù
// - toto není nutné, ale doporuèuji
$root = dirname(__FILE__);

// AKCE 1: Chceme smazat cookie, kde je uložen seznam již otevøených souborù?
// Voláno pomocí "?del"
if(isset($_GET['del'])):
  // Ano, chceme:
  setcookie("archiv", "");
  
  // Pøesmìrujeme se zpìt na hlavní stránku:
  header("Location: index_kinematika.php");
  // Mùžeme použít i alternativu:
  //header("Location: index.php");
  
  // Pro vyšší bezpeènost ukonèíme èinnost php skriptu
  exit;
endif;

// AKCE 2: Chceme zobrazit nìjaký soubor?
// Voláno pomocí "?akce"
if(isset($_GET['akce'])):
  // Ano, chceme:
  // Nejdøíve si vytvoøíme archív již otevøených souborù (array), zatím bude prázdný
  $archiv = array();
  
  // Nyní se jej pokusíme naplnit, ale jen za pøedpokladu, že nìjaké soubory už otevøeny byly
  // - pokud se tak stalo, bude existovat cookie ARCHIV:
  if(isset($_COOKIE['archiv'])):
    // Cookie archive obsahuje názvy souborù vèetnì koncovek a ty jsou oddìleny ";"
    $archiv_beta = $_COOKIE['archiv'];
    
    // Rozdìlíme si názvy souborù do pole
    $archiv = explode(";", $archiv_beta);
  endif;

  // Nyní vytvoøíme seznam (array) ještì neotevøených souborù - zatím je prázdný
  $indexer = array();

  // Abychom ho naplnili budeme procházet složku "soubory", kde jsou jednotlivé soubory
  // JE NUTNÉ, ABY VE SLOŽCE BYLY JEN SOUBORY, KTERÉ LZE INCLUDOVAT DO PHP (txt, php) !!!!
  $adresar=dir("./Testy_kinematika/");

  // Následující øádky skipnou pøidání "." a ".." do seznamu souborù, protože to nejsou soubory
  $tmp=$adresar->Read();
  $tmp=$adresar->Read();

  // Následující cyklus projede adresáø a bude pøidávat jména souborù do pole "indexer"
  while($polozka=$adresar->Read())
  {
    // ALE pokud byl soubor již použit (byl v cookie tzn. je v $archiv), tak se do indexeru nepøidá
    if(in_array($polozka,$archiv)) continue;
    
    // Jinak tedy podle plánu pøidáme:
    $indexer[] = $polozka;
  }
  
  // Nyní máme v poli indexer potencionální seznam jmen souborù, které mùžeme otevøít
  // Zbývá jen vybrat jaký
  
  // Zavøeme ètení z adresáøe
  $adresar->Close();
  
  //------------------------------

  // Nyní si spoèítáme kolik máme souborù v indexeru (a odeèeteme 1 protože pole je od indexu 0 a random níže musí vybírat od 0 ne od 1)
  $kolik = count($indexer)-1;
  
  // Nyní se mùže stát, že "kolik" bude rovno -1, což by znamenalo, že již ve složce není žádný soubor, který by mohl být zobrazen
  //  - pokud není co zobrazit již se nic neøeší a zobrazí se odkaz na hlavní stránku
  if($kolik>-1):
    // Pokud je co zobrazit, vybereme náhodnì nìjaké èíslo v rozsahu indexù pole indexer
    // - pod tímto èíslem pak z indexeru vybereme název souboru tzn. $indexer[$random], kde záznam v poli reprezentuje cestu k souboru
    // tzn. pro pøíklad $indexer[$random]=="1.txt" (tøeba), obsah pole pak vložíme do include níže
    $random = rand(0,$kolik);

    // Ještì ale musíme tento soubor, který zobrazíme pøidat do cookie, aby se pøíštì již nevybíral
    //  - Prozatím obsah nové cookie nastavíme na null
    $archivace = null;
    
    // Nyní si projedeme všechny záznamy v poli $archiv, které obsahu již všechny døíve zobrazené soubory
    for($i=0;$i<count($archiv);$i++)
    {
      // Všechny døíve zobrazené soubory samozøejmì opìt pøidáme do seznamu a oddìlujeme je ";"
      $archivace .= $archiv[$i].";";
    }
    
    // + pøidáme nový soubor, který zobrazujeme nyní
    $archivace .= $indexer[$random];

    // a nastavíme cookie (pokud již existuje, tak bude stará pøepsána novou)
    setcookie ("archiv", $archivace);
  endif;
endif;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head><title>Kurz klasické mechaniky v úlohách a testech pro e-learning</title>
  <meta name="AUTHOR" content="Petr Horálek">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
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
<center><small><i>Poznání je hluboké jako moøe nebo vesmír kolem nás. Staèí se ponoøit<br>a jeho bohatství pøijde samo.</i></small></center>
</div>

</div>


<div id="levys">
<font size="1">
<center>
Optimalizováno pro rozlišení<br>
1024x756 px nebo vyšší<br>
a pro webové prohlížeèe<br>
<a href="http://firefox.czilla.cz/" target="_blank"><b>Mozilla Firefox 4+</b></a>,<br><a href="http://windows.microsoft.com/cs-CZ/internet-explorer/products/ie/home" target="_blank"><b>Internet Explorer 8+</b></a>.</center><br>
</font>

 <table width="200" align="center">
<tr>
 <td width="100">
   <font size="1" face="Tahoma">
	Poèítadlo návštìv<br>od 3. bøezna 2009
   </font>
 </td>


 <td width="100">
 <!-- ---- ABZ rychle pocitadlo ---- -->
 <a href="http://pocitadlo.abz.cz/" title="Poèítadlo návštìv"><img src="http://pocitadlo.abz.cz/aip.php?tp=bb" alt="Poèítadlo návštìv" border="0"></a>
 <!-- ---- http://pocitadlo.abz.cz/ ---- -->
 </td>
</tr>
 </table>
 </div>






  	<div id="obsah">
		<div id="zarovnani">
  





<h2>Kinematika èástice - obtížné otázky</h2>

<?php
		  // Zde øešíme obsah HTML stránky
		  
		  // Pokud jsme již nevyèerpali všechny soubory, zobrazíme odkaz "Vyber soubor"
      if($kolik>-1):
        // Jo a taky pokud máme právì aktivní "?akce", tak zobrazíme soubor, který byl vybrán pøes rand
        if(isset($_GET['akce'])) include $root."/Testy_kinematika/".$indexer[$random];
        echo '<a href="?akce"><b>Vygeneruj novou otázku</b></a>';
      else:
	// Pokud není co vybrat (všechny soubory vyèerpány), zobrazíme menu s odkazem na hlavní stránku
        echo 'Úlohy z tohoto tematického celku jsou vyèerpány (právì nyní nebo v nedávné minulosti jste z tohoto poèítaèe již otázky procházel/a).<br>Co chcete udìlat?<br><br><a href="index.php?web=testy"><b>Opustit tematický celek</b></a><br />';
        echo '<a href="?del"><b>Vygenerovat otázky znovu</b></a>';
      endif;
?>





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
 <td height="30px" class="odk" style="border: solid #FFFFFF 1px; background-color: rgb(187, 216, 246);" onmouseover="onMysiPresHmenu(this)" onmouseout="onMysiPrycHmenu(this)" onclick="window.location='index.php?web=experimenty'" 	width="120" align="center" bgcolor="#FFFFFF"><font size="-1"><a class="odk" href="index.php?web=experimenty" title="Demonstraèní experimenty">  <font style="font-size: 13px; font-weight:bold">Experimenty	</font></a></font></td>
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


