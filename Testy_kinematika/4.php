<strong>Z �daj� na rychlom�ru, kter� byl na za��tku cyklistick�ho v�letu vynulov�n, uv�d�me tyto: 
<ul>
<li>Pr�m�rn� velikost rychlosti cyklisty za prvn� hodinu j�zdy je 16,2 km.h<sup>-1</sup>.</li>
<li>Za prvn� dv� hodiny j�zdy ujel cyklista 26,4 km.</li>
<li>Pr�m�rn� velikost rychlosti cyklisty po 50 km j�zdy je 10,0 km.h<sup>-1</sup>.</li>
</ul>
Vyberte pr�v� spr�vn� tvrzen�.
</strong>

<p class="odp">Obt�nost: <b>2 body</b>. Doporu�n� �as na vy�e�en�: <b>4,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 270;

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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Pr�m�rn� velikost rychlosti cyklisty za druhou hodinu j�zdy je men�� ne� za prvn� hodinu j�zdy.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Za prvn� p�lhodinu j�zdy ujel cyklista dr�hu 8,1 km.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Po dvou hodin�ch j�zdy byl cyklista od m�sta startu vzd�len 26,4 km.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">B�hem t�et� hodiny j�zdy ujel cyklista men�� dr�hu ne� za prvn� dv� hodiny.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Dr�hu 50 km ujel cyklista za 5 hodin.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Velikost pr�m�rn� rychlosti cyklisty za prvn� dv� hodiny j�zdy je 26,4 km.h<sup>-1</sup>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">S ka�dou dal�� hodinou pr�m�rn� velikost rychlosti cyklisty klesala.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Vektor pr�m�rn� rychlosti cyklisty po 50 km j�zdy je nenulov�.</td>
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


			window.open("Spatne/kinematika/spravne4.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne4.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>