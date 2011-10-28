<div id="otazka"><strong>Na podlaze vagónu, který je do okamžiku <i>t</i>=<i>t</i><sub>0</sub> vzhledem k nástupišti v klidu, 
leží bedna o hmotnosti <i>m</i>. Koeficient statického tření mezi bednou a podlahou je <i>f</i><sub>0</sub>, 
koeficient dynamického tření mezi bednou a podlahou je <i>f</i>. V okamžiku <i>t</i>=<i>t</i><sub>0</sub> se začne vagón rozjíždět 
po přímých vodorovných kolejích se zrychlením <i><b>A</b></i>. Velikost zrychlení se mění podle vztahu 
<i>A</i>=<i>k</i>(<i>t</i>-<i>t</i><sub>0</sub>), kde <i>k</i> je 
konstanta úměrnosti a <i>t</i> je čas. Tíhové zrychlení je <i><b>g</b></i> . Odpor vzduchu zanedbáváme. 
Vyberte právě ta tvrzení, která jsou správná.</strong></div>

<p class="odp">Obtížnost: <b>2 body</b>. Doporučný čas na vyřešení: <b>4 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 240;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypršel doporučený časový limit.");}

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
<td width="400px" class="test2">Po celou dobu, kdy je bedna vzhledem k jedoucímu vagónu v klidu, na ni působí statická třecí síla o velikosti amath m g f_0 endamath. Tato síla je orientovaná ve směru pohybu vagónu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Jakmile se dá bedna vzhledem k jedoucímu vagónu do pohybu, působí na ni dynamická třecí síla o velikosti <i>mgf</i>. Tato síla je orientovaná ve směru pohybu vagónu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Do okamžiku amath t = t_0 endamath, kdy se vagón začne rozjíždět, je statická třecí síla působící na bednu nulová.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Velikost statické třecí síly působící na bednu roste spolu se zrychlením vagónu až do hodnoty amath m g f_0 endamath. Tato síla má opačnou orientaci než zrychlení vagónu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V okamžiku amath t = t_0 endamath nabývá statická třecí síla působící na bednu velikosti amath m g f_0 endamath a bedna se začíná vzhledem k vagónu pohybovat.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Do okamžiku, kdy se začne bedna vzhledem k vagónu pohybovat, na ni působí statická třecí síla o velikosti <i>mA</i>. Tato síla urychluje bednu vzhledem k nástupišti.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Pokud se změní hmotnost bedny, bude se bedna (jakmile se dá vzhledem k vagónu do pohybu) pohybovat s jiným zrychlením.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Pokud se změní hmotnost bedny, začne se bedna vzhledem k vagónu pohybovat v jiném  okamžiku.</td>
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