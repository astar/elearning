<div id="otazka"><strong>�eb��k, kter� lze pova�ovat za homogenn� tuh� t�leso, se op�r� o svislou st�nu a vodorovnou podlahu. T�en� mezi �eb��kem a svislou st�nou lze zanedbat, t�en� mezi �eb��kem a podlahou nikoli. �eb��k je vzhledem k m�stnosti v klidu. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.
</strong></div>

<p class="odp">Obt�nost: <b>1,5 bodu</b>. Doporu�n� �as na vy�e�en�: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Tlakov� s�la st�ny a t�ec� s�la podlahy jsou stejn� velk� a jejich momenty vzhledem k t�i�ti �eb��ku jsou opa�n� orientovan�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Podm�nku momentov� rovnov�hy je nutno formulovat vzhledem k t�i�ti �eb��ku. Pr�v� v t�i��ov� soustav� toti� plat� druh� impulzov� v�ta, z n� se tato podm�nka vyvozuje.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Tlakov� s�la podlahy a t�hov� s�la jsou stejn� velk�, nebo� jin� svisl� s�ly na �eb��k nep�sob�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">�hel, kter� sv�r� �eb��k s rovinou podlahy, m��e b�t libovoln�, nebo� momenty dvojic jednotliv�ch sil p�sob�c�ch na �eb��k z�vis� jen na d�lce �eb��ku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Vektorov� sou�et sil p�sob�c�ch na �eb��k nen� definov�n, nebo� jednotliv� s�ly maj� r�zn� p�sobi�t�.
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
		    document.form.otazka3.checked==true && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==false)


			window.open("Spatne/castice/spravne1.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/castice/spatne1.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>