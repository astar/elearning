<strong>Plochý železniční vůz o hmotnosti M se pohybuje po přímých vodorovných kolejích rychlostí . Tření mezi koly a kolejemi je zanedbatelné. Na vozíku stojí člověk o hmotnosti m. V jistém okamžiku se člověk vzhledem k vozíku proti směru jeho pohybu rozběhne, dosáhne vůči němu rychlosti  a pak se opět zastaví. Odpor vzduchu je zanedbatelný. Z následujících tvrzení je právě jedno správné. Vyberte je. </strong>

<p class="odp">Obtížnost: <b>0,5 bodu</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">Poté, co se člověk vzhledem k vozíku rozběhne, se rychlost těžiště soustavy  „člověk+vozík“ zvětší.                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Když se člověk  rozbíhá, rychlost vozíku vzhledem k Zemi se zvětšuje, protože na něj člověk působí silami stejně orientovanými, jako je rychlost .                                       
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Poté, co se člověk vzhledem k vozíku rozběhne, se velikost rychlosti člověka vzhledem k Zemi zvětší.                                                                                  
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Poté, co se člověk vzhledem k vozíku opět zastaví, se vozík bude vzhledem k Zemi pohybovat jinou rychlostí, než byla původní rychlost , neboť vozík byl rozběhem člověka urychlen.                                                                                                          
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V časovém rozmezí, kdy člověk vzhledem k vozíku běží, je rychlost těžiště soustavy 
      “člověk+vozík” nulová, neboť rychlosti vozíku a člověka jsou opačné.                                                                                                                                                               
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
		    document.form.otazka5.checked==false)


			window.open("Spatne/prace/spravne4.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/prace/spatne9.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>
