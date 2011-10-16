<div id="otazka"><strong>Na vláknì zanedbatelné hmotnosti a nepromìnné délky je zavìšena malá kulièka. Napnuté vlákno i s kulièkou vychılíme o úhel <i>&theta;</i><sub>0</sub> z nejniší polohy a udìlíme kulièce takovou rychlost, e se pohybuje rovnomìrnì po krunici ve vodorovné rovinì (kónické kyvadlo). Pohyb kulièky sledujeme v inerciální vztané soustavì spojené se Zemí. Pøedpokládáme, e odpor prostøedí je zanedbatelnı. Vyberte právì to tvrzení, které NENÍ správné.</strong></div>

<p class="odp">Obtínost: <b>1 bod</b>. Doporuènı èas na vyøešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Kulièka se pohybuje rovnomìrnì po krunici, proto na ni mimo jiné pùsobí dostøedivá síla. Reakcí na tuto sílu je síla odstøedivá.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Popsanı pohyb nelze uskuteènit pøi volbì <i>&theta;</i><sub>0</sub> &ge; 90°, nebo sloením tíhové síly a tahové síly vlákna by nebyla poadovaná dostøedivá síla.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Svislı prùmìt tahové síly vlákna je stejnì velkı jako tíhová síla pùsobící na kulièku, protoe rychlost kulièky stále leí v tée vodorovné rovinì.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Dostøedivé zrychlení kulièky je urèeno vodorovnım prùmìtem tahové síly vlákna, nebo  všechny další síly pùsobící na kulièku mají svislı smìr. Teèné zrychlení kulièky je nulové.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost vıslednice sil pùsobících na kulièku je závislá na volbì úhlu <i>&theta;</i><sub>0</sub>, nebo èím vìtší je tento úhel, tím vìtší je tahová síla vlákna i její vodorovnı prùmìt. Ostatní síly pùsobící na kulièku jsou toti konstantní.</td>
</tr>

</table>
<br>

	<input type="button" value="Vyhodnotit" onClick="vyhodnoceni(); zast_odp()">
</form>
<script>
	function vyhodnoceni(){

		if (document.form.otazka1.checked==true &&
	            document.form.otazka2.checked==false && 	
		    document.form.otazka3.checked==false && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==false)


			window.open("Spatne/dynamika/spravne15.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne15.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>