<strong>Na obrázku je zakreslen graf závislosti <i>x</i>-ové složky zrychlení na èase pro èástici, jejíž <i>x</i>-ová složka rychlosti v okamžiku <i>t</i>=0 je <i>v<sub>x</sub></i>(0) =  1,0 m.s<sup>-1</sup>. Vyberte právì správná tvrzení.</strong>

<p class="odp">Obtížnost: <b>2 body</b>. Doporuèný èas na vyøešení: <b>4 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpoèet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 240;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypršel doporuèený èasový limit.");}

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
<p><center><img src="Obrazky/Testy/obr05.jpg"></img></center></p>
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">V okamžicích <i>t</i>=2 s a <i>t</i>=4 s je <i>x</i>-ová složka rychlosti èástice stejná.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=3 s se mìní znaménko <i>x</i>-ové složky rychlosti èástice.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V intervalu [2,3] s velikost <i>x</i>-ové složky rychlosti èástice klesá.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=6 s je <i>x</i>-ová složka rychlosti stejná jako v okamžiku <i>t</i>=0 s.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V intervalech [0,1] s a [5,6] s jsou <i>x</i>-ové prùmìty rychlosti èástice souhlasnì rovnobìžné.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">V okamžicích <i>t</i>=7 s a <i>t</i>=9 s má <i>x</i>-ový prùmìt rychlosti èástice opaènou orientaci.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=8 s je <i>x</i>-ová složka rychlosti èástice nulová.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=15 s je <i>x</i>-ová složka rychlosti èástice nulová.</td>
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
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==true && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/kinematika/spravne9.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne9.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>