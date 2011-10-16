<strong>
V ide�ln�m plynu prob�h� cyklus slo�en� z t�chto vratn�ch d�j�:

<ul>
<li>1 &rarr; 2 � izobarick� expanze, </li>
<li>2 &rarr; 3 � izotermick� expanze,</li>
<li>3 &rarr; 4 � adiabatick� expanze,</li>
<li>4 &rarr; 5 � izobarick� komprese,</li>
<li>5 &rarr; 1 � izochorick� d�j.</li>
</ul>

Teploty ve stavech 1 a� 5 jsou <i>T</i><sub>1</sub>, <i>T</i><sub>2</sub>, <i>T</i><sub>3</sub>, 
<i>T</i><sub>4</sub>, <i>T</i><sub>5</sub>, objem ve stavu 1 je <i>V</i><sub>1</sub>. 
Z n�sleduj�c�ch tvrzen� vyberte pr�v� ta, kter� jsou pro danou situaci spr�vn�.
</strong>

<p class="odp">Obt�nost: <b>2 body</b>. Doporu�n� �as na vy�e�en�: <b>5 minut</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 300;

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
  z+=m+" min "+s+" s";
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
<td width="400px" class="test2">Zad�n� souboru hodnot <i>T</i><sub>1</sub>, <i>T</i><sub>2</sub>, <i>T</i><sub>3</sub>, <i>T</i><sub>4</sub>, <i>T</i><sub>5</sub>, <i>V</i><sub>1</sub> je dosta�uj�c� k tomu, abychom ur�ili tlak a objem plynu ve v�ech stavech.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Teplota <i>T</i><sub>5</sub> nemus� b�t nejni��� teplotou v cel�m cyklu.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Je mo�n�, aby teploty <i>T</i><sub>1</sub> a <i>T</i><sub>4</sub> byly stejn�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Teplota <i>T</i><sub>2</sub> je vy��� ne� teplota <i>T</i><sub>4</sub>.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">P�i d�ji 1 &rarr; 2 p�ijal plyn v�ce tepla, ne� odevzdal p�i d�ji 4 &rarr; 5.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">P�i d�ji 5 &rarr; 1 plyn odevzd�v� teplo, tak�e jeho vnit�n� energie na �kor toho roste.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Teplo, kter� plyn p�ij�m�, je d�no sou�inem jeho teplen� kapacity a rozd�lu teplot; p�i d�ji 2 &rarr; 3 se nem�n� teplota plynu, a proto je teplo p�ijat� p�i tomto d�ji nulov�.
</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Zm�na vnit�n� energie plynu p�i jednom cyklu je nulov�.
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
		    document.form.otazka4.checked==true && 
		    document.form.otazka5.checked==false && 	 	
		    document.form.otazka6.checked==false &&
		    document.form.otazka7.checked==false &&
		    document.form.otazka8.checked==true)


			window.open("Spatne/termodynamika/spravne2.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/termodynamika/spatne2.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>