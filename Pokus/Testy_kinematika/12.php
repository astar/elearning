<div id="otazka"><strong>Na leti�ti v Madridu usnad�uje cestuj�c�m p�esun vodorovn� pohybliv� chodn�k, kter� se v��i leti�tn� hale pohybuje konstantn� rychlost� <i><b>v</b></i>. Z n�sleduj�c�ch tvrzen� je pr�v� jedno  NESPR�VN�. Vyberte jej. Odpor vzduchu zanedb�v�me.</strong></div>

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
<td width="400px" class="test2">M��ek, kter� se v��i chodn�ku pohybuje po trajektorii vodorovn�ho vrhu, se po trajektorii vodorovn�ho vrhu mus� pohybovat i v��i leti�tn� hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">M��ek, kter� se v��i chodn�ku pohybuje se zrychlen�m, se s t�mt� zrychlen�m mus� pohybovat i v��i leti�tn� hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">M��ek, kter� se v��i chodn�ku pohybuje po p��mce, se po p��mce m��e pohybovat i v��i leti�tn� hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">M��ek, kter� se v��i chodn�ku pohybuje s prom�nnou rychlost�, se s prom�nnou rychlost� mus� pohybovat i v��i leti�tn� hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">M��ek, kter� se v��i chodn�ku pohybuje rovnom�rn�, se v��i leti�tn� hale rovnom�rn� pohybovat nemus�.</td>
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


			window.open("Spatne/kinematika/spravne12.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne12.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>