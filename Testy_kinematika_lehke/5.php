<strong>Míček koná vodorovný vrh v homogenním tíhovém poli Země. Předpokládáme, že míček lze považovat za hmotný bod, který se pohybuje v homogenním tíhovém poli Země, a odpor vzduchu je zanedbatelný. Vyberte právě správná tvrzení.
</strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>2 minuty</b>.</p>
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
<td width="400px" class="test2">Zrychlení míčku je konstantní, a proto je poloměr křivosti trajektorie ve všech okamžicích stejný.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Míček se pohybuje se zrychlením, a proto se mění jeho vodorovná i svislá složka rychlosti.                                                                                
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">V počátečním okamžiku je zrychlení míčku nulové, proto je jeho rychlost tečná k trajektorii.                                       
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Velikost rychlosti míčku neroste s časem lineárně, neboť velikost tečného zrychlení míčku není během pohybu konstantní.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Tečné zrychlení míčku je v každém okamžiku nenulové, a proto velikost rychlosti míčku během pohybu narůstá.                                                                                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Míček se zpočátku pohybuje rovnoměrně, neboť v  okamžiku t=0 je jeho rychlost kolmá ke zrychlení.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">V počátečním okamžiku je normálové zrychlení míčku nenulové, a proto je trajektorie míčku po celou dobu jeho pohybu zakřivená.                                                                                                                                                               
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
		    document.form.otazka7.checked==false)


			window.open("Spatne/kinematika_lehke/spravne5.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika_lehke/spatne5.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>
