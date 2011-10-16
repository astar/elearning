<div id="otazka"><strong>Na obr�zku jsou zn�zorn�ny s�ly <b><i>F</i><sub>1</sub></b> a <b><i>F<sub>2</i></sub></b> le��c� v rovin� <i>Oxy</i>. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.</strong></div>

<p class="odp">Obt�nost: <b>0,5 bodu</b>. Doporu�n� �as na vy�e�en�: <b>2 minuty</b>.<br>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 120;

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
<p><center><img src="Obrazky/Testy/obr02.jpg"></img></center></p>
<div id="moznosti" style="display:none;">
<form name="form">

<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Pr�m�t v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath do osy <i>x</i> je s osou <i>x</i> nesouhlasn� rovnob�n�, nebo� <i>&alpha;</i><sub>1</sub> > <i>&alpha;</i><sub>2</sub>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2"><i>Z</i>-ovou slo�ku v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath nelze ur�it, nebo� nejsou zad�ny <i>z</i>-ov� slo�ky sil amath vec bb F_1 endamath a amath vec bb F_2 endamath.</td>
</tr>

<tr>	
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2"><i>X</i>-ov� slo�ka v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath je nenulov�, nebo� <i>x</i>-ov� slo�ky obou sil amath vec bb F_1 endamath a amath vec bb F_2 endamath jsou nenulov�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Pr�m�t v�slednice sil amath vec bb F_1 endamath a amath vec bb F_2 endamath do osy <i>y</i> je v dan�m p��pad� s osou <i>y</i> souhlasn� rovnob�n�, nebo� je ur�en vektorov�m sou�tem <i>y</i>-ov�ch pr�m�t� sil amath vec bb F_1 endamath a amath vec bb F_2 endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2"><i>X</i>-ovou slo�ku v�slednice sil nelze ur�it, nebo� obr�zkem jsou zad�ny pouze velikosti sil amath vec bb F_1 endamath a amath vec bb F_2 endamath a �hly <i>&alpha;</i><sub>1</sub>, <i>&alpha;</i><sub>2</sub>, nikoli <i>x</i>-ov� slo�ky jednotliv�ch sil.</td>
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
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==false)

			window.open("Spatne/vektory/spravne6.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/vektory/spatne6.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>