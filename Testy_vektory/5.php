<strong>Na obrázku je znázorněna síla <b><i>F</i></b> ležící v rovině <i>Oxy</i>. Z následujících tvrzení je právě jedno NESPRÁVNÉ. Vyberte jej.</strong>

<p class="odp">Obtížnost: <b>0,5 bodu</b>. Doporučný čas na vyřešení: <b>1,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 90;

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
<p><center><img src="Obrazky/Testy/obr01.jpg"></img></center></p>
<div id="text" style="display:none;">
<form name="form">

<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2"><i>X</i>-ová složka síly <b><i>F</i></b> je rovna <i>F</i>cos<i>&alpha;</i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2"><i>Y</i>-ová složka síly <b><i>F</i></b> je rovna <i>F</i>sin<i>&alpha;</i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2"><i>Y</i>-ová složka síly <b><i>F</i></b> je rovna <i>F</i>sin<i>&beta;</i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2"><i>X</i>-ová složka síly <b><i>F</i></b> je rovna <i>F</i>cos<i>&beta;</i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2"><i>Y</i>-ová složka síly <b><i>F</i></b> je rovna <i>F</i>cos(90° - <i>&beta;)</i>.</td>
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

			window.open("Spatne/vektory/spravne5.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/vektory/spatne5.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>