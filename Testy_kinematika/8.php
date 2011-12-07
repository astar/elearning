<strong>Na obrázku je v rovině <i>Oxz</i> s vodorovnou osou <i>x</i> a osou <i>z</i> orientovanou svisle vzhůru zakreslena trajektorie šikmo vrženého míčku. Předpokládáme, že míček lze považovat za hmotný bod, který se pohybuje v homogenním tíhovém poli Země, a odpor vzduchu je zanedbatelný. Z následujících tvrzení je právě jedno správné. Vyberte jej.</strong>

<p class="odp">Obtížnost: <b>0,5 bodu</b>. Doporučený čas na vyřešení: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 180;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypršel doporučený časový limit.");}

function odpocet()
{if(bezi==false) {
    clearInterval(o);
    return;}
 if(c<0)
  { clearInterval(o);
    konec();
    return;
  }

  var z="";
  var m=Math.floor(c%86400%3600/60);
  var s=Math.floor(c%86400%3600%60);

  if(s<10) s="0"+s;
  if(m>0) z+=" ";
  z+=m+" min. "+s+" sek.";
  document.getElementById("c").innerHTML=z;
  c--;}

function zast_odp()
{bezi = false;}

</script>
<p><center><img src="Obrazky/Testy/obr04.jpg"></img></center></p>
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">V bodech <i>x</i><sub>A</sub> a <i>x</i><sub>C</sub> je <i>z</i>-ový průmět rychlosti míčku stejně velký, neboť velikost tohoto průmětu lze vyjádřit jako funkci jediné proměné <i>z</i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V bodě <i>x</i><sub>B</sub> se mění orientace rychlosti míčku, neboť v tomto bodě má míček nulové zrychlení.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Mezi body <i>x</i><sub>A</sub> a <i>x</i><sub>B</sub> se míček zpomaluje, neboť jeho rychlost a zrychlení jsou nesouhlasně rovnoběžné.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V bodech <i>x</i>=0 a <i>x</i><sub>B</sub> jsou <i>x</i>-ové složky rychlosti míčku různé, neboť trajektorie míčku je v těchto bodech jinak zakřivena.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Mezi body <i>x</i><sub>B</sub> a <i>x</i><sub>D</sub> se míček zrychluje, neboť současně roste <i>x</i>-ová i <i>z</i>-ová složka jeho rychlosti.</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==true &&
	            document.form.otazka2.checked==false && 	
		    document.form.otazka3.checked==false && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==false)


			window.open("Spatne/kinematika/spravne8.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne8.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>