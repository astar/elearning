<strong>Během tzv. parabolického letu se speciálně upravené dopravní
letadlo po jistou dobu, zpravidla dvaceti sekund, pohybuje po
trajektorii šikmého vrhu v homogenním tíhovém poli
Země. Z následujících tvrzení je pro tuto fázi letu právě jedno
správné. Vyberte je.  </strong>

<p class="odp">Obtížnost: <b>0,5 bodu</b>. Doporučený čas na vyřešení:
<b>1 minuta</b>.</p> <p class="odp"><b><span id="c"></span></b></p> <p
class="odp"><input type="button" id="tlacitko" value="Zobrazit
možnosti a spustit odpočet" onClick="start_odp(); odkryt(text);
skryt(tlacitko)"></p>

<script>
var c = 60;

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
<td width="400px" class="test2">V nejvyšším bodě trajektorie je zrychlení letadla nulové.                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">V nejvyšším bodě trajektorie je rychlost letadla nulová.                                                                                  
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Rychlost letadla svírá se zrychlením stále stejný úhel.                                       
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Zrychlení letadla je konstantní.                                                                                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V průběhu stoupání je pohyb letadla  rovnoměrně zpomalený.
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
		    document.form.otazka5.checked==false)


			window.open("Spatne/kinematika_lehke/spravne8.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika_lehke/spatne8.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>
