<div id="otazka"><strong>Malá kulička (hmotný bod) se pohybuje v rovině <i>Oxy</i> rovnoměrně po kružnici o poloměru <i>R</i>. Bod <i>O</i> je středem kružnice. Z následujících tvrzení vyberte právě ta, která jsou správná.
</strong></div>

<p class="odp">Obtížnost: <b>2 body</b>. Doporučený čas na vyřešení: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

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

<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Pohyb kuličky je periodický s periodou 

amath
T = (2 pi R) / v
endamath, 

úhlová rychlost kuličky má velikost 

amath
omega = 2 pi / T = v / R
endamath.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Průměrná rychlost kuličky nemůže být nulová.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Vzhledem k tomu, že pohyb kuličky je rovnoměrný, je její průměrné zrychlení v každém časovém intervalu nulové.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Okamžité zrychlení kuličky je v každém bodě trajektorie rovno zrychlení normálovému, neboť tečné zrychlení při rovnoměrném pohybu je nulové.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Vektor úhlové rychlosti kuličky má v každém okamžiku směr polohového vektoru kuličky, ale je opačně orientován.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Vektor rychlosti amath vec bb v endamath, úhlové rychlosti amath vec bb omega endamath a polohový vektor amath vec bb r endamath spolu souvisí vztahem 

amath
vec bb v = vec bb omega xx vec bb r
endamath.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Úhlové zrychlení není konstantní. Vzhledem k rovnoměrnosti pohybu má sice stálou velikost, ale jeho směr se mění.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Normálové (dostředivé) zrychlení má sice stále směr do středu kružnice, jeho velikost se však mění, neboť úhel opsaný průvodičem kuličky stále narůstá.
</td>
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
		    document.form.otazka5.checked==false && 	 	
		    document.form.otazka6.checked==true && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/kinematika_lehke/spravne2.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika_lehke/spatne2.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>