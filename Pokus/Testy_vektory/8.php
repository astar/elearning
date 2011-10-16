<div id="otazka"><strong>Nenulová síla <b><i>F</i></b> má ve zvolené kartézské soustavì souøadnic sloky <b><i>F</i></b> = (<i>F</i><sub>x</sub>, <i>F</i><sub>y</sub>, <i>F</i><sub>z</sub>). Z následujících tvrzení je právì jedno správné. Vyberte je.</strong></div>

<p class="odp">Obtínost: <b>0,5 bodu</b>. Doporuènı èas na vyøešení: <b>2 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>
<script>
var c = 120;

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
<td width="400px" class="test2">Síla amath vec bb F endamath mùe mít v jiné kartézské soustavì souøadnic jiné sloky, nebo soustavy souøadnic mohou mít rùznı poèátek.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pokud platí <i>F</i><sub>x</sub> &ne; <i>F</i><sub>y</sub>, bude tomu tak i v kadé jiné kartézské soustavì souøadnic, nebo všechny sloky síly amath vec bb F endamath se transformují podle stejnıch pravidel.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pokud platí <i>F</i><sub>x</sub> = 0, bude tomu tak i v kadé jiné kartézské soustavì souøadnic, nebo transformací nulové sloky vektoru dostáváme opìt nulovou sloku.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Síla amath vec bb F endamath mùe mít v jiné kartézské soustavì souøadnic jinou velikost, nebo v ní mùe mít jiné sloky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Síla amath vec bb F endamath bude nenulová v kadé kartézské soustavì souøadnic, nebo jde stále o tentı vektor.</td>
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

			window.open("Spatne/vektory/spravne8.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/vektory/spatne8.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>