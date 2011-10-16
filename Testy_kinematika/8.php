<strong>Na obr�zku je v rovin� <i>Oxz</i> s vodorovnou osou <i>x</i> a osou <i>z</i> orientovanou svisle vzh�ru zakreslena trajektorie �ikmo vr�en�ho m��ku. P�edpokl�d�me, �e m��ek lze pova�ovat za hmotn� bod, kter� se pohybuje v homogenn�m t�hov�m poli Zem�, a odpor vzduchu je zanedbateln�. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.</strong>

<p class="odp">Obt�nost: <b>0,5 bodu</b>. Doporu�n� �as na vy�e�en�: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 180;

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
<p><center><img src="Obrazky/Testy/obr04.jpg"></img></center></p>
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">V bodech <i>x</i><sub>A</sub> a <i>x</i><sub>C</sub> je <i>z</i>-ov� pr�m�t rychlosti m��ku stejn� velk�, nebo� velikost tohoto pr�m�tu lze vyj�d�it jako funkci jedin� prom�n� <i>z</i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V bod� <i>x</i><sub>B</sub> se m�n� orientace rychlosti m��ku, nebo� v tomto bod� m� m��ek nulov� zrychlen�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Mezi body <i>x</i><sub>A</sub> a <i>x</i><sub>B</sub> se m��ek zpomaluje, nebo� jeho rychlost a zrychlen� jsou nesouhlasn� rovnob�n�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V bodech <i>x</i>=0 a <i>x</i><sub>B</sub> jsou <i>x</i>-ov� slo�ky rychlosti m��ku r�zn�, nebo� trajektorie m��ku je v t�chto bodech jinak zak�ivena.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Mezi body <i>x</i><sub>B</sub> a <i>x</i><sub>D</sub> se m��ek zrychluje, nebo� sou�asn� roste <i>x</i>-ov� i <i>z</i>-ov� slo�ka jeho rychlosti.</td>
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