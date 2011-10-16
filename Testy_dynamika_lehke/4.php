<strong>Na vodorovn�m stole le�� v klidu kostka o hmotnosti <i>m</i>. (Soustava je um�st�na v homogenn�m t�hov�m poli Zem�, t�hov� zrychlen� je <i><b>g</b></i>.) Z n�sleduj�c�ch tvrzen� je pr�v� jedno spr�vn�. Vyberte jej.
</strong>

<p class="odp">Obt�nost: <b>1 bod</b>. Doporu�n� �as na vy�e�en�: <b>2 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 120;

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
<td width="400px" class="test2">Na kostku p�sob� t�hov� s�la <i>m<b>g</b></i> a tlakov� s�la stolu <i><b>T</b></i>. Tyto s�ly p�edstavuj� akci a reakci.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Reakc� na t�hovou s�lu <i>m<b>g</b></i> ve smyslu t�et�ho Newtonova z�kona je s�la -<i>m<b>g</b></i>, j� p�sob� st�l na kostku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Reakc� na tlakovou s�lu <i><b>T</b></i>, j� p�sob� st�l na kostku, je ve smyslu t�et�ho Newtonova z�kona tlakov� s�la, j� p�sob� st�l na podlo�ku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">S�ly <i>m<b>g</b></i> a <i><b>T</b></i> jsou stejn� velk� a opa�n� orientovan�, nejde o akci a reakci ve smyslu t�et�ho Newtonova z�kona.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">V p��pad� sil <i>m<b>g</b></i> a <i><b>T</b></i> nejde o akci a reakci, av�ak s�ly jsou stejn� povahy � v obou p��padech jde o gravita�n� interakci.
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