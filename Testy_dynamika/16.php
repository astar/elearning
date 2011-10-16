<strong>Na podlaze vag�nu, kter� je do okam�iku <i>t</i>=<i>t</i><sub>0</sub> vzhledem k n�stupi�ti v klidu, 
le�� bedna o hmotnosti <i>m</i>. Koeficient statick�ho t�en� mezi bednou a podlahou je <i>f</i><sub>0</sub>, 
koeficient dynamick�ho t�en� mezi bednou a podlahou je <i>f</i>. V okam�iku <i>t</i>=<i>t</i><sub>0</sub> se za�ne vag�n rozj�d�t 
po p��m�ch vodorovn�ch kolej�ch se zrychlen�m <i><b>A</b></i>. Velikost zrychlen� se m�n� podle vztahu 
<i>A</i>=<i>k</i>(<i>t</i>-<i>t</i><sub>0</sub>), kde <i>k</i> je 
konstanta �m�rnosti a <i>t</i> je �as. T�hov� zrychlen� je <i><b>g</b></i>. Odpor vzduchu zanedb�v�me. 
Vyberte pr�v� ta tvrzen�, kter� jsou spr�vn�.</strong>

<p class="odp">Obt�nost: <b>2 body</b>. Doporu�n� �as na vy�e�en�: <b>4 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 240;

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
<td width="400px" class="test2">Po celou dobu, kdy je bedna vzhledem k jedouc�mu vag�nu v klidu, na ni p�sob� statick� t�ec� s�la o velikosti <i>mgf</i><sub>0</sub>. Tato s�la je orientovan� ve sm�ru pohybu vag�nu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Jakmile se d� bedna vzhledem k jedouc�mu vag�nu do pohybu, p�sob� na ni dynamick� t�ec� s�la o velikosti <i>mgf</i>. Tato s�la je orientovan� ve sm�ru pohybu vag�nu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Do okam�iku <i>t</i>=<i>t</i><sub>0</sub>, kdy se vag�n za�ne rozj�d�t, je statick� t�ec� s�la p�sob�c� na bednu nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Velikost statick� t�ec� s�ly p�sob�c� na bednu roste spolu se zrychlen�m vag�nu a� do hodnoty <i>mgf</i><sub>0</sub>. Tato s�la m� opa�nou orientaci ne� zrychlen� vag�nu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V okam�iku <i>t</i>=<i>t</i><sub>0</sub> nab�v� statick� t�ec� s�la p�sob�c� na bednu velikosti  <i>mgf</i><sub>0</sub> a bedna se za��n� vzhledem k vag�nu pohybovat.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Do okam�iku, kdy se za�ne bedna vzhledem k vag�nu pohybovat, na ni p�sob� statick� t�ec� s�la o velikosti <i>mA</i>. Tato s�la urychluje bednu vzhledem k n�stupi�ti.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Pokud se zm�n� hmotnost bedny, bude se bedna (jakmile se d� vzhledem k vag�nu do pohybu) pohybovat s jin�m zrychlen�m.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Pokud se zm�n� hmotnost bedny, za�ne se bedna vzhledem k vag�nu pohybovat v jin�m  okam�iku.</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==false &&
	            document.form.otazka2.checked==true && 	
		    document.form.otazka3.checked==true && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==false && 
		    document.form.otazka6.checked==true && 
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/dynamika/spravne16.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne16.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>