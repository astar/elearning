<strong>Na obrázku jsou znázornìny síly <b><i>F</i><sub>1</sub></b> a <b><i>F<sub>2</i></sub></b> leící v rovinì <i>Oxy</i>. Z následujících tvrzení je právì jedno správné. Vyberte jej.</strong>

<p class="odp">Obtínost: <b>0,5 bodu</b>. Doporuènı èas na vyøešení: <b>2 minuty</b>.<br>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit monosti a spustit odpoèet" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 120;

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
<p><center><img src="Obrazky/Testy/obr02.jpg"></img></center></p>
<div id="text" style="display:none;">
<form name="form">

<table>
<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">Prùmìt vıslednice sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b> do osy <i>x</i> je s osou <i>x</i> nesouhlasnì rovnobìnı, nebo <i>&alpha;</i><sub>1</sub> > <i>&alpha;</i><sub>2</sub>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2"><i>Z</i>-ovou sloku vıslednice sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b> nelze urèit, nebo nejsou zadány <i>z</i>-ové sloky sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b>.</td>
</tr>

<tr>	
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2"><i>X</i>-ová sloka vıslednice sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b> je nenulová, nebo <i>x</i>-ové sloky obou sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b> jsou nenulové.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Prùmìt vıslednice sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b> do osy <i>y</i> je v daném pøípadì s osou <i>y</i> souhlasnì rovnobìnı, nebo je urèen vektorovım souètem <i>y</i>-ovıch prùmìtù sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b>.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2"><i>X</i>-ovou sloku vıslednice sil nelze urèit, nebo obrázkem jsou zadány pouze velikosti sil <b><i>F</i><sub>1</sub></b> a <b><i>F</i><sub>2</sub></b> a úhly <i>&alpha;</i><sub>1</sub>, <i>&alpha;</i><sub>2</sub>, nikoli <i>x</i>-ové sloky jednotlivıch sil.</td>
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

			window.open("Spatne/vektory/spravne6.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/vektory/spatne6.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>