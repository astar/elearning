<div id="otazka"><strong>Výtah se rozjíždí dolů se zrychlením <i><b>A</b></i>. Z následujících tvrzení je právě jedno správné. Vyberte jej.
</strong></div>

<p class="odp">Obtížnost: <b>0,5 bodu</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
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
<td width="400px" class="test2">Pasažér ve zrychleném výtahu má stejnou hmotnost jako ve výtahu v klidu, neboť hmotnost tělesa nezávisí na volbě vztažné soustavy.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Popisujeme-li pohyb těles, která se nacházející ve zrychleném výtahu, vzhledem k Zemi (inerciální vztažná soustava), je nutné uvážit působení setrvačné síly, neboť zrychlený výtah je neinerciální vztažnou soustavou.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Na pasažéra ve zrychleném výtahu působí menší tíhová síla než ve výtahu v klidu, neboť pasažér se vzhledem k Zemi pohybuje se zrychlením amath vec bb A endamath.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Jablko, které pasažér upustí ve zrychleném výtahu, dopadne na podlahu za stejnou dobu jako ve výtahu v klidu, neboť zrychlení jablka vzhledem k výtahu nezávisí na typu pohybu výtahu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pasažér, který drží jablko v ruce v klidu vzhledem k výtahu, na ně působí  menší silou, než by působil ve výtahu v klidu, neboť vzhledem k Zemi udílí pasažér jablku zrychlení amath vec bb A endamath.</td>
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


			window.open("Spatne/dynamika/spravne8.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne8.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>