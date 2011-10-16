<div id="otazka"><strong>Pohyb soustavy ��stic popisujeme v inerci�n� vzta�n� soustav�.<br>Z n�sleduj�c�ch tvrzen� vyberte pr�v� ta, kter� jsou NESPR�VN�.
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
<td width="400px" class="test2">Pokud se jednotliv� ��stice soustavy pohybuj�, m�n� se v�dy poloha t�i�t� soustavy.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pokud je vektorov� sou�et vn�j��ch sil p�sob�c�ch na soustavu ��stic nulov�, je t�i�t� soustavy v klidu.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pokud je vektorov� sou�et vn�j��ch sil p�sob�c�ch na soustavu ��stic nulov�, je nulov� i v�sledn� moment t�chto sil.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Pokud se poloha t�i�t� soustavy ��stic nem�n�, nem�n� se ani vz�jemn� poloha jednotliv�ch ��stic.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pokud je celkov� moment hybnosti soustavy ��stic nulov�, pohybuj� se v�echny ��stice p��mo�a�e.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Pokud se v�echny ��stice soustavy ot��ej� kolem pevn� osy, jsou jejich �hlov� rychlosti stejn�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Pokud  je celkov� hybnost soustavy konstantn�, pohybuj� se jednotliv� ��stice p��mo�a�e.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Pokud  je  vektorov� sou�et vn�j��ch sil p�sob�c�ch na soustavu nulov�, pohybuj� se jednotliv� ��stice p��mo�a�e, nebo jsou v klidu.
</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==true &&
	            document.form.otazka2.checked==true && 	
		    document.form.otazka3.checked==true && 	 	
		    document.form.otazka4.checked==true &&
		    document.form.otazka5.checked==true &&
		    document.form.otazka6.checked==true && 	
		    document.form.otazka7.checked==true && 
		    document.form.otazka8.checked==true)


			window.open("Spatne/castice/spravne3.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/castice/spatne3.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>