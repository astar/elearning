<strong>Malı míèek (hmotnı bod) koná šikmı vrh v homogenním tíhovém poli Zemì. Odpor prostøedí je zanedbatelnı. Poèáteèní rychlost míèku leí v rovinì <i>Oxy</i>, má velikost <i>v</i><sub>0</sub> a s vodorovnou osou <i>x</i> svírá úhel &alpha; < 90°. Osa <i>y</i> je svislá a míøí vzhùru. Z následujících tvrzení vyberte právì ta, která jsou správná.
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
<td width="400px" class="test2">Obì sloky rychlosti, <i>x</i>-ová i <i>y</i>-ová, pøed dosaením nejvyššího bodu klesají, poté rostou.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Ve vrcholu parabolické trajektorie dosahuje míèek nulové rychlosti.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Ve vrcholu parabolické trajektorie dosahuje míèek minimální rychlosti, nebo zrychlení je v tomto okamiku nulové.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Ve vrcholu parabolické trajektorie má míèek nenulové normálové a nulové teèné zrychlení, take velikost celkového zrychlení je zde menší ne v ostatních bodech trajektorie.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V kadém bodì trajektorie je souèet teèného a normálového zrychlení míèku roven tíhovému zrychlení.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Vıška vıstupu míèku dosahuje pro danou velikost rychlosti maxima pro <i>&alpha;</i> = 90°.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Polomìr køivosti <i>R</i> trajektorie v jejím nejvyšším bodì lze urèit ze vztahu <i>g</i> = <i>v</i><sub>0</sub><sup>2</sup>/<i>R</i>, nebo <i>g</i> je velikost normálového (dostøedivého) zrychlení v tomto bodì.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Velikost normálového zrychlení míèku bezprostøednì po vypuštìní je <i>&alpha;<sub>n</sub></i> = <i>g</i>cos<i>&alpha;</i>.
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
		    document.form.otazka3.checked==false && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==true && 	 	
		    document.form.otazka6.checked==true && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==true)


			window.open("Spatne/kinematika_lehke/spravne3.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika_lehke/spatne3.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>