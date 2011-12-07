<strong>Na vodorovné podložce leží hranol o hmotnosti <i>m</i>. Koeficient 
statického tření mezi hranolem a podložkou je <i>f</i><sub>0</sub>, koeficient dynamického 
tření mezi hranolem a podložkou je <i>f</i>. V okamžiku <i>t</i>=0 začne na hranol 
působit vodorovná síla <i><b>F</b></i>. Velikost této síly se mění podle vztahu <i>F</i>=<i>kt</i>, 
kde <i>k</i> je konstanta úměrnosti a <i>t</i> je čas. Tíhové zrychlení je <i><b>g</b></i>. Odpor vzduchu zanedbáváme. 
Vyberte právě to tvrzení, které je pro danou situaci správné.</strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 180;

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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=0 se hranol začne vzhledem k podložce pohybovat, protože na něj působí vodorovná síla <i><b>F</b></i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Až do okamžiku, kdy se hranol začne vzhledem k podložce pohybovat, je třecí síla na něj působící nulová, neboť hranol je vzhledem k podložce v klidu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Velikost třecí síly, jíž působí podložka na hranol, může v určitém časovém intervalu narůstat, protože vodorovná síla <i><b>F</b></i> se s časem mění.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Pokud je hranol vzhledem k podložce v klidu, nelze velikost statické třecí síly určit, neboť pro statickou třecí sílu neexistuje silový zákon.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pokud se hranol pohybuje, je velikost třecí síly menší, než když je hranol v klidu, protože platí <i>f</i> < <i>f</i><sub>0</sub>.</td>
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