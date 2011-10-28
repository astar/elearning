<strong>Na obrázku je zakreslen graf závislosti velikosti výslednice sil působících na částici s konstantní hmotností na čase. Pohyb částice sledujeme v inerciální vztažné soustavě. Z následujících tvrzení je právě jedno správné. Vyberte jej.
</strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučný čas na vyřešení: <b>3 minuty</b>.</p>
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
<p><center><img src="Obrazky/Testy/obr08.jpg"></img></center></p>
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=2 s je derivace hybnosti částice stejně velká jako v okamžiku <i>t</i>=14 s, neboť  výslednice sil má v těchto okamžicích stejnou velikost.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V intervalu [0,3] s se částice pohybuje rovnoměrně zrychleně, neboť výslednice na ni působících sil a tím i zrychlení částice mají konstantní velikost.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=8 s se mění pohyb částice ze zrychleného na zpomalený (velikost rychlosti tedy nabývá maxima), neboť funkce <i>F(t)</i> zde nabývá svého maxima.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V okamžicích <i>t</i>=6 s a <i>t</i>=10 s je velikost zrychlení částice stejná, neboť graf funkce <i>F(t)</i> má stejný sklon.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=8 s je rychlost částice maximální, neboť maximální je i velikost výslednice sil působících na částici.</td>
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


			window.open("Spatne/dynamika/spravne6.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne6.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>