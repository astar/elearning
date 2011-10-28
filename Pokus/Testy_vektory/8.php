<div id="otazka"><strong>Nenulová síla <b><i>F</i></b> má ve zvolené kartézské soustavě souřadnic složky <b><i>F</i></b> = (<i>F</i><sub>x</sub>, <i>F</i><sub>y</sub>, <i>F</i><sub>z</sub>). Z následujících tvrzení je právě jedno správné. Vyberte je.</strong></div>

<p class="odp">Obtížnost: <b>0,5 bodu</b>. Doporučný čas na vyřešení: <b>2 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>
<script>
var c = 120;

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
<td width="400px" class="test2">Síla amath vec bb F endamath může mít v jiné kartézské soustavě souřadnic jiné složky, neboť soustavy souřadnic mohou mít různý počátek.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Pokud platí <i>F</i><sub>x</sub> &ne; <i>F</i><sub>y</sub>, bude tomu tak i v každé jiné kartézské soustavě souřadnic, neboť všechny složky síly amath vec bb F endamath se transformují podle stejných pravidel.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pokud platí <i>F</i><sub>x</sub> = 0, bude tomu tak i v každé jiné kartézské soustavě souřadnic, neboť transformací nulové složky vektoru dostáváme opět nulovou složku.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Síla amath vec bb F endamath může mít v jiné kartézské soustavě souřadnic jinou velikost, neboť v ní může mít jiné složky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Síla amath vec bb F endamath bude nenulová v každé kartézské soustavě souřadnic, neboť jde stále o tentýž vektor.</td>
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