<strong>Na vl�kn� zanedbateln� hmotnosti a neprom�nn� d�lky je zav�ena mal� kuli�ka. Napnut� vl�kno i s kuli�kou vych�l�me o �hel <i>&theta;</i><sub>0</sub> z nejni��� polohy a ud�l�me kuli�ce takovou rychlost, �e se pohybuje rovnom�rn� po kru�nici ve vodorovn� rovin� (k�nick� kyvadlo). Pohyb kuli�ky sledujeme v inerci�ln� vzta�n� soustav� spojen� se Zem�. P�edpokl�d�me, �e odpor prost�ed� je zanedbateln�. Vyberte pr�v� ta tvrzen�, kter� jsou spr�vn�.</strong>

<p class="odp">Obt�nost: <b>1 bod</b>. Doporu�n� �as na vy�e�en�: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 150;

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
<td width="400px" class="test2">Na kuli�ku p�sob� mimo jin� t�hov� s�la a dost�ediv� s�la.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V�slednice sil p�sob�c�ch na kuli�ku je t�m v�t��, ��m v�t�� je �hel <i>&theta;</i><sub>0</sub>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Na kuli�ku p�sob� mimo jin� tahov� s�la vl�kna a odst�ediv� s�la.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V�slednice sil p�sob�c�ch na kuli�ku je v ka�d�m okam�iku te�n� k trajektorii.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Svisl� pr�m�t v�slednice sil p�sob�c�ch na kuli�ku je v ka�d�m okam�iku nulov�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Vl�kno je nap�n�no silou, kter� je stejn� velk� jako t�hov� s�la p�sob�c� na kuli�ku.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Kuli�ka m��e konat popsan� pohyb pouze pro �hly <i>&theta;</i><sub>0</sub> &le; 5�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Velikost tahov� s�ly vl�kna se v pr�b�hu pohybu kuli�ky nem�n�.</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==false &&
	            document.form.otazka2.checked==true && 	
		    document.form.otazka3.checked==false && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==true && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==true)


			window.open("Spatne/dynamika/spravne14.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne14.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>