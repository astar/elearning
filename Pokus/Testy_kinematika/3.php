<div id="otazka"><strong>Cyklista si vyjel na v�let. Po prvn� p�lhodin� j�zdy ukazoval p�vodn� vynulovan� rychlom�r pr�m�rnou velikost rychlosti 25,2 km.h<sup>-1</sup>, po druh� p�lhodin� (tj. po hodin� j�zdy) 18,6 km.h<sup>-1</sup>. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.</strong></div>

<p class="odp">Obt�nost: <b>1 bod</b>. Doporu�n� �as na vy�e�en�: <b>3,5 minuty</b>.</p>
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
<td width="400px" class="test2">Z uveden�ch �daj� nelze zjistit dr�hu cyklisty za prvn� hodinu j�zdy, nebo� nezn�me z�vislost velikosti jeho rychlosti na �ase.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Z uveden�ch �daj� nelze zjistit pr�m�rnou velikost rychlosti cyklisty za druhou  p�lhodinu j�zdy, nebo� nezn�me dr�hu, kterou b�hem n� urazil.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Z uveden�ch �daj� nelze zjistit vektor pr�m�rn� rychlosti cyklisty za prvn� hodinu j�zdy, nebo� nezn�me jeho rychlost v okam�iku <i>t</i> = 60 minut.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Z uveden�ch �daj� nelze zjistit polohu cyklisty po prvn� p�lhodin� j�zdy, nebo� nezn�me sm�r jeho po��te�n� rychlosti.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Ze zad�n� nelze zjistit velikost vektoru posunut� cyklisty za prvn� hodinu j�zdy, nebo� zad�n� neobsahuje pot�ebn� �daje � nap��klad po��te�n� a koncovou polohu cyklisty.</td>
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
		    document.form.otazka5.checked==true)


			window.open("Spatne/kinematika/spravne3.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne3.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>