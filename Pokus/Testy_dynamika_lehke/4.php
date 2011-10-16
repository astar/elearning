<div id="otazka"><strong>Na vodorovném stole leží v klidu kostka o hmotnosti <i>m</i>. (Soustava je umístìna v homogenním tíhovém poli Zemì, tíhové zrychlení je <i><b>g</b></i>.) Z následujících tvrzení je právì jedno správné. Vyberte jej.
</strong></div>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporuèný èas na vyøešení: <b>2 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpoèet" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

<script>
var c = 120;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypršel doporuèený èasový limit.");}

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
<td width="400px" class="test2">Na kostku pùsobí tíhová síla amath m vec bb g endamath a tlaková síla stolu amath vec bb T endamath. Tyto síly pøedstavují akci a reakci.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Reakcí na tíhovou sílu amath m vec bb g endamath ve smyslu tøetího Newtonova zákona je síla amath -m vec bb g endamath, jíž pùsobí stùl na kostku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Reakcí na tlakovou sílu amath vec bb T endamath, jíž pùsobí stùl na kostku, je ve smyslu tøetího Newtonova zákona tlaková síla, jíž pùsobí stùl na podložku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Síly amath m vec bb g endamath a amath vec bb T endamath jsou stejnì velké a opaènì orientované, nejde o akci a reakci ve smyslu tøetího Newtonova zákona.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V pøípadì sil amath m vec bb g endamath a amath vec bb T endamath nejde o akci a reakci, avšak síly jsou stejné povahy – v obou pøípadech jde o gravitaèní interakci.
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


			window.open("Spatne/dynamika_lehke/spravne4.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika_lehke/spatne4.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>