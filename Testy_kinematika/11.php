<strong>Z t�ho� m�sta ve v��ce <i>h</i> &ne; 0 nad povrchem Zem� byly sou�asn� vyst�eleny dva projektily, prvn� vodorovn� a druh� svisle vzh�ru. P�edpokl�d�me, �e projektily lze pova�ovat za hmotn� body, kter� se pohybuj� v homogenn�m t�hov�m poli Zem�, a odpor vzduchu je zanedbateln�. Vyberte pr�v� to tvrzen�, kter� je pro �asov� rozmez�, kdy se oba projektily v��i Zemi pohybuj�, spr�vn�.</strong>

<p class="odp">Obt�nost: <b>1 bod</b>. Doporu�n� �as na vy�e�en�: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Druh� projektil se v��i prvn�mu pohybuje nejprve zpomalen�, nebo� jeho po��te�n� rychlost je nesouhlasn� rovnob�n� s t�hov�m zrychlen�m.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Prvn� projektil se v��i druh�mu pohybuje rovnom�rn�, nebo� projektily maj� v��i Zemi stejn� zrychlen�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Druh� projektil se v��i prvn�mu pohybuje po parabole, nebo� sm�ry po��te�n�ch rychlost� projektil� jsou r�zn�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">O vz�jemn�m pohybu projektil� nelze �init ��dn� z�v�ry, nebo� nen� zn�mo, jak jsou konkr�tn� zvoleny vzta�n� soustavy s nimi spojen�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Vzd�lenost projektil� roste kvadraticky s �asem, nebo� oba projektily se v��i Zemi pohybuj� rovnom�rn� zrychlen�.</td>
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


			window.open("Spatne/kinematika/spravne11.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne11.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>