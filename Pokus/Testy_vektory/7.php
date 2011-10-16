<div id="otazka"><strong>Uva�me dv� s�ly <b><i>F</i><sub>1</sub></b>, <b><i>F</i><sub>2</sub></b>, kter� maj� ve zvolen� kart�zsk� soustav� sou�adnic <i>Oxyz</i> slo�ky <b><i>F</i><sub>1</sub></b> = (<i>F</i><sub>1x</sub>, <i>F</i><sub>1y</sub>, <i>F</i><sub>1z</sub>), <b><i>F</i><sub>2</sub></b> = (<i>F</i><sub>2x</sub>, <i>F</i><sub>2y</sub>, <i>F</i><sub>2z</sub>). Vyberte pr�v� spr�vn� tvrzen�.</strong></div>

<p class="odp">Obt�nost: <b>2 body</b>. Doporu�n� �as na vy�e�en�: <b>3,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 210;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypr�el doporu�en� �asov� limit.");}

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
<td width="400px" class="test2">Pokud plat� |<i>F</i><sub>1x</sub>| > |<i>F</i><sub>2x</sub>|, je <i>x</i>-ov� slo�ka v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath nenulov�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pokud sou�asn� plat� <i>F</i><sub>1x</sub> > <i>F</i><sub>2x</sub>, <i>F</i><sub>1y</sub> > <i>F</i><sub>2y</sub>, <i>F</i><sub>1z</sub> > <i>F</i><sub>2z</sub>, je velikost s�ly amath vec bb F_1 endamath v�t�� ne� velikost s�ly amath vec bb F_2 endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2"><i>X</i>-ov� slo�ka v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath je nenulov� pr�v� kdy� jsou nenulov� odpov�daj�c� slo�ky jednotliv�ch sil.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Velikost s�ly amath vec bb F_2 endamath je nulov� pr�v� v p��pad�, �e jsou nulov� v�echny jej� slo�ky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Na velikost <i>y</i>-ov� slo�ky v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath nemaj� vliv <i>x</i>-ov� a <i>z</i>-ov� slo�ky sil amath vec bb F_1 endamath a amath vec bb F_2 endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Pokud je s�la amath vec bb F_1 endamath nenulov�, zn�me jej� velikost a jej� slo�ky <i>F</i><sub>1x</sub>, <i>F</i><sub>1y</sub>, dok�eme u�it�m Pythagorovy v�ty vypo��tat slo�ku <i>F</i><sub>1z</sub>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Pokud jsou znam�nka odpov�daj�c�ch si slo�ek sil amath vec bb F_1 endamath a amath vec bb F_2 endamath opa�n�, jsou opa�n� i s�ly amath vec bb F_1 endamath a amath vec bb F_2 endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">O orientaci pr�m�tu v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath do osy <i>x</i> rozhoduje znam�nko rozd�lu <i>F</i><sub>1x</sub> - <i>F</i><sub>2x</sub>.</td>
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