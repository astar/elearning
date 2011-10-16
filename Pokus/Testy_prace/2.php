<div id="otazka"><strong>Ly�a� sj�d� z kopce za �pln�ho bezv�t�� tak, �e se neodr�� holemi ani nebrusl�. Ve v��ce <i>h</i><sub>1</sub> nad �pat�m je velikost jeho rychlosti <i>v</i><sub>1</sub>, ve v��ce <i>h</i><sub>2</sub> < <i>h</i><sub>1</sub> je velikost jeho  rychlosti <i>v</i><sub>2</sub>. Z n�sleduj�c�ch tvrzen� vyberte pr�v� ta, kter� jsou NESPR�VN�.
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
<td width="400px" class="test2">Pr�ci odporov�ch sil nelze ur�it, nebo� nezn�me tvar trajektorie ly�a�e.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pr�ci odporov�ch sil nelze ur�it, nebo� nezn�me koeficient dynamick�ho t�en� mezi sn�hem a ly�emi.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pr�ci t�hov� s�ly nelze ur�it, nebo� nev�me, jak� je trajektorie ly�a�e.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Pr�ci t�hov� s�ly nelze ur�it, nebo� nev�me, kde je zvolena hladina nulov� t�hov� potenci�ln� energie.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pr�ce odporov�ch sil je z�porn�, nebo� velikost rychlosti ly�a�e kles�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Pr�ce t�hov� s�ly je nez�porn�, nebo� t�hov� s�la sv�r� s rychlost� ly�a�e ostr� �hel.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Zm�na mechanick� energie ly�a�e nem��e b�t kladn�, nebo� podle p�edpokladu v zad�n� je bezv�t��, ly�a� se neodr�� holemi a nebrusl�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Zm�na mechanick� energie ly�a�e je ovlivn�na zp�sobem sjezdu, nebo� veli�ina <i>v</i><sub>2</sub> z�vis� nap��klad na tom, zda ly�a� d�l� oblou�ky, �i nikoli.
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
		    document.form.otazka6.checked==false && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/prace/spravne2.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/prace/spatne2.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>