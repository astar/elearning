<div id="otazka"><strong>�lov�k p�emis�uje knihu v homogenn�m t�hov�m poli Zem� po r�zn�ch trajektori�ch. P�edpokl�d�me, �e krom� n�j a Zem� na knihu ��dn� dal�� objekty nep�sob�. Z n�sleduj�c�ch tvrzen� vyberte pr�v� to, kter� je spr�vn�.
</strong></div>

<p class="odp">Obt�nost: <b>0,5 bodu</b>. Doporu�n� �as na vy�e�en�: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

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
<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">�lov�k p�em�st� knihu rovnom�rn� p��mo�a�e ve vodorovn� rovin�. S�la, j� na knihu p�sob�, je nulov�, a proto nekon� pr�ci.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">�lov�k p�em�st� knihu rovnom�rn� zrychlen� svisle vzh�ru. S�la, j� na knihu p�sob�, p�ekon�v� t�hovou s�lu, a proto vykon� pr�ci, kter� je rovna zm�n� potenci�ln� energie knihy.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">�lov�k p�em�st� knihu rovnom�rn� k�ivo�a�e ve vodorovn� rovin�. S�la, j� na knihu p�sob�, nekon�  pr�ci, nebo�  zm�na kinetick� energie knihy je nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">�lov�k p�em�st� knihu tak, �e jej� po��te�n� a koncov� poloha je stejn�. S�la, j� na knihu p�sob�, vykon� nulovou pr�ci, nebo� vektor posunut� knihy je nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">�lov�k p�em�st� knihu rovnom�rn� p��mo�a�e svisle dol�. S�la, j� na knihu p�sob�, odpov�d� jej� t�ze, a proto vykon� nez�pornou pr�ci.
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


			window.open("Spatne/prace/spravne1.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/prace/spatne1.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>