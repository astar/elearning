<div id="otazka"><strong>ebøík, kterı lze povaovat za homogenní tuhé tìleso, se opírá o svislou stìnu a vodorovnou podlahu. Tøení mezi ebøíkem a svislou stìnou lze zanedbat, tøení mezi ebøíkem a podlahou nikoli. ebøík je vzhledem k místnosti v klidu. Z následujících tvrzení je právì jedno správné. Vyberte jej.
</strong></div>

<p class="odp">Obtínost: <b>1,5 bodu</b>. Doporuènı èas na vyøešení: <b>3 minuty</b>.</p>
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
<td width="400px" class="test2">Tlaková síla stìny a tøecí síla podlahy jsou stejnì velké a jejich momenty vzhledem k tìišti ebøíku jsou opaènì orientované.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Podmínku momentové rovnováhy je nutno formulovat vzhledem k tìišti ebøíku. Právì v tìišové soustavì toti platí druhá impulzová vìta, z ní se tato podmínka vyvozuje.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Tlaková síla podlahy a tíhová síla jsou stejnì velké, nebo jiné svislé síly na ebøík nepùsobí.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Úhel, kterı svírá ebøík s rovinou podlahy, mùe bıt libovolnı, nebo momenty dvojic jednotlivıch sil pùsobících na ebøík závisí jen na délce ebøíku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Vektorovı souèet sil pùsobících na ebøík není definován, nebo jednotlivé síly mají rùzná pùsobištì.
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


			window.open("Spatne/castice/spravne1.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/castice/spatne1.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>