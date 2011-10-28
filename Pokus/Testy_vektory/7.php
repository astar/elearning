<div id="otazka"><strong>Uvažme dvě síly <b><i>F</i><sub>1</sub></b>, <b><i>F</i><sub>2</sub></b>, které mají ve zvolené kartézské soustavě souřadnic <i>Oxyz</i> složky <b><i>F</i><sub>1</sub></b> = (<i>F</i><sub>1x</sub>, <i>F</i><sub>1y</sub>, <i>F</i><sub>1z</sub>), <b><i>F</i><sub>2</sub></b> = (<i>F</i><sub>2x</sub>, <i>F</i><sub>2y</sub>, <i>F</i><sub>2z</sub>). Vyberte právě správná tvrzení.</strong></div>

<p class="odp">Obtížnost: <b>2 body</b>. Doporučný čas na vyřešení: <b>3,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 210;

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
<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Pokud platí |<i>F</i><sub>1x</sub>| > |<i>F</i><sub>2x</sub>|, je <i>x</i>-ová složka výslednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath nenulová.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pokud současně platí <i>F</i><sub>1x</sub> > <i>F</i><sub>2x</sub>, <i>F</i><sub>1y</sub> > <i>F</i><sub>2y</sub>, <i>F</i><sub>1z</sub> > <i>F</i><sub>2z</sub>, je velikost síly amath vec bb F_1 endamath větší než velikost síly amath vec bb F_2 endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2"><i>X</i>-ová složka výslednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath je nenulová právě když jsou nenulové odpovídající složky jednotlivých sil.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Velikost síly amath vec bb F_2 endamath je nulová právě v případě, že jsou nulové všechny její složky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Na velikost <i>y</i>-ové složky výslednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath nemají vliv <i>x</i>-ové a <i>z</i>-ové složky sil amath vec bb F_1 endamath a amath vec bb F_2 endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Pokud je síla amath vec bb F_1 endamath nenulová, známe její velikost a její složky <i>F</i><sub>1x</sub>, <i>F</i><sub>1y</sub>, dokážeme užitím Pythagorovy věty vypočítat složku <i>F</i><sub>1z</sub>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Pokud jsou znaménka odpovídajících si složek sil amath vec bb F_1 endamath a amath vec bb F_2 endamath opačná, jsou opačné i síly amath vec bb F_1 endamath a amath vec bb F_2 endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">O orientaci průmětu výslednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath do osy <i>x</i> rozhoduje znaménko rozdílu <i>F</i><sub>1x</sub> - <i>F</i><sub>2x</sub>.</td>
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
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==true && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)

			window.open("Spatne/vektory/spravne7.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/vektory/spatne7.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>