<strong>Malá kulièka (hmotnı bod) se pohybuje v rovinì <i>Oxy</i> rovnomìrnì po krunici o polomìru <i>R</i>. Bod <i>O</i> je støedem krunice. Z následujících tvrzení vyberte právì ta, která jsou správná.
</strong>

<p class="odp">Obtínost: <b>2 body</b>. Doporuènı èas na vyøešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Pohyb kulièky je periodickı s periodou <i>T</i> = 2<i>&pi;R</i>/<i>v</i>, úhlová rychlost kulièky má velikost <i>&omega;</i> = 2<i>&pi;</i>/<i>T</i> = <i>v</i>/<i>R</i>.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Prùmìrná rychlost kulièky nemùe bıt nulová.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Vzhledem k tomu, e pohyb kulièky je rovnomìrnı, je její prùmìrné zrychlení v kadém èasovém intervalu nulové.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Okamité zrychlení kulièky je v kadém bodì trajektorie rovno zrychlení normálovému, nebo teèné zrychlení pøi rovnomìrném pohybu je nulové.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Vektor úhlové rychlosti kulièky má v kadém okamiku smìr polohového vektoru kulièky, ale je opaènì orientován.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Vektor rychlosti <b><i>v</i></b>, úhlové rychlosti <b><i>&omega;</i></b> a polohovı vektor <b><i>r</i></b> spolu souvisí vztahem <b><i>v</i></b> = <b><i>&omega;</i></b>&times;<b><i>r</i></b>.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Úhlové zrychlení není konstantní. Vzhledem k rovnomìrnosti pohybu má sice stálou velikost, ale jeho smìr se mìní.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Normálové (dostøedivé) zrychlení má sice stále smìr do støedu krunice, jeho velikost se však mìní, nebo úhel opsanı prùvodièem kulièky stále narùstá.
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