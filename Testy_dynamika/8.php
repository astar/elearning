<strong>Vıtah se rozjídí dolù se zrychlením <i><b>A</b></i>. Z následujících tvrzení je právì jedno správné. Vyberte jej.
</strong>

<p class="odp">Obtínost: <b>0,5 bodu</b>. Doporuènı èas na vyøešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Pasaér ve zrychleném vıtahu má stejnou hmotnost jako ve vıtahu v klidu, nebo hmotnost tìlesa nezávisí na volbì vztané soustavy.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Popisujeme-li pohyb tìles, která se nacházející ve zrychleném vıtahu, vzhledem k Zemi (inerciální vztaná soustava), je nutné uváit pùsobení setrvaèné síly, nebo zrychlenı vıtah je neinerciální vztanou soustavou.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Na pasaéra ve zrychleném vıtahu pùsobí menší tíhová síla ne ve vıtahu v klidu, nebo pasaér se vzhledem k Zemi pohybuje se zrychlením <i><b>A</b></i>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Jablko, které pasaér upustí ve zrychleném vıtahu, dopadne na podlahu za stejnou dobu jako ve vıtahu v klidu, nebo zrychlení jablka vzhledem k vıtahu nezávisí na typu pohybu vıtahu.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Pasaér, kterı drí jablko v ruce v klidu vzhledem k vıtahu, na nì pùsobí  menší silou, ne by pùsobil ve vıtahu v klidu, nebo vzhledem k Zemi udílí pasaér jablku zrychlení <i><b>A</b></i>.</td>
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