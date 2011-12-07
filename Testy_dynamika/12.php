<strong>Na vlákně zanedbatelné hmotnosti a neproměnné délky je zavěšena malá kulička. Napnuté vlákno i s kuličkou vychýlíme o úhel <i>&theta;</i><sub>0</sub> z rovnovážné polohy a uvolníme (matematické kyvadlo). Pohyb kuličky sledujeme v inerciální vztažné soustavě spojené se Zemí. Předpokládáme, že odpor prostředí je zanedbatelný. Z následujících tvrzení je právě jedno správné. Vyberte jej.
</strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>3,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 210;

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
<td width="400px" class="test2">Při průchodu rovnovážnou polohou je výslednice sil působících na kuličku nulová, neboť rovnovážnou polohou prochází kulička setrvačností.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V bodech obratu je výslednice sil působících na kuličku tečná k trajektorii, neboť kulička má v bodech obratu nulovou rychlost.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V obecné poloze (<i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je vlákno napínáno větší silou než v bodech obratu, protože na kuličku navíc působí odstředivá síla.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V obecné poloze (<i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je výslednice sil působících na kuličku tečná k trajektorii, protože kulička koná harmonický kmitavý pohyb.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Při průchodu kuličky rovnovážnou polohou je vlákno napínáno stejnou silou, jako když kulička v rovnovážné poloze v klidu visí, neboť silové zákony určující velikosti jednotlivých sil nesouvisí s pohybovým stavem objektu.</td>
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


			window.open("Spatne/dynamika/spravne12.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne12.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>