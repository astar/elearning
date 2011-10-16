<strong>Z n�sleduj�c�ch tvrzen� vyberte pr�v� ta, kter� jsou NESPR�VN�, NEBO JE JEJICH SPR�VNOST OMEZENA NA SPECI�LN� P��PADY.</strong>

<p class="odp">Obt�nost: <b>1,5 bodu</b>. Doporu�n� �as na vy�e�en�: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">Pokud se ��stice nepohybuje p��mo�a�e, m� jej� zrychlen� sm�r norm�ly k trajektorii.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pokud se ��stice pohybuje rovnom�rn�, jej� rychlost se nem�n�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pokud je zrychlen� konstantn�, pohybuje se ��stice p��mo�a�e.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Pokud se m�n� zrychlen�, je pohyb ��stice nerovnom�rn�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pokud je dr�ha line�rn� funkc� �asu, je zrychlen� ��stice nulov�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Pokud m� zrychlen� sm�r te�ny k trajektorii, nem�n� se rychlost ��stice.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Pokud se ��stice pohybuje p��mo�a�e, sv�r� jej� rychlost s polohov�m vektorem st�le stejn� �hel.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Pokud se ��stice pohybuje periodicky mezi dv�ma r�zn�mi body prostoru, je jej� dr�ha za jednu periodu nulov�.</td>
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

			window.open("Spatne/kinematika/spravne5.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne5.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>