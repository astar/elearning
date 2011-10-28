<strong>Malý míček (hmotný bod) koná šikmý vrh v homogenním tíhovém poli Země. Odpor prostředí je zanedbatelný. Počáteční rychlost míčku leží v rovině <i>Oxy</i>, má velikost <i>v</i><sub>0</sub> a s vodorovnou osou <i>x</i> svírá úhel &alpha; < 90°. Osa <i>y</i> je svislá a míří vzhůru. Z následujících tvrzení vyberte právě ta, která jsou správná.
</strong>

<p class="odp">Obtížnost: <b>2 body</b>. Doporučný čas na vyřešení: <b>3 minuty</b>.</p>
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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Obě složky rychlosti, <i>x</i>-ová i <i>y</i>-ová, před dosažením nejvyššího bodu klesají, poté rostou.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Ve vrcholu parabolické trajektorie dosahuje míček nulové rychlosti.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Ve vrcholu parabolické trajektorie dosahuje míček minimální rychlosti, neboť zrychlení je v tomto okamžiku nulové.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Ve vrcholu parabolické trajektorie má míček nenulové normálové a nulové tečné zrychlení, takže velikost celkového zrychlení je zde menší než v ostatních bodech trajektorie.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V každém bodě trajektorie je součet tečného a normálového zrychlení míčku roven tíhovému zrychlení.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Výška výstupu míčku dosahuje pro danou velikost rychlosti maxima pro <i>&alpha;</i> = 90°.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Poloměr křivosti <i>R</i> trajektorie v jejím nejvyšším bodě lze určit ze vztahu <i>g</i> = <i>v</i><sub>0</sub><sup>2</sup>/<i>R</i>, neboť <i>g</i> je velikost normálového (dostředivého) zrychlení v tomto bodě.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Velikost normálového zrychlení míčku bezprostředně po vypuštění je <i>&alpha;<sub>n</sub></i> = <i>g</i>cos<i>&alpha;</i>.
</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==false &&
	            document.form.otazka2.checked==false && 	
		    document.form.otazka3.checked==false && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==true && 	 	
		    document.form.otazka6.checked==true && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==true)


			window.open("Spatne/kinematika_lehke/spravne3.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika_lehke/spatne3.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>