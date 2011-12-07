<div id="otazka"><strong>Malé kuličce zavěšené na napnutém vlákně zanedbatelné hmotnosti a neproměnné délky udělíme takovou rychlost, že obíhá po kružnici ležící ve svislé rovině. Předpokládáme, že odpor prostředí je zanedbatelný. Z následujících tvrzení je právě jedno správné. Vyberte jej.</strong></div>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

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
<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">V nejvyšším bodě trajektorie může být velikost rychlosti kuličky libovolná, avšak nenulová, jinak by se totiž kulička v tomto bodě zastavila.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V okamžiku, kdy má vlákno vodorovný směr, je tahová síla vlákna nulová, neboť nulový je i průmět tíhové síly do směru vlákna.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V nejnižším a nejvyšším bodě trajektorie je zrychlení kuličky stejně velké, neboť stejně velké jsou i síly, které na kuličku v těchto bodech působí.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V nejvyšším bodě trajektorie může napětí ve vlákně vymizet, jelikož normálové zrychlení může kuličce udílet pouze tíhová síla.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Situaci popsanou v zadání není možné uskutečnit, neboť výslednice sil působících na kuličku směřuje v každém bodě trajektorie do nejnižší polohy. Kulička proto může ve svislé rovině pouze kmitat.</td>
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
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==false)


			window.open("Spatne/dynamika/spravne13.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne13.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>