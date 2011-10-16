<div id="otazka"><strong>Na vodorovn�m stole o hmotnosti <i>M</i> le�� v klidu kostka o hmotnosti <i>m</i>. St�l stoj� na vodorovn� podlo�ce. (Soustava je um�st�na v homogenn�m t�hov�m poli Zem�, t�hov� zrychlen� je <i><b>g</b></i>.) Z n�sleduj�c�ch tvrzen� vyberte pr�v� ta, kter� jsou spr�vn�.
</strong></div>

<p class="odp">Obt�nost: <b>2 body</b>. Doporu�n� �as na vy�e�en�: <b>3 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(moznosti); skryt(tlacitko)"></p>

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
<div id="moznosti" style="display:none;">
<form name="form">

<br>
<table>

<script src="ASCIIMathML_moznosti.js"></script>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka1"> (a)</td>
<td width="400px" class="test2">St�l tla�� na podlo�ku t�hovou silou amath (M + m) vec bb g endamath.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">T�hov� s�la amath m vec bb g endamath, j� p�sob� Zem� na kostku, a tlakov� s�la amath vec bb T endamath, j� p�sob� st�l na kostku, jsou stejn� velk�, proto�e jde o akci a reakci ve smyslu t�et�ho Newtonova z�kona.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Tlakov� s�la amath vec bb P endamath, j� p�sob� st�l na podlo�ku, a tlakov� s�la amath -vec bb P endamath, j� p�sob� podlo�ka na st�l, jsou akce a reakce.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Tlakov� s�la amath vec bb T endamath, j� p�sob� st�l na kostku, a tlakov� s�la amath -vec bb T endamath, j� p�sob� kostka na st�l, jsou stejn� velk� a opa�n� orientovan�, proto�e kostka je v��i stolu v klidu.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">Dvojice sil, kter� p�edstavuj� akci a reakci, jsou mj. tyto: t�hov� s�la amath m vec bb g endamath, j� p�sob� Zem� na kostku, a  s�la amath - m vec bb g endamath, j� p�sob� kostka na Zemi, tlakov� s�la stolu na podlo�ku a tlakov� s�la podlo�ky na st�l, tlakov� s�la kostky na st�l a tlakov� s�la stolu na kostku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Tlakov� s�la podlo�ky na st�l kompenzuje celkovou t�hovou s�lu p�sob�c� na st�l a na kostku.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Tlakovou s�lu amath vec bb T endamath stolu na kostku a tlakovou s�lu amath -vec bb T endamath kostky na st�l nelze konkr�tn� ur�it, proto�e se ve vyj�d�en� v�slednice sil, jimi� okoln� objekty p�sob� na soustavu �st�l+kostka�, neuplatn�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Tlakovou s�lu amath vec bb T endamath stolu na kostku  lze ur�it pouze pomoc� podm�nky, �e st�l se nepohybuje.
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