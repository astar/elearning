<div id="otazka"><strong>Z nejvy���ho bodu naklon�n� roviny s nenulov�m �hlem sklonu sou�asn� uvoln�me  homogenn� tuhou kouli a homogenn� tuh� v�lec. P�edpokl�dejme, �e osa symetrie v�lce je vodorovn�, ob� t�lesa maj� stejnou hmotnost a stejn� polom�r, po naklon�n� rovin� se val� bez podkluzov�n� a odpor vzduchu je zanedbateln�. Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.
</strong></div>

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
<td width="400px" class="test2">Zrychlen� t�i�t� v�lce i koule je stejn�, nebo� pr�m�t t�hov� s�ly do sm�ru naklon�n� roviny je pro ob� t�lesa tent��.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Rychlost t�i�t� v�lce a  koule se li��, nebo� t�lesa maj� vzhledem k vodorovn� ose proch�zej�c� t�i�t�m jin� momenty setrva�nosti.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">�hlov� zrychlen� t�les jsou r�zn�, nebo� statick� t�ec� s�la naklon�n� roviny p�sob� na kouli v jedin�m bod�, kde�to na v�lec pod�l �se�ky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Kinetick� energie t�les je r�zn�, nebo� �hlov� rychlosti t�les kolem vodorovn� osy proch�zej�c� t�i�t�m jsou r�zn�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost rychlosti t�i�t� v�lce a koule nen� mo�n� zjistit, nebo� nen� zad�n koeficient statick�ho t�en� mezi naklon�nou rovinou a t�lesy.</td>
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


			window.open("Spatne/castice/spravne5.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/castice/spatne5.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>