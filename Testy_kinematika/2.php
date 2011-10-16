<strong>Èástice se pohybuje rovnomìrnì po krunici. Perioda jejího obìhu je <i>T</i>. Z následujících tvrzení je právì jedno správné. Vyberte jej.
</strong>

<p class="odp">Obtínost: <b>0,5 bodu</b>. Doporuènı èas na vyøešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 150;

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
<td width="400px" class="test2">Vektor prùmìrné rychlosti èástice v intervalu [0,<i>T</i>]  je nenulovı, nebo dráha èástice s èasem roste.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Velikost vektoru prùmìrné rychlosti èástice v libovolném intervalu [<i>t</i><sub>1</sub>,<i>t</i><sub>2</sub>] je stejná, nebo èástice se pohybuje rovnomìrnì.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Vektor prùmìrné rychlosti èástice v intervalu [0,<i>T</i>/2] je nulovı, nebo vektory rychlosti v poèáteèním a koncovém okamiku tohoto intervalu jsou opaèné.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Prùmìrná velikost rychlosti èástice v intervalu [0,<i>T</i>] je stejná jako v intervalu [0,<i>T</i>/2], nebo èástice se pohybuje s nulovım zrychlením.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost vektoru prùmìrné rychlosti èástice v intervalech [0,<i>T</i>] a [0,2<i>T</i>] je stejná, nebo v krajních bodech obou intervalù má èástice tuté polohu.</td>
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
		    document.form.otazka3.checked==false && 
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==true)


			window.open("Spatne/kinematika/spravne2.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika/spatne2.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>