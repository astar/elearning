<div id="otazka"><strong>Na vl�kn� zanedbateln� hmotnosti a neprom�nn� d�lky je zav�ena mal� kuli�ka. Napnut� vl�kno i s kuli�kou vych�l�me o �hel <i>&theta;</i><sub>0</sub> z rovnov�n� polohy a uvoln�me (matematick� kyvadlo). Pohyb kuli�ky sledujeme v inerci�ln� vzta�n� soustav� spojen� se Zem�. P�edpokl�d�me, �e odpor prost�ed� je zanedbateln�. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.
</strong></div>

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
<td width="400px" class="test2">P�i pr�chodu rovnov�nou polohou je v�slednice sil p�sob�c�ch na kuli�ku nulov�, nebo� rovnov�nou polohou proch�z� kuli�ka setrva�nost�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V bodech obratu je v�slednice sil p�sob�c�ch na kuli�ku te�n� k trajektorii, nebo� kuli�ka m� v bodech obratu nulovou rychlost.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V obecn� poloze (<i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je vl�kno nap�n�no v�t�� silou ne� v bodech obratu, proto�e na kuli�ku nav�c p�sob� odst�ediv� s�la.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V obecn� poloze (<i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je v�slednice sil p�sob�c�ch na kuli�ku te�n� k trajektorii, proto�e kuli�ka kon� harmonick� kmitav� pohyb.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">P�i pr�chodu kuli�ky rovnov�nou polohou je vl�kno nap�n�no stejnou silou, jako kdy� kuli�ka v rovnov�n� poloze v klidu vis�, nebo� silov� z�kony ur�uj�c� velikosti jednotliv�ch sil nesouvis� s pohybov�m stavem objektu.</td>
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
		    document.form.otazka5.checked==false)


			window.open("Spatne/dynamika/spravne12.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne12.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>