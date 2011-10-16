<strong>Na naklonìnou rovinu s úhlem sklonu <i>&alpha;</i> &ne; 0 položíme krabici a uvolníme ji. Pøedpokládáme, že odpor prostøedí je zanedbatelný. Vyberte právì ta tvrzení, která jsou správná.
</strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporuèný èas na vyøešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpoèet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 150;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypršel doporuèený èasový limit.");}

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
<td width="400px" class="test2">Na krabici pùsobí tíhová síla a tlaková síla naklonìné roviny. Jejich výslednice je rovnobìžná s naklonìnou rovinou.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Tlaková síla, jíž pùsobí naklonìná rovina na krabici, je reakcí na prùmìt tíhové síly do smìru kolmého k naklonìné rovinì.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Na krabici pùsobí celkem tøi síly: dvì z nich jsou k naklonìné rovinì kolmé a ruší se, tøetí je s naklonìnou rovinou rovnobìžná.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Tlaková síla naklonìné roviny má svislý smìr, ale menší velikost než tíhová síla. Krabice proto klesá se zrychlením.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pøi vhodném sklonu naklonìné roviny je výslednice sil pùsobících na krabici nulová. Krabice pak klesá s konstantní rychlostí.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Zemì pùsobí na krabici dvìma silami: jedna je s naklonìnou rovinou rovnobìžná, druhá je k naklonìné rovinì kolmá a deformuje ji.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Zrychlení krabice má smìr naklonìné roviny, proto je tlaková síla naklonìné roviny stejnì velká jako prùmìt tíhové síly do smìru kolmého k naklonìné rovinì.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Prùmìt zrychlení krabice do svislého smìru je nulový, proto se svislý prùmìt tlakové síly naklonìné roviny ruší s tíhovou silou.</td>
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