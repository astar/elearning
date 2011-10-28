<div id="otazka"><strong>Na vlákně zanedbatelné hmotnosti a neproměnné délky je zavěšena malá kulička. Napnuté vlákno i s kuličkou vychýlíme o úhel <i>&theta;</i><sub>0</sub> z nejnižší polohy a udělíme kuličce takovou rychlost, že se pohybuje rovnoměrně po kružnici ve vodorovné rovině (kónické kyvadlo). Pohyb kuličky sledujeme v inerciální vztažné soustavě spojené se Zemí. Předpokládáme, že odpor prostředí je zanedbatelný. Vyberte právě to tvrzení, které NENÍ správné.</strong></div>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučný čas na vyřešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Kulička se pohybuje rovnoměrně po kružnici, proto na ni mimo jiné působí dostředivá síla. Reakcí na tuto sílu je síla odstředivá.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Popsaný pohyb nelze uskutečnit při volbě <i>&theta;</i><sub>0</sub> &ge; 90°, neboť složením tíhové síly a tahové síly vlákna by nebyla požadovaná dostředivá síla.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Svislý průmět tahové síly vlákna je stejně velký jako tíhová síla působící na kuličku, protože rychlost kuličky stále leží v téže vodorovné rovině.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Dostředivé zrychlení kuličky je určeno vodorovným průmětem tahové síly vlákna, neboť  všechny další síly působící na kuličku mají svislý směr. Tečné zrychlení kuličky je nulové.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost výslednice sil působících na kuličku je závislá na volbě úhlu <i>&theta;</i><sub>0</sub>, neboť čím větší je tento úhel, tím větší je tahová síla vlákna i její vodorovný průmět. Ostatní síly působící na kuličku jsou totiž konstantní.</td>
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