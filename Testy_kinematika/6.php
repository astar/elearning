<strong>Automobil se rozjíždí zatáčce tvaru kružnice tak, že velikost jeho rychlosti se mění podle vztahu <i>v(t)=k.t</i>, kde <i>k</i> je nenulová konstanta a <i>t</i> &isin; [0,5] s. Automobil považujte za hmotný bod. Z následujících tvrzení je právě jedno správné. Vyberte jej.</strong>

<p class="odp">Obtížnost: <b>0,5 bod</b>. Doporučný čas na vyřešení: <b>2 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 120;

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
<td width="400px" class="test2">V okamžiku <i>t</i>=0 má automobil nulovou rychlost, proto má i nulové zrychlení.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V intervalu (0,5) s je automobil urychlován, proto je jeho rychlost souhlasně rovnoběžná se zrychlením.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V intervalu (0, 5) s roste rychlost automobilu; z toho je zřejmé, že roste i jeho zrychlení.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V okamžiku <i>t</i>=0 je normálové zrychlení automobilu nulové, protože trajektorie není zakřivena.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V intervalu (0,5) s se automobil pohybuje nerovnoměrně a křivočaře, proto jeho rychlost není tečná k trajektorii.</td>
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


			window.open("Spatne/kinematika/spravne6.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne6.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>