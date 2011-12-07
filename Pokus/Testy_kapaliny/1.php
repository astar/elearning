<div id="otazka"><strong>Z následujících tvrzení vyberte právě ta, která jsou správná.
</strong></div>

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
<td width="400px" class="test2">Čím hlouběji je těleso v kapalině zcela ponořeno, tím větší hydrostatická vztlaková síla na ně působí.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">O tom, zda těleso zcela ponořené do kapaliny a následně uvolněné bude klesat, stoupat, nebo se vznášet, rozhoduje pouze jeho hustota.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Tlaková síla, jíž působí kapalina na dno nádoby, je určena hustotou kapaliny, vzdáleností dna od volného povrchu, plochou dna a tvarem nádoby.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Dvě nemísící se kapaliny nalité do U-trubice mohou mít hladiny v různé výšce.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Rozhraní dvou nemísících se kapalin nalitých do U-trubice bude v nejnižším bodě trubice.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Hydrostatická vztlaková síla závisí nejen na tom, jaká část tělesa je v kapalině ponořena, ale rovněž na hustotě tělesa.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Ve spojených nádobách je nejvyšší tlak v části, která má nejmenší průřez.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Hydrostatická vztlaková síla působící na ponořené těleso nezávisí na atmosférickém tlaku <i>p</i><sub>A</sub>, zatímco tlak v kapalině ano.
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
		    document.form.otazka3.checked==false && 	 	
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==false && 	 	
		    document.form.otazka6.checked==false &&
		    document.form.otazka7.checked==false &&
		    document.form.otazka8.checked==true)


			window.open("Spatne/kapaliny/spravne1.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kapaliny/spatne1.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>