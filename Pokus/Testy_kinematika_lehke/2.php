<div id="otazka"><strong>Mal� kuli�ka (hmotn� bod) se pohybuje v rovin� <i>Oxy</i> rovnom�rn� po kru�nici o polom�ru <i>R</i>. Bod <i>O</i> je st�edem kru�nice. Z n�sleduj�c�ch tvrzen� vyberte pr�v� ta, kter� jsou spr�vn�.
</strong></div>

<p class="odp">Obt�nost: <b>2 body</b>. Doporu�n� �as na vy�e�en�: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

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

<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Pohyb kuli�ky je periodick� s periodou 

amath
T = (2 pi R) / v
endamath, 

�hlov� rychlost kuli�ky m� velikost 

amath
omega = 2 pi / T = v / R
endamath.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pr�m�rn� rychlost kuli�ky nem��e b�t nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Vzhledem k tomu, �e pohyb kuli�ky je rovnom�rn�, je jej� pr�m�rn� zrychlen� v ka�d�m �asov�m intervalu nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Okam�it� zrychlen� kuli�ky je v ka�d�m bod� trajektorie rovno zrychlen� norm�lov�mu, nebo� te�n� zrychlen� p�i rovnom�rn�m pohybu je nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Vektor �hlov� rychlosti kuli�ky m� v ka�d�m okam�iku sm�r polohov�ho vektoru kuli�ky, ale je opa�n� orientov�n.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Vektor rychlosti amath vec bb v endamath, �hlov� rychlosti amath vec bb omega endamath a polohov� vektor amath vec bb r endamath spolu souvis� vztahem 

amath
vec bb v = vec bb omega xx vec bb r
endamath.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">�hlov� zrychlen� nen� konstantn�. Vzhledem k rovnom�rnosti pohybu m� sice st�lou velikost, ale jeho sm�r se m�n�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Norm�lov� (dost�ediv�) zrychlen� m� sice st�le sm�r do st�edu kru�nice, jeho velikost se v�ak m�n�, nebo� �hel opsan� pr�vodi�em kuli�ky st�le nar�st�.
</td>
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
		    document.form.otazka5.checked==false && 	 	
		    document.form.otazka6.checked==true && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/kinematika_lehke/spravne2.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika_lehke/spatne2.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>