<div id="otazka"><strong>Z nejvyššího bodu nakloněné roviny s nenulovým úhlem sklonu současně uvolníme  homogenní tuhou kouli a homogenní tuhý válec. Předpokládejme, že osa symetrie válce je vodorovná, obě tělesa mají stejnou hmotnost a stejný poloměr, po nakloněné rovině se valí bez podkluzování a odpor vzduchu je zanedbatelný. Z následujících tvrzení je právě jedno správné. Vyberte jej.
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
<td width="400px" class="test2">Zrychlení těžiště válce i koule je stejné, neboť průmět tíhové síly do směru nakloněné roviny je pro obě tělesa tentýž.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Rychlost těžiště válce a  koule se liší, neboť tělesa mají vzhledem k vodorovné ose procházející těžištěm jiné momenty setrvačnosti.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Úhlová zrychlení těles jsou různá, neboť statická třecí síla nakloněné roviny působí na kouli v jediném bodě, kdežto na válec podél úsečky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Kinetická energie těles je různá, neboť úhlové rychlosti těles kolem vodorovné osy procházející těžištěm jsou různé.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost rychlosti těžiště válce a koule není možné zjistit, neboť není zadán koeficient statického tření mezi nakloněnou rovinou a tělesy.</td>
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


			window.open("Spatne/castice/spravne5.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/castice/spatne5.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>