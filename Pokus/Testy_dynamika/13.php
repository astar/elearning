<div id="otazka"><strong>Malé kulièce zavìšené na napnutém vláknì zanedbatelné hmotnosti a nepromìnné délky udìlíme takovou rychlost, e obíhá po krunici leící ve svislé rovinì. Pøedpokládáme, e odpor prostøedí je zanedbatelnı. Z následujících tvrzení je právì jedno správné. Vyberte jej.</strong></div>

<p class="odp">Obtínost: <b>1 bod</b>. Doporuènı èas na vyøešení: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">V nejvyšším bodì trajektorie mùe bıt velikost rychlosti kulièky libovolná, avšak nenulová, jinak by se toti kulièka v tomto bodì zastavila.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V okamiku, kdy má vlákno vodorovnı smìr, je tahová síla vlákna nulová, nebo nulovı je i prùmìt tíhové síly do smìru vlákna.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V nejniším a nejvyšším bodì trajektorie je zrychlení kulièky stejnì velké, nebo stejnì velké jsou i síly, které na kulièku v tìchto bodech pùsobí.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V nejvyšším bodì trajektorie mùe napìtí ve vláknì vymizet, jeliko normálové zrychlení mùe kulièce udílet pouze tíhová síla.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Situaci popsanou v zadání není moné uskuteènit, nebo vıslednice sil pùsobících na kulièku smìøuje v kadém bodì trajektorie do nejniší polohy. Kulièka proto mùe ve svislé rovinì pouze kmitat.</td>
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