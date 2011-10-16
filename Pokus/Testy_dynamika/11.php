<div id="otazka"><strong>Na vl�kn� zanedbateln� hmotnosti a neprom�nn� d�lky je zav�ena mal� kuli�ka. Napnut� vl�kno i s kuli�kou vych�l�me o �hel <i>&theta;</i><sub>0</sub> z rovnov�n� polohy a uvoln�me (matematick� kyvadlo). Pohyb kuli�ky sledujeme v inerci�ln� vzta�n� soustav� spojen� se Zem�. P�edpokl�d�me, �e odpor prost�ed� je zanedbateln�. Vyberte pr�v� ta tvrzen�, kter� jsou spr�vn�.</strong></div>

<p class="odp">Obt�nost: <b>1 bod</b>. Doporu�n� �as na vy�e�en�: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">P�i pr�chodu rovnov�nou polohou je v�slednice sil p�sob�c�ch na kuli�ku nulov�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V pr�b�hu pohybu kyvadla je tahov� s�la vl�kna silou dost�edivou, kter� ud�l� kuli�ce odpov�daj�c� norm�lov� zrychlen�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">P�i pr�chodu rovnov�nou polohou p�sob� na kuli�ku t�hov� s�la, tahov� s�la vl�kna a odst�ediv� s�la.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V bod� obratu nab�v� tahov� s�la vl�kna sv� nejmen�� velikosti. Kuli�ka je tak ve stavu bezt�e.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V obecn� poloze (tj. pro �hlovou v�chylku <i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je v�slednice sil p�sob�c�ch na kuli�ku vodorovn� a vrac� tak kuli�ku zp�t do rovnov�n� polohy.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Tahov� s�la vl�kna je v ka�d�m okam�iku stejn� velk� jako pr�m�t t�hov� s�ly do sm�ru vl�kna.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Kuli�ka m��e kmitat ve svisl� rovin� pouze pro maxim�ln� �hlov� v�chylky <i>&theta;</i><sub>0</sub> &le; 5�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">P�i pr�chodu kuli�ky rovnov�nou polohou je tahov� s�la vl�kna v�t�� ne� t�hov� s�la.</td>
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
		    document.form.otazka5.checked==false && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==true)


			window.open("Spatne/dynamika/spravne11.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne11.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>