<div id="otazka"><strong>Z údajů na rychloměru, který byl na začátku cyklistického výletu vynulován, uvádíme tyto: 
<ul>
<li>Průměrná velikost rychlosti cyklisty za první hodinu jízdy je 16,2 km.h<sup>-1</sup>.</li>
<li>Za první dvě hodiny jízdy ujel cyklista 26,4 km.</li>
<li>Průměrná velikost rychlosti cyklisty po 50 km jízdy je 10,0 km.h<sup>-1</sup>.</li>
</ul>
Vyberte právě správná tvrzení.
</strong></div>

<p class="odp">Obtížnost: <b>2 body</b>. Doporučný čas na vyřešení: <b>4,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 270;

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
<td width="400px" class="test2">Průměrná velikost rychlosti cyklisty za druhou hodinu jízdy je menší než za první hodinu jízdy.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Za první půlhodinu jízdy ujel cyklista dráhu 8,1 km.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Po dvou hodinách jízdy byl cyklista od místa startu vzdálen 26,4 km.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Během třetí hodiny jízdy ujel cyklista menší dráhu než za první dvě hodiny.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Dráhu 50 km ujel cyklista za 5 hodin.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Velikost průměrné rychlosti cyklisty za první dvě hodiny jízdy je 26,4 km.h<sup>-1</sup>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">S každou další hodinou průměrná velikost rychlosti cyklisty klesala.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Vektor průměrné rychlosti cyklisty po 50 km jízdy je nenulový.</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==true && 
		    document.form.otazka2.checked==false && 
		    document.form.otazka3.checked==false && 
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==true &&
		    document.form.otazka6.checked==false &&
		    document.form.otazka7.checked==false &&
		    document.form.otazka8.checked==false)


			window.open("Spatne/kinematika/spravne4.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne4.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>