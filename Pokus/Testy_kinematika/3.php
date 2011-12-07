<div id="otazka"><strong>Cyklista si vyjel na výlet. Po první půlhodině jízdy ukazoval původně vynulovaný rychloměr průměrnou velikost rychlosti 25,2 km.h<sup>-1</sup>, po druhé půlhodině (tj. po hodině jízdy) 18,6 km.h<sup>-1</sup>. Z následujících tvrzení je právě jedno správné. Vyberte jej.</strong></div>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>3,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 210;

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
<td width="400px" class="test2">Z uvedených údajů nelze zjistit dráhu cyklisty za první hodinu jízdy, neboť neznáme závislost velikosti jeho rychlosti na čase.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Z uvedených údajů nelze zjistit průměrnou velikost rychlosti cyklisty za druhou  půlhodinu jízdy, neboť neznáme dráhu, kterou během ní urazil.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Z uvedených údajů nelze zjistit vektor průměrné rychlosti cyklisty za první hodinu jízdy, neboť neznáme jeho rychlost v okamžiku <i>t</i> = 60 minut.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Z uvedených údajů nelze zjistit polohu cyklisty po první půlhodině jízdy, neboť neznáme směr jeho počáteční rychlosti.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Ze zadání nelze zjistit velikost vektoru posunutí cyklisty za první hodinu jízdy, neboť zadání neobsahuje potřebné údaje – například počáteční a koncovou polohu cyklisty.</td>
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


			window.open("Spatne/kinematika/spravne3.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne3.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>