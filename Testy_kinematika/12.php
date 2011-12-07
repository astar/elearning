<strong>Na letišti v Madridu usnadňuje cestujícím přesun vodorovný pohyblivý chodník, který se vůči letištní hale pohybuje konstantní rychlostí <i><b>v</b></i>. Z následujících tvrzení je právě jedno  NESPRÁVNÉ. Vyberte jej. Odpor vzduchu zanedbáváme.</strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Míček, který se vůči chodníku pohybuje po trajektorii vodorovného vrhu, se po trajektorii vodorovného vrhu musí pohybovat i vůči letištní hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Míček, který se vůči chodníku pohybuje se zrychlením, se s tímtéž zrychlením musí pohybovat i vůči letištní hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Míček, který se vůči chodníku pohybuje po přímce, se po přímce může pohybovat i vůči letištní hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Míček, který se vůči chodníku pohybuje s proměnnou rychlostí, se s proměnnou rychlostí musí pohybovat i vůči letištní hale.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Míček, který se vůči chodníku pohybuje rovnoměrně, se vůči letištní hale rovnoměrně pohybovat nemusí.</td>
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


			window.open("Spatne/kinematika/spravne12.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	    
			window.open("Spatne/kinematika/spatne12.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>