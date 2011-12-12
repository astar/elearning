<strong>Na  vodorovné dokonale hladké podložce leží bedna, která je vodorovnou  ideální pružinou připevněna ke svislé stěně. Směrem k bedně je vystřelena střela s počáteční rychlostí, která má bezprostředně před rázem s bednou vodorovný směr. Při přímém středovém rázu střela v bedně uvízne. Dobu rázu považujeme za velmi krátkou, odpor vzduchu zanedbáváme. Z následujících tvrzení je právě jedno správné. Vyberte je. </strong>

<p class="odp">Obtížnost: <b>1 bod</b>. Doporučený čas na vyřešení: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit možnosti a spustit odpočet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

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
<div id="text" style="display:none;">
<form name="form">

<br>
<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Pro ráz střely a bedny platí zákon zachování mechanické energie.                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Hybnost střely před rázem je stejná jako hybnost soustavy “střela+bedna” v kterémkoli okamžiku po rázu.                                                                                                           
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Pro kmity  soustavy “střela+bedna+pružina”, které vzniknou po rázu, platí zákon zachování mechanické energie.                                                                                  
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Celková energie střely před rázem je stejná jako mechanická energie soustavy “střela+bedna+pružina” v kterémkoli okamžiku po rázu.                                                                                                            
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Hybnost těžiště soustavy “střela+bedna” je před rázem i po rázu stejná.                                                                                                                                                               
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
		    document.form.otazka5.checked==false)


			window.open("Spatne/prace/spravne4.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/prace/spatne8.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>
