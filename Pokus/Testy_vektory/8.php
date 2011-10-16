<div id="otazka"><strong>Nenulov� s�la <b><i>F</i></b> m� ve zvolen� kart�zsk� soustav� sou�adnic slo�ky <b><i>F</i></b> = (<i>F</i><sub>x</sub>, <i>F</i><sub>y</sub>, <i>F</i><sub>z</sub>). Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte je.</strong></div>

<p class="odp">Obt�nost: <b>0,5 bodu</b>. Doporu�n� �as na vy�e�en�: <b>2 minuty</b>.</p>
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
<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">S�la amath vec bb F endamath m��e m�t v jin� kart�zsk� soustav� sou�adnic jin� slo�ky, nebo� soustavy sou�adnic mohou m�t r�zn� po��tek.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pokud plat� <i>F</i><sub>x</sub> &ne; <i>F</i><sub>y</sub>, bude tomu tak i v ka�d� jin� kart�zsk� soustav� sou�adnic, nebo� v�echny slo�ky s�ly amath vec bb F endamath se transformuj� podle stejn�ch pravidel.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pokud plat� <i>F</i><sub>x</sub> = 0, bude tomu tak i v ka�d� jin� kart�zsk� soustav� sou�adnic, nebo� transformac� nulov� slo�ky vektoru dost�v�me op�t nulovou slo�ku.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">S�la amath vec bb F endamath m��e m�t v jin� kart�zsk� soustav� sou�adnic jinou velikost, nebo� v n� m��e m�t jin� slo�ky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">S�la amath vec bb F endamath bude nenulov� v ka�d� kart�zsk� soustav� sou�adnic, nebo� jde st�le o tent�� vektor.</td>
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
		    document.form.otazka5.checked==true)

			window.open("Spatne/vektory/spravne8.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/vektory/spatne8.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>