<strong>Na vodorovném stole o hmotnosti <i>M</i> leží v klidu kostka o hmotnosti <i>m</i>. Stůl stojí na vodorovné podložce. (Soustava je umístěna v homogenním tíhovém poli Země, tíhové zrychlení je <i><b>g</b></i>.) Z následujících tvrzení vyberte právě ta, která jsou správná.
</strong>

<p class="odp">Obtížnost: <b>2 body</b>. Doporučný čas na vyřešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Stůl tlačí na podložku tíhovou silou (<i>M</i>+<i>m</i>)<i><b>g</b></i>.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Tíhová síla <i>m<b>g</b></i>, jíž působí Země na kostku, a tlaková síla <i><b>T</b></i>, jíž působí stůl na kostku, jsou stejně velké, protože jde o akci a reakci ve smyslu třetího Newtonova zákona.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Tlaková síla <i><b>P</b></i>, jíž působí stůl na podložku, a tlaková síla -<i><b>P</b></i>, jíž působí podložka na stůl, jsou akce a reakce.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Tlaková síla <i><b>T</b></i>, jíž působí stůl na kostku, a tlaková síla -<i><b>T</b></i>, jíž působí kostka na stůl, jsou stejně velké a opačně orientované, protože kostka je vůči stolu v klidu.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Dvojice sil, které představují akci a reakci, jsou mj. tyto: tíhová síla <i>m<b>g</b></i>, jíž působí Země na kostku, a  síla -<i>m<b>g</b></i>, jíž působí kostka na Zemi, tlaková síla stolu na podložku a tlaková síla podložky na stůl, tlaková síla kostky na stůl a tlaková síla stolu na kostku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Tlaková síla podložky na stůl kompenzuje celkovou tíhovou sílu působící na stůl a na kostku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Tlakovou sílu <i><b>T</b></i> stolu na kostku a tlakovou sílu -<i><b>T</b></i> kostky na stůl nelze konkrétně určit, protože se ve vyjádření výslednice sil, jimiž okolní objekty působí na soustavu “stůl+kostka“, neuplatní.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Tlakovou sílu <i><b>T</b></i> stolu na kostku  lze určit pouze pomocí podmínky, že stůl se nepohybuje.
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
		    document.form.otazka3.checked==true && 	 	
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==true &&
		    document.form.otazka6.checked==true && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/dynamika_lehke/spravne5.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika_lehke/spatne5.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>