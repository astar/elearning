<strong>Na vodorovn� podlo�ce le�� hranol o hmotnosti <i>m</i>. Koeficient 
statick�ho t�en� mezi hranolem a podlo�kou je <i>f</i><sub>0</sub>, koeficient dynamick�ho 
t�en� mezi hranolem a podlo�kou je <i>f</i>. V okam�iku <i>t</i>=0 za�ne na hranol 
p�sobit vodorovn� s�la <i><b>F</b></i>. Velikost t�to s�ly se m�n� podle vztahu <i>F</i>=<i>kt</i>, 
kde <i>k</i> je konstanta �m�rnosti a <i>t</i> je �as. T�hov� zrychlen� je <i><b>g</b></i>. Odpor vzduchu zanedb�v�me. 
Vyberte pr�v� to tvrzen�, kter� je pro danou situaci spr�vn�.</strong>

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
<td width="400px" class="test2">V okam�iku <i>t</i>=0 se hranol za�ne vzhledem k podlo�ce pohybovat, proto�e na n�j p�sob� vodorovn� s�la <i><b>F</b></i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">A� do okam�iku, kdy se hranol za�ne vzhledem k podlo�ce pohybovat, je t�ec� s�la na n�j p�sob�c� nulov�, nebo� hranol je vzhledem k podlo�ce v klidu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Velikost t�ec� s�ly, j� p�sob� podlo�ka na hranol, m��e v ur�it�m �asov�m intervalu nar�stat, proto�e vodorovn� s�la <i><b>F</b></i> se s �asem m�n�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Pokud je hranol vzhledem k podlo�ce v klidu, nelze velikost statick� t�ec� s�ly ur�it, nebo� pro statickou t�ec� s�lu neexistuje silov� z�kon.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pokud se hranol pohybuje, je velikost t�ec� s�ly men��, ne� kdy� je hranol v klidu, proto�e plat� <i>f</i> < <i>f</i><sub>0</sub>.</td>
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


			window.open("Spatne/dynamika/spravne17.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne17.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>