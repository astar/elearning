<div id="otazka"><strong>Cyklista si vyjel na vılet. Po první pùlhodinì jízdy ukazoval pùvodnì vynulovanı rychlomìr prùmìrnou velikost rychlosti 25,2 km.h<sup>-1</sup>, po druhé pùlhodinì (tj. po hodinì jízdy) 18,6 km.h<sup>-1</sup>. Z následujících tvrzení je právì jedno správné. Vyberte jej.</strong></div>

<p class="odp">Obtínost: <b>1 bod</b>. Doporuènı èas na vyøešení: <b>3,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 210;

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
<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Z uvedenıch údajù nelze zjistit dráhu cyklisty za první hodinu jízdy, nebo neznáme závislost velikosti jeho rychlosti na èase.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Z uvedenıch údajù nelze zjistit prùmìrnou velikost rychlosti cyklisty za druhou  pùlhodinu jízdy, nebo neznáme dráhu, kterou bìhem ní urazil.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Z uvedenıch údajù nelze zjistit vektor prùmìrné rychlosti cyklisty za první hodinu jízdy, nebo neznáme jeho rychlost v okamiku <i>t</i> = 60 minut.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Z uvedenıch údajù nelze zjistit polohu cyklisty po první pùlhodinì jízdy, nebo neznáme smìr jeho poèáteèní rychlosti.</td>
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Ze zadání nelze zjistit velikost vektoru posunutí cyklisty za první hodinu jízdy, nebo zadání neobsahuje potøebné údaje – napøíklad poèáteèní a koncovou polohu cyklisty.</td>
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