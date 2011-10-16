<strong>Z tého místa ve vıšce <i>h</i> &ne; 0 nad povrchem Zemì byly souèasnì vystøeleny dva projektily, první vodorovnì a druhı svisle vzhùru. Pøedpokládáme, e projektily lze povaovat za hmotné body, které se pohybují v homogenním tíhovém poli Zemì, a odpor vzduchu je zanedbatelnı. Vyberte právì to tvrzení, které je pro èasové rozmezí, kdy se oba projektily vùèi Zemi pohybují, správné.</strong>

<p class="odp">Obtínost: <b>1 bod</b>. Doporuènı èas na vyøešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Druhı projektil se vùèi prvnímu pohybuje nejprve zpomalenì, nebo jeho poèáteèní rychlost je nesouhlasnì rovnobìná s tíhovım zrychlením.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">První projektil se vùèi druhému pohybuje rovnomìrnì, nebo projektily mají vùèi Zemi stejné zrychlení.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Druhı projektil se vùèi prvnímu pohybuje po parabole, nebo smìry poèáteèních rychlostí projektilù jsou rùzné.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">O vzájemném pohybu projektilù nelze èinit ádné závìry, nebo není známo, jak jsou konkrétnì zvoleny vztané soustavy s nimi spojené.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Vzdálenost projektilù roste kvadraticky s èasem, nebo oba projektily se vùèi Zemi pohybují rovnomìrnì zrychlenì.</td>
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


			window.open("Spatne/kinematika/spravne11.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne11.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>