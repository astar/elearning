<strong>Na vodorovné podloce leí hranol o hmotnosti <i>m</i>. Koeficient 
statického tøení mezi hranolem a podlokou je <i>f</i><sub>0</sub>, koeficient dynamického 
tøení mezi hranolem a podlokou je <i>f</i>. V okamiku <i>t</i>=0 zaène na hranol 
pùsobit vodorovná síla <i><b>F</b></i>. Velikost této síly se mìní podle vztahu <i>F</i>=<i>kt</i>, 
kde <i>k</i> je konstanta úmìrnosti a <i>t</i> je èas. Tíhové zrychlení je <i><b>g</b></i>. Odpor vzduchu zanedbáváme. 
Vyberte právì to tvrzení, které je pro danou situaci správné.</strong>

<p class="odp">Obtínost: <b>1 bod</b>. Doporuènı èas na vyøešení: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 180;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypršel doporuèenı èasovı limit.");}

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
<td width="400px" class="test2">V okamiku <i>t</i>=0 se hranol zaène vzhledem k podloce pohybovat, protoe na nìj pùsobí vodorovná síla <i><b>F</b></i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">A do okamiku, kdy se hranol zaène vzhledem k podloce pohybovat, je tøecí síla na nìj pùsobící nulová, nebo hranol je vzhledem k podloce v klidu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Velikost tøecí síly, jí pùsobí podloka na hranol, mùe v urèitém èasovém intervalu narùstat, protoe vodorovná síla <i><b>F</b></i> se s èasem mìní.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Pokud je hranol vzhledem k podloce v klidu, nelze velikost statické tøecí síly urèit, nebo pro statickou tøecí sílu neexistuje silovı zákon.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pokud se hranol pohybuje, je velikost tøecí síly menší, ne kdy je hranol v klidu, protoe platí <i>f</i> < <i>f</i><sub>0</sub>.</td>
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