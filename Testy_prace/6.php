<strong>Z následujících tvrzení vyberte právě ta, která jsou správná. </strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">Síly odporu prostředí obecně nejsou konzervativní. Výjimku tvoří pouze případy, kdy velikost odporové síly nezávisí na velikosti rychlosti částice.                                                                                  
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Tíhová síla $\vec{F_G} = m\vec{g}$  působící na částici o hmotnosti m je konstantní, a  je tedy konzervativní.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pružná síla $\vec{F_p} = -konst x$, jíž působí ideální pružina na částici, není konzervativní, protože má proměnnou velikost.                                       
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Gravitační pole buzené hmotnou částicí v klidu je konzervativní pouze v tak malé oblasti prostoru, kde je možné považovat jej za homogenní.                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Elektrostatické pole buzené bodovým nábojem v klidu je konzervativní, a proto koná elektrostatická síla nulovou práci pouze v případě, že trajektorie nabité částice je uzavřená.                                                                                                                                                               
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Práce dynamické třecí síly působící mezi dvěma tělesy je vždy záporná, a proto je tato síla nekonzervativní.                                                                                                                                                               
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Pokud je síla $\vec{F}$ nekonzervativní, je její práce při přesunu částice po libovolné uzavřené křivce nenulová.                                                                                                                                                               
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Pokud je síla  $\vec{F}$ konzervativní, je její práce při přesunu částice mezi dvěma body prostoru nejmenší po přímé spojnici mezi těmito body.                                                                                                                                                               
</td>
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
		    document.form.otazka4.checked==false && 
		    document.form.otazka4.checked==false && 
		    document.form.otazka4.checked==false && 
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==false)


			window.open("Spatne/prace/spravne4.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/prace/spatne6.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>
