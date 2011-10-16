<div id="otazka"><strong>Na vl�kn� zanedbateln� hmotnosti a neprom�nn� d�lky je zav�ena mal� kuli�ka. Napnut� vl�kno i s kuli�kou vych�l�me o �hel <i>&theta;</i><sub>0</sub> z nejni��� polohy a ud�l�me kuli�ce takovou rychlost, �e se pohybuje rovnom�rn� po kru�nici ve vodorovn� rovin� (k�nick� kyvadlo). Pohyb kuli�ky sledujeme v inerci�ln� vzta�n� soustav� spojen� se Zem�. P�edpokl�d�me, �e odpor prost�ed� je zanedbateln�. Vyberte pr�v� to tvrzen�, kter� NEN� spr�vn�.</strong></div>

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
<td width="400px" class="test2">Kuli�ka se pohybuje rovnom�rn� po kru�nici, proto na ni mimo jin� p�sob� dost�ediv� s�la. Reakc� na tuto s�lu je s�la odst�ediv�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Popsan� pohyb nelze uskute�nit p�i volb� <i>&theta;</i><sub>0</sub> &ge; 90�, nebo� slo�en�m t�hov� s�ly a tahov� s�ly vl�kna by nebyla po�adovan� dost�ediv� s�la.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Svisl� pr�m�t tahov� s�ly vl�kna je stejn� velk� jako t�hov� s�la p�sob�c� na kuli�ku, proto�e rychlost kuli�ky st�le le�� v t�e vodorovn� rovin�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Dost�ediv� zrychlen� kuli�ky je ur�eno vodorovn�m pr�m�tem tahov� s�ly vl�kna, nebo�  v�echny dal�� s�ly p�sob�c� na kuli�ku maj� svisl� sm�r. Te�n� zrychlen� kuli�ky je nulov�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost v�slednice sil p�sob�c�ch na kuli�ku je z�visl� na volb� �hlu <i>&theta;</i><sub>0</sub>, nebo� ��m v�t�� je tento �hel, t�m v�t�� je tahov� s�la vl�kna i jej� vodorovn� pr�m�t. Ostatn� s�ly p�sob�c� na kuli�ku jsou toti� konstantn�.</td>
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


			window.open("Spatne/dynamika/spravne15.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne15.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>