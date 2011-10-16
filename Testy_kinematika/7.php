<strong>Na obrázku je zakreslen graf závislosti vzdálenosti <i>z</i> svisle vrženého míèku od vodorovné roviny na èase <i>t</i>. Pøedpokládáme, že míèek lze považovat za hmotný bod, který se pohybuje v homogenním tíhovém poli Zemì, a odpor vzduchu je zanedbatelný. Vyberte právì správná tvrzení.</strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporuèný èas na vyøešení: <b>3,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpoèet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 210;

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
<p><center><img src="Obrazky/Testy/obr03.jpg"></img></center></p>
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">V okamžiku <i>t</i><sub>A</sub> má míèek vìtší rychlost než v okamžiku <i>t</i><sub>D</sub>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V okamžiku <i>t</i><sub>B</sub> je rychlost míèku nulová.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V okamžiku <i>t</i><sub>D</sub> má míèek stejnou rychlost jako v okamžiku <i>t</i>=0.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V intervalu [<i>t</i><sub>A</sub>, <i>t</i><sub>C</sub>] je prùmìrná rychlost míèku nulová.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V intervalu [0, <i>t</i><sub>A</sub>] urazí míèek stejnou dráhu jako v intervalu [0, <i>t</i><sub>C</sub>].</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">V okamžiku <i>t</i><sub>B</sub> je zrychlení míèku nulové.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">V intervalu [<i>t</i><sub>A</sub>, <i>t</i><sub>C</sub>] je prùmìrné zrychlení míèku nulové.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=0 svírá rychlost míèku s osou z nenulový úhel.</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==false &&
	            document.form.otazka2.checked==true && 	
		    document.form.otazka3.checked==false && 	 	
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==false && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/kinematika/spravne7.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne7.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>