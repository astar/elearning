<strong>Mal� m��ek (hmotn� bod) kon� �ikm� vrh v homogenn�m t�hov�m poli Zem�. Odpor prost�ed� je zanedbateln�. Po��te�n� rychlost m��ku le�� v rovin� <i>Oxy</i>, m� velikost <i>v</i><sub>0</sub> a s vodorovnou osou <i>x</i> sv�r� �hel &alpha; < 90�. Osa <i>y</i> je svisl� a m��� vzh�ru. Z n�sleduj�c�ch tvrzen� vyberte pr�v� ta, kter� jsou spr�vn�.
</strong>

<p class="odp">Obt�nost: <b>2 body</b>. Doporu�n� �as na vy�e�en�: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 180;

function start_odp()
{bezi = true;
odpocet();
o = setInterval("odpocet()", 1000);}

function konec()
{ alert("Vypr�el doporu�en� �asov� limit.");}

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
<td width="400px" class="test2">Ob� slo�ky rychlosti, <i>x</i>-ov� i <i>y</i>-ov�, p�ed dosa�en�m nejvy���ho bodu klesaj�, pot� rostou.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Ve vrcholu parabolick� trajektorie dosahuje m��ek nulov� rychlosti.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Ve vrcholu parabolick� trajektorie dosahuje m��ek minim�ln� rychlosti, nebo� zrychlen� je v tomto okam�iku nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Ve vrcholu parabolick� trajektorie m� m��ek nenulov� norm�lov� a nulov� te�n� zrychlen�, tak�e velikost celkov�ho zrychlen� je zde men�� ne� v ostatn�ch bodech trajektorie.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V ka�d�m bod� trajektorie je sou�et te�n�ho a norm�lov�ho zrychlen� m��ku roven t�hov�mu zrychlen�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">V��ka v�stupu m��ku dosahuje pro danou velikost rychlosti maxima pro <i>&alpha;</i> = 90�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Polom�r k�ivosti <i>R</i> trajektorie v jej�m nejvy���m bod� lze ur�it ze vztahu <i>g</i> = <i>v</i><sub>0</sub><sup>2</sup>/<i>R</i>, nebo� <i>g</i> je velikost norm�lov�ho (dost�ediv�ho) zrychlen� v tomto bod�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Velikost norm�lov�ho zrychlen� m��ku bezprost�edn� po vypu�t�n� je <i>&alpha;<sub>n</sub></i> = <i>g</i>cos<i>&alpha;</i>.
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
		    document.form.otazka4.checked==false && 
		    document.form.otazka5.checked==true && 	 	
		    document.form.otazka6.checked==true && 	 	
		    document.form.otazka7.checked==false && 
		    document.form.otazka8.checked==true)


			window.open("Spatne/kinematika_lehke/spravne3.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/kinematika_lehke/spatne3.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>