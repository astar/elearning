<div id="otazka"><strong>
V ideálním plynu probíhá cyklus složený z těchto vratných dějů:

<ul>
<li>1 &rarr; 2 … izobarická expanze, </li>
<li>2 &rarr; 3 … izotermická expanze,</li>
<li>3 &rarr; 4 … adiabatická expanze,</li>
<li>4 &rarr; 5 … izobarická komprese,</li>
<li>5 &rarr; 1 … izochorický děj.</li>
</ul>

Teploty ve stavech 1 až 5 jsou <i>T</i><sub>1</sub>, <i>T</i><sub>2</sub>, <i>T</i><sub>3</sub>, 
<i>T</i><sub>4</sub>, <i>T</i><sub>5</sub>, objem ve stavu 1 je <i>V</i><sub>1</sub>. 
Z následujících tvrzení vyberte právě ta, která jsou pro danou situaci správná.
</strong></div>

<p class="odp">Obtížnost: <b>2 body</b>. Doporučný čas na vyřešení: <b>5 minut</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 300;

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
  z+=m+" min "+s+" s";
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
<td width="400px" class="test2">Zadání souboru hodnot <i>T</i><sub>1</sub>, <i>T</i><sub>2</sub>, <i>T</i><sub>3</sub>, <i>T</i><sub>4</sub>, <i>T</i><sub>5</sub>, <i>V</i><sub>1</sub> je dostačující k tomu, abychom určili tlak a objem plynu ve všech stavech.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Teplota <i>T</i><sub>5</sub> nemusí být nejnižší teplotou v celém cyklu.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Je možné, aby teploty <i>T</i><sub>1</sub> a <i>T</i><sub>4</sub> byly stejné.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Teplota <i>T</i><sub>2</sub> je vyšší než teplota <i>T</i><sub>4</sub>.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Při ději 1 &rarr; 2 přijal plyn více tepla, než odevzdal při ději 4 &rarr; 5.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Při ději 5 &rarr; 1 plyn odevzdává teplo, takže jeho vnitřní energie na úkor toho roste.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Teplo, které plyn přijímá, je dáno součinem jeho teplené kapacity a rozdílu teplot; při ději 2 &rarr; 3 se nemění teplota plynu, a proto je teplo přijaté při tomto ději nulové.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Změna vnitřní energie plynu při jednom cyklu je nulová.
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
		    document.form.otazka3.checked==true && 	 	
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==false && 	 	
		    document.form.otazka6.checked==false &&
		    document.form.otazka7.checked==false &&
		    document.form.otazka8.checked==true)


			window.open("Spatne/termodynamika/spravne2.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/termodynamika/spatne2.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>