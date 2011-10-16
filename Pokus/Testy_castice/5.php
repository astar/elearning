<div id="otazka"><strong>Z nejvyššího bodu naklonìné roviny s nenulovım úhlem sklonu souèasnì uvolníme  homogenní tuhou kouli a homogenní tuhı válec. Pøedpokládejme, e osa symetrie válce je vodorovná, obì tìlesa mají stejnou hmotnost a stejnı polomìr, po naklonìné rovinì se valí bez podkluzování a odpor vzduchu je zanedbatelnı. Z následujících tvrzení je právì jedno správné. Vyberte jej.
</strong></div>

<p class="odp">Obtínost: <b>1 bod</b>. Doporuènı èas na vyøešení: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 180;

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
<td width="400px" class="test2">Zrychlení tìištì válce i koule je stejné, nebo prùmìt tíhové síly do smìru naklonìné roviny je pro obì tìlesa tentı.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Rychlost tìištì válce a  koule se liší, nebo tìlesa mají vzhledem k vodorovné ose procházející tìištìm jiné momenty setrvaènosti.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Úhlová zrychlení tìles jsou rùzná, nebo statická tøecí síla naklonìné roviny pùsobí na kouli v jediném bodì, kdeto na válec podél úseèky.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Kinetická energie tìles je rùzná, nebo úhlové rychlosti tìles kolem vodorovné osy procházející tìištìm jsou rùzné.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Velikost rychlosti tìištì válce a koule není moné zjistit, nebo není zadán koeficient statického tøení mezi naklonìnou rovinou a tìlesy.</td>
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