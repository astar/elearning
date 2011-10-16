<div id="otazka"><strong>Lyaø sjídí z kopce za úplného bezvìtøí tak, e se neodráí holemi ani nebruslí. Ve vıšce <i>h</i><sub>1</sub> nad úpatím je velikost jeho rychlosti <i>v</i><sub>1</sub>, ve vıšce <i>h</i><sub>2</sub> < <i>h</i><sub>1</sub> je velikost jeho  rychlosti <i>v</i><sub>2</sub>. Z následujících tvrzení vyberte právì ta, která jsou NESPRÁVNÁ.
</strong></div>

<p class="odp">Obtínost: <b>1,5 bodu</b>. Doporuènı èas na vyøešení: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

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
<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Práci odporovıch sil nelze urèit, nebo neznáme tvar trajektorie lyaøe.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Práci odporovıch sil nelze urèit, nebo neznáme koeficient dynamického tøení mezi snìhem a lyemi.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Práci tíhové síly nelze urèit, nebo nevíme, jaká je trajektorie lyaøe.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Práci tíhové síly nelze urèit, nebo nevíme, kde je zvolena hladina nulové tíhové potenciální energie.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Práce odporovıch sil je záporná, nebo velikost rychlosti lyaøe klesá.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Práce tíhové síly je nezáporná, nebo tíhová síla svírá s rychlostí lyaøe ostrı úhel.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Zmìna mechanické energie lyaøe nemùe bıt kladná, nebo podle pøedpokladu v zadání je bezvìtøí, lyaø se neodráí holemi a nebruslí.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Zmìna mechanické energie lyaøe je ovlivnìna zpùsobem sjezdu, nebo velièina <i>v</i><sub>2</sub> závisí napøíklad na tom, zda lyaø dìlá oblouèky, èi nikoli.
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