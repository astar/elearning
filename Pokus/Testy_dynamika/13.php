<div id="otazka"><strong>Mal� kuli�ce zav�en� na napnut�m vl�kn� zanedbateln� hmotnosti a neprom�nn� d�lky ud�l�me takovou rychlost, �e ob�h� po kru�nici le��c� ve svisl� rovin�. P�edpokl�d�me, �e odpor prost�ed� je zanedbateln�. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.</strong></div>

<p class="odp">Obt�nost: <b>1 bod</b>. Doporu�n� �as na vy�e�en�: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">V nejvy���m bod� trajektorie m��e b�t velikost rychlosti kuli�ky libovoln�, av�ak nenulov�, jinak by se toti� kuli�ka v tomto bod� zastavila.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V okam�iku, kdy m� vl�kno vodorovn� sm�r, je tahov� s�la vl�kna nulov�, nebo� nulov� je i pr�m�t t�hov� s�ly do sm�ru vl�kna.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V nejni���m a nejvy���m bod� trajektorie je zrychlen� kuli�ky stejn� velk�, nebo� stejn� velk� jsou i s�ly, kter� na kuli�ku v t�chto bodech p�sob�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V nejvy���m bod� trajektorie m��e nap�t� ve vl�kn� vymizet, jeliko� norm�lov� zrychlen� m��e kuli�ce ud�let pouze t�hov� s�la.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Situaci popsanou v zad�n� nen� mo�n� uskute�nit, nebo� v�slednice sil p�sob�c�ch na kuli�ku sm��uje v ka�d�m bod� trajektorie do nejni��� polohy. Kuli�ka proto m��e ve svisl� rovin� pouze kmitat.</td>
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
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==false)


			window.open("Spatne/dynamika/spravne13.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne13.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>