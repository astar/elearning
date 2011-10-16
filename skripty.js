//skripty.js

var scriptsOn = false;

if (((navigator.appName == "Netscape") 
    && (parseInt(navigator.appVersion) >= 3)) ||
   ((navigator.appName == "Microsoft Internet Explorer") 
    && (parseInt(navigator.appVersion) >=4)))
   scriptsOn = true;


function onMysiPresHmenu(td) {
    if (scriptsOn) {
        td.style.backgroundColor='white';
        td.style.cursor='hand';
	td.style.border = "solid white 1px";
   }
}

function onMysiPrycHmenu(td) {
    if (scriptsOn) {
        td.style.backgroundColor='BBD8F6';
	td.style.border = "solid white 1px";
   }
}


function odkryt(moznosti)
{
if (moznosti.style.display == 'none')
moznosti.style.display='';
}

function skryt(tlacitko)
{
if (tlacitko.style.display == '')
tlacitko.style.display='none';
}