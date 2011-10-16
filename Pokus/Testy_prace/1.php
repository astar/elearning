<div id="otazka"><strong>Èlovìk pøemisuje knihu v homogenním tíhovém poli Zemì po rùznıch trajektoriích. Pøedpokládáme, e kromì nìj a Zemì na knihu ádné další objekty nepùsobí. Z následujících tvrzení vyberte právì to, které je správné.
</strong></div>

<p class="odp">Obtínost: <b>0,5 bodu</b>. Doporuènı èas na vyøešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 150;

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
<td width="400px" class="test2">Èlovìk pøemístí knihu rovnomìrnì pøímoèaøe ve vodorovné rovinì. Síla, jí na knihu pùsobí, je nulová, a proto nekoná práci.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Èlovìk pøemístí knihu rovnomìrnì zrychlenì svisle vzhùru. Síla, jí na knihu pùsobí, pøekonává tíhovou sílu, a proto vykoná práci, která je rovna zmìnì potenciální energie knihy.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Èlovìk pøemístí knihu rovnomìrnì køivoèaøe ve vodorovné rovinì. Síla, jí na knihu pùsobí, nekoná  práci, nebo  zmìna kinetické energie knihy je nulová.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Èlovìk pøemístí knihu tak, e její poèáteèní a koncová poloha je stejná. Síla, jí na knihu pùsobí, vykoná nulovou práci, nebo vektor posunutí knihy je nulovı.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Èlovìk pøemístí knihu rovnomìrnì pøímoèaøe svisle dolù. Síla, jí na knihu pùsobí, odpovídá její tíze, a proto vykoná nezápornou práci.
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
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==false)


			window.open("Spatne/prace/spravne1.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/prace/spatne1.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>