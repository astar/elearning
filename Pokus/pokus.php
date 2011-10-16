<h2>Pokus</h2>

<input type="button" value="Odkrýt text" onClick="odkryt(text)">

<script>

function odkryt(text)

{
if (text.style.display == 'none')
text.style.display='';
}

</script>


<form id="text" style="display:none;">Text.</form>