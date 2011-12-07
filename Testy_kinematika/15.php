<strong>Vyberte právě správná tvrzení. </strong>

<p class="odp">Obtížnost: <b>1,5 bod</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Průměrná  rychlost  částice, která se pohybuje s nenulovým zrychlením, nemůže být nulová.                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Při pohybu po kružnici je průměrné zrychlení částice v intervalu, který odpovídá jednomu oběhu, vždy stejné, a to nulové.                                                                                  
</td>
</tr>

<tr> <td width="50px" class="test"><input type="checkbox"
name="otazka3"> (c)</td> 
<td width="400px" class="test2">Průměrná
velikost rychlosti částice v intervalu je určena vztahem $\frac{v(t_1)
+ v(t_2)}{2}$.  
</td> </tr>

<tr> <td width="50px" class="test"><input type="checkbox"
name="otazka4"> (d)</td> 
<td width="400px" class="test2">  Velikost průměrné rychlosti částice musí být nenulová.                                                                                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost průměrné rychlosti nemusí být rovna průměrné velikosti rychlosti.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">K výpočtu průměrného zrychlení postačuje znalost polohového vektoru částice v počátečním a koncovém okamžiku příslušného časového intervalu.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (g)</td>
<td width="400px" class="test2">K výpočtu velikosti průměrné rychlosti postačuje znalost dráhy, kterou částice v příslušném intervalu urazila.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (h)</td>
<td width="400px" class="test2">Za jistých okolností může být průměrná velikost rychlosti částice nezávislá na délce časového intervalu, k němuž se vztahuje. 
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
		    document.form.otazka4.checked==true && 
		    document.form.otazka4.checked==false && 
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==true)


			window.open("Spatne/kinematika/spravne4.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika/spatne11.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>
