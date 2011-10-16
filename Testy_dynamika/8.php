<strong>V�tah se rozj�d� dol� se zrychlen�m <i><b>A</b></i>. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.
</strong>

<p class="odp">Obt�nost: <b>0,5 bodu</b>. Doporu�n� �as na vy�e�en�: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">Pasa��r ve zrychlen�m v�tahu m� stejnou hmotnost jako ve v�tahu v klidu, nebo� hmotnost t�lesa nez�vis� na volb� vzta�n� soustavy.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Popisujeme-li pohyb t�les, kter� se nach�zej�c� ve zrychlen�m v�tahu, vzhledem k Zemi (inerci�ln� vzta�n� soustava), je nutn� uv�it p�soben� setrva�n� s�ly, nebo� zrychlen� v�tah je neinerci�ln� vzta�nou soustavou.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Na pasa��ra ve zrychlen�m v�tahu p�sob� men�� t�hov� s�la ne� ve v�tahu v klidu, nebo� pasa��r se vzhledem k Zemi pohybuje se zrychlen�m <i><b>A</b></i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Jablko, kter� pasa��r upust� ve zrychlen�m v�tahu, dopadne na podlahu za stejnou dobu jako ve v�tahu v klidu, nebo� zrychlen� jablka vzhledem k v�tahu nez�vis� na typu pohybu v�tahu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pasa��r, kter� dr�� jablko v ruce v klidu vzhledem k v�tahu, na n� p�sob�  men�� silou, ne� by p�sobil ve v�tahu v klidu, nebo� vzhledem k Zemi ud�l� pasa��r jablku zrychlen� <i><b>A</b></i>.</td>
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


			window.open("Spatne/dynamika/spravne8.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne8.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>