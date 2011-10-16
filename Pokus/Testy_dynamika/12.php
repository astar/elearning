<div id="otazka"><strong>Na vláknì zanedbatelné hmotnosti a nepromìnné délky je zavìšena malá kulièka. Napnuté vlákno i s kulièkou vychılíme o úhel <i>&theta;</i><sub>0</sub> z rovnováné polohy a uvolníme (matematické kyvadlo). Pohyb kulièky sledujeme v inerciální vztané soustavì spojené se Zemí. Pøedpokládáme, e odpor prostøedí je zanedbatelnı. Z následujících tvrzení je právì jedno správné. Vyberte jej.
</strong></div>

<p class="odp">Obtínost: <b>1 bod</b>. Doporuènı èas na vyøešení: <b>3,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 210;

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
<td width="400px" class="test2">Pøi prùchodu rovnovánou polohou je vıslednice sil pùsobících na kulièku nulová, nebo rovnovánou polohou prochází kulièka setrvaèností.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V bodech obratu je vıslednice sil pùsobících na kulièku teèná k trajektorii, nebo kulièka má v bodech obratu nulovou rychlost.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V obecné poloze (<i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je vlákno napínáno vìtší silou ne v bodech obratu, protoe na kulièku navíc pùsobí odstøedivá síla.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">V obecné poloze (<i>&theta;</i> &ne; 0, <i>&theta;</i> &ne; &plusmn;<i>&theta;</i><sub>0</sub>) je vıslednice sil pùsobících na kulièku teèná k trajektorii, protoe kulièka koná harmonickı kmitavı pohyb.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pøi prùchodu kulièky rovnovánou polohou je vlákno napínáno stejnou silou, jako kdy kulièka v rovnováné poloze v klidu visí, nebo silové zákony urèující velikosti jednotlivıch sil nesouvisí s pohybovım stavem objektu.</td>
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