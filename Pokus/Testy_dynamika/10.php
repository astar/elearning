<div id="otazka"><strong>Na nakloněnou rovinu s úhlem sklonu <i>&alpha;</i> &ne; 0 položíme krabici a uvolníme ji. Předpokládáme, že odpor prostředí je zanedbatelný. Vyberte právě ta tvrzení, která jsou správná.
</strong></div>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">Na krabici působí tíhová síla a tlaková síla nakloněné roviny. Jejich výslednice je rovnoběžná s nakloněnou rovinou.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Tlaková síla, jíž působí nakloněná rovina na krabici, je reakcí na průmět tíhové síly do směru kolmého k nakloněné rovině.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Na krabici působí celkem tři síly: dvě z nich jsou k nakloněné rovině kolmé a ruší se, třetí je s nakloněnou rovinou rovnoběžná.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Tlaková síla nakloněné roviny má svislý směr, ale menší velikost než tíhová síla. Krabice proto klesá se zrychlením.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Při vhodném sklonu nakloněné roviny je výslednice sil působících na krabici nulová. Krabice pak klesá s konstantní rychlostí.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Země působí na krabici dvěma silami: jedna je s nakloněnou rovinou rovnoběžná, druhá je k nakloněné rovině kolmá a deformuje ji.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Zrychlení krabice má směr nakloněné roviny, proto je tlaková síla nakloněné roviny stejně velká jako průmět tíhové síly do směru kolmého k nakloněné rovině.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Průmět zrychlení krabice do svislého směru je nulový, proto se svislý průmět tlakové síly nakloněné roviny ruší s tíhovou silou.</td>
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
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==false && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==true && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/dynamika/spravne10.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne10.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>