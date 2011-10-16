<strong>Na naklon�nou rovinu s �hlem sklonu <i>&alpha;</i> &ne; 0 polo��me krabici a uvoln�me ji. P�edpokl�d�me, �e odpor prost�ed� je zanedbateln�. Vyberte pr�v� ta tvrzen�, kter� jsou spr�vn�.
</strong>

<p class="odp">Obt�nost: <b>1 bod</b>. Doporu�n� �as na vy�e�en�: <b>2,5 minuty</b>.</p>
<p class="odp"><b><span id="c"></span></b></p>
<p class="odp"><input type="button" id="tlacitko" value="Zobrazit mo�nosti a spustit odpo�et" onClick="start_odp(); odkryt(text); skryt(tlacitko)"></p>

<script>
var c = 150;

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
<td width="400px" class="test2">Na krabici p�sob� t�hov� s�la a tlakov� s�la naklon�n� roviny. Jejich v�slednice je rovnob�n� s naklon�nou rovinou.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka2"> (b)</td>
<td width="400px" class="test2">Tlakov� s�la, j� p�sob� naklon�n� rovina na krabici, je reakc� na pr�m�t t�hov� s�ly do sm�ru kolm�ho k naklon�n� rovin�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka3"> (c)</td>
<td width="400px" class="test2">Na krabici p�sob� celkem t�i s�ly: dv� z nich jsou k naklon�n� rovin� kolm� a ru�� se, t�et� je s naklon�nou rovinou rovnob�n�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka4"> (d)</td>
<td width="400px" class="test2">Tlakov� s�la naklon�n� roviny m� svisl� sm�r, ale men�� velikost ne� t�hov� s�la. Krabice proto kles� se zrychlen�m.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka5"> (e)</td>
<td width="400px" class="test2">P�i vhodn�m sklonu naklon�n� roviny je v�slednice sil p�sob�c�ch na krabici nulov�. Krabice pak kles� s konstantn� rychlost�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka6"> (f)</td>
<td width="400px" class="test2">Zem� p�sob� na krabici dv�ma silami: jedna je s naklon�nou rovinou rovnob�n�, druh� je k naklon�n� rovin� kolm� a deformuje ji.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka7"> (g)</td>
<td width="400px" class="test2">Zrychlen� krabice m� sm�r naklon�n� roviny, proto je tlakov� s�la naklon�n� roviny stejn� velk� jako pr�m�t t�hov� s�ly do sm�ru kolm�ho k naklon�n� rovin�.</td>
</tr>

<tr>
<td width="50px" class="test"><input type="checkbox" name="otazka8"> (h)</td>
<td width="400px" class="test2">Pr�m�t zrychlen� krabice do svisl�ho sm�ru je nulov�, proto se svisl� pr�m�t tlakov� s�ly naklon�n� roviny ru�� s t�hovou silou.</td>
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
		    document.form.otazka5.checked==false && 
		    document.form.otazka6.checked==false && 
		    document.form.otazka7.checked==true && 
		    document.form.otazka8.checked==false)


			window.open("Spatne/dynamika/spravne10.htm","Spravne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");
		else 
	     
			window.open("Spatne/dynamika/spatne10.htm","Spatne", "height=170px, width=500px, top=300px, left=500px, status=no, toolbar=no, location=no, scrollbars=yes, resizable=no");

	    }
</script>
</div>