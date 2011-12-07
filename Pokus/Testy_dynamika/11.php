<div id="otazka"><strong>Na vlákně zanedbatelné hmotnosti a neproměnné délky je zavěšena malá kulička. Napnuté vlákno i s kuličkou vychýlíme o úhel <i>&theta;</i><sub>0</sub> z rovnovážné polohy a uvolníme (matematické kyvadlo). Pohyb kuličky sledujeme v inerciální vztažné soustavě spojené se Zemí. Předpokládáme, že odpor prostředí je zanedbatelný. Vyberte právě ta tvrzení, která jsou správná.</strong></div>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Při průchodu rovnovážnou polohou je výslednice sil působících na kuličku nulová.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V průběhu pohybu kyvadla je tahová síla vlákna silou dostředivou, která udílí kuličce odpovídající normálové zrychlení.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Při průchodu rovnovážnou polohou působí na kuličku tíhová síla, tahová síla vlákna a odstředivá síla.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V bodě obratu nabývá tahová síla vlákna své nejmenší velikosti. Kulička je tak ve stavu beztíže.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V obecné poloze (tj. pro úhlovou výchylku <i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je výslednice sil působících na kuličku vodorovná a vrací tak kuličku zpět do rovnovážné polohy.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Tahová síla vlákna je v každém okamžiku stejně velká jako průmět tíhové síly do směru vlákna.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Kulička může kmitat ve svislé rovině pouze pro maximální úhlové výchylky <i>&theta;</i><sub>0</sub> &le; 5°.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Při průchodu kuličky rovnovážnou polohou je tahová síla vlákna větší než tíhová síla.</td>
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
		    document.form.otazka5.checked==false && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==true)


			window.open("Spatne/dynamika/spravne11.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne11.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>