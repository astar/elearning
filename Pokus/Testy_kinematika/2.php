<div id="otazka"><strong>Částice se pohybuje rovnoměrně po kružnici. Perioda jejího oběhu je <i>T</i>. Z následujících tvrzení je právě jedno správné. Vyberte jej.
</strong></div>

<p class="odp">Obtížnost: <b>0,5 bodu</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 150;

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
<td width="400px" class="test2">Vektor průměrné rychlosti částice v intervalu [0,<i>T</i>]  je nenulový, neboť dráha částice s časem roste.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Velikost vektoru průměrné rychlosti částice v libovolném intervalu [<i>t</i><sub>1</sub>,<i>t</i><sub>2</sub>] je stejná, neboť částice se pohybuje rovnoměrně.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Vektor průměrné rychlosti částice v intervalu amath [0,T/2] endamath je nulový, neboť vektory rychlosti v počátečním a koncovém okamžiku tohoto intervalu jsou opačné.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Průměrná velikost rychlosti částice v intervalu [0,<i>T</i>] je stejná jako v intervalu [0,<i>T</i>/2], neboť částice se pohybuje s nulovým zrychlením.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost vektoru průměrné rychlosti částice v intervalech [0,<i>T</i>] a [0,2<i>T</i>] je stejná, neboť v krajních bodech obou intervalů má částice tutéž polohu.</td>
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