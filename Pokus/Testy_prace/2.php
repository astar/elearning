<div id="otazka"><strong>Lyžař sjíždí z kopce za úplného bezvětří tak, že se neodráží holemi ani nebruslí. Ve výšce <i>h</i><sub>1</sub> nad úpatím je velikost jeho rychlosti <i>v</i><sub>1</sub>, ve výšce <i>h</i><sub>2</sub> < <i>h</i><sub>1</sub> je velikost jeho  rychlosti <i>v</i><sub>2</sub>. Z následujících tvrzení vyberte právě ta, která jsou NESPRÁVNÁ.
</strong></div>

<p class="odp">Obtížnost: <b>1,5 bodu</b>. Doporučený čas na vyřešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Práci odporových sil nelze určit, neboť neznáme tvar trajektorie lyžaře.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Práci odporových sil nelze určit, neboť neznáme koeficient dynamického tření mezi sněhem a lyžemi.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Práci tíhové síly nelze určit, neboť nevíme, jaká je trajektorie lyžaře.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Práci tíhové síly nelze určit, neboť nevíme, kde je zvolena hladina nulové tíhové potenciální energie.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Práce odporových sil je záporná, neboť velikost rychlosti lyžaře klesá.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Práce tíhové síly je nezáporná, neboť tíhová síla svírá s rychlostí lyžaře ostrý úhel.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Změna mechanické energie lyžaře nemůže být kladná, neboť podle předpokladu v zadání je bezvětří, lyžař se neodráží holemi a nebruslí.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Změna mechanické energie lyžaře je ovlivněna způsobem sjezdu, neboť veličina <i>v</i><sub>2</sub> závisí například na tom, zda lyžař dělá obloučky, či nikoli.
</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==true &&
	            document.form.otazka2.checked==true && 	
		    document.form.otazka3.checked==true && 	 	
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==true && 	
		    document.form.otazka6.checked==false && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/prace/spravne2.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/prace/spatne2.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>