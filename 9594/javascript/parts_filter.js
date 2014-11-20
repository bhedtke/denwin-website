function filterParts(){
var selObject = document.getElementById('selPartsFilter');
var selIndex = selObject.selectedIndex;

var sparkxrefId = document.getElementById('sparkxref');
var ariensId = document.getElementById('ariens');
var cpdId = document.getElementById('cpd');
var cubcadetId = document.getElementById('cubcadet');
var craftsmanId = document.getElementById('craftsman');
var echoId = document.getElementById('echo');
var gardnerId = document.getElementById('gardner');
var goldeneagleId = document.getElementById('goldeneagledist');
var greatnorthernId = document.getElementById('greatnorthern');
var husqvarnaId = document.getElementById('husqvarna');
var mpowerId = document.getElementById('mpower');
var milacaId = document.getElementById('milaca');
var oregonId = document.getElementById('oregon');
var oscarwilsonId = document.getElementById('oscarwilson');
var outdoordistId = document.getElementById('outdoordist');
var psepId = document.getElementById('psep');
var powerportalId = document.getElementById('powerportal');
var sepwId = document.getElementById('sepw');
var stensId = document.getElementById('stens');
var tecumsehId = document.getElementById('tecumseh');
var toroId = document.getElementById('toro');
var planoId = document.getElementById('plano');
var jacobsenId = document.getElementById('jacobsen');

sparkxrefId.style.display = 'none';
ariensId.style.display = 'none';
cpdId.style.display = 'none';
cubcadetId.style.display = 'none';
craftsmanId.style.display = 'none';
echoId.style.display = 'none';
gardnerId.style.display = 'none';
goldeneagleId.style.display = 'none';
greatnorthernId.style.display = 'none';
husqvarnaId.style.display = 'none';
mpowerId.style.display = 'none';
milacaId.style.display = 'none';
oregonId.style.display = 'none';
oscarwilsonId.style.display = 'none';
outdoordistId.style.display = 'none';
psepId.style.display = 'none';
powerportalId.style.display = 'none';
sepwId.style.display = 'none';
stensId.style.display = 'none';
tecumsehId.style.display = 'none';
toroId.style.display = 'none';
planoId.style.display = 'none';
jacobsenId.style.display = 'none';

if (selObject.options[selIndex].value == "showall"){
	sparkxrefId.style.display = '';
	ariensId.style.display = '';
	cpdId.style.display = '';
	cubcadetId.style.display = '';
	craftsmanId.style.display = '';
	echoId.style.display = '';
	gardnerId.style.display = '';
	goldeneagleId.style.display = '';
	greatnorthernId.style.display = '';
	husqvarnaId.style.display = '';
	mpowerId.style.display = '';
	milacaId.style.display = '';
	oregonId.style.display = '';
	oscarwilsonId.style.display = '';
	outdoordistId.style.display = '';
	psepId.style.display = '';
	powerportalId.style.display = '';
	sepwId.style.display = '';
	stensId.style.display = '';
	tecumsehId.style.display = '';
	toroId.style.display = '';
	planoId.style.display = '';
	jacobsenId.style.display = '';
}
else if (selObject.options[selIndex].value == "agri-fab"){
	cpdId.style.display = '';
	oscarwilsonId.style.display = '';
	outdoordistId.style.display = '';
}
else if (selObject.options[selIndex].value == "aircap"){
	oscarwilsonId.style.display = '';
	cpdId.style.display = '';
}
else if (selObject.options[selIndex].value == "autolite"){
	sparkxrefId.style.display = '';
}
else if  (selObject.options[selIndex].value == "ayp"){
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "ariens"){
	ariensId.style.display = '';
}
else if  (selObject.options[selIndex].value == "atlas"){
	oscarwilsonId.style.display = '';
	cpdId.style.display = '';
}
else if  (selObject.options[selIndex].value == "blitz"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "bluebird"){
	
}
else if  (selObject.options[selIndex].value == "bobcat"){
	greatnorthernId.style.display = '';
	oscarwilsonId.style.display = '';

}
else if  (selObject.options[selIndex].value == "bolens"){
	oscarwilsonId.style.display = '';
	gardnerId.style.display = '';

}
else if (selObject.options[selIndex].value == "bosch"){
	sparkxrefId.style.display = '';
}
else if (selObject.options[selIndex].value == "bradco"){
	greatnorthernId.style.display = '';

}
else if  (selObject.options[selIndex].value == "bunton"){
	oscarwilsonId.style.display = '';
	greatnorthernId.style.display = '';

}
else if  (selObject.options[selIndex].value == "brushhog"){

}
else if  (selObject.options[selIndex].value == "bs"){
	mpowerId.style.display = '';
	milacaId.style.display = '';
	oscarwilsonId.style.display = '';
	outdoordistId.style.display = '';
	powerportalId.style.display = '';
	sepwId.style.display = '';
	mpowerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "case"){

}
else if  (selObject.options[selIndex].value == "carlisle"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "champion"){
	sparkxrefId.style.display = '';
	gardnerId.style.display = '';
	oscarwilsonId.style.display = '';

}
else if  (selObject.options[selIndex].value == "countryclipper"){

}
else if  (selObject.options[selIndex].value == "craftsman"){
	craftsmanId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "cubcadet"){
	cubcadetId.style.display = '';
	outdoordistId.style.display = '';
}
else if  (selObject.options[selIndex].value == "dana"){
	gardnerId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "dixiechopper"){

}

else if  (selObject.options[selIndex].value == "dixon"){

}
else if (selObject.options[selIndex].value == "denso"){
	sparkxrefId.style.display = '';
}
else if  (selObject.options[selIndex].value == "dolmar"){
	milacaId.style.display = '';
	magnetopowerId.style.display = '';

}
else if  (selObject.options[selIndex].value == "dosko"){
	greatnorthernId.style.display = '';

}
else if  (selObject.options[selIndex].value == "echo"){
	echoId.style.display = '';
}
else if  (selObject.options[selIndex].value == "encore"){

}
else if  (selObject.options[selIndex].value == "equipment guard"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "everride"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "exmark"){

}
else if  (selObject.options[selIndex].value == "ferris"){

}
else if  (selObject.options[selIndex].value == "gates"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "giantvac"){

}
else if  (selObject.options[selIndex].value == "grasshopper"){

}
else if  (selObject.options[selIndex].value == "gravely"){

}
else if  (selObject.options[selIndex].value == "greatdane"){
	gardnerId.style.display = '';

}
else if  (selObject.options[selIndex].value == "hastyvac"){
	greatnorthernId.style.display = '';

}
else if  (selObject.options[selIndex].value == "hiniker"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "hoffco"){
	cpdId.style.display = '';
}
else if  (selObject.options[selIndex].value == "homelite"){
	milacaId.style.display = '';
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "honda"){
	oscarwilsonId.style.display = '';
	greatnorthernId.style.display = '';
	planoId.style.display = '';

}
else if  (selObject.options[selIndex].value == "honeywell"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "hustler"){

}
else if  (selObject.options[selIndex].value == "huskee"){

}
else if  (selObject.options[selIndex].value == "husqvarna"){
	milacaId.style.display = '';
	husqvarnaId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "hydro-gear"){
	gardnerId.style.display = '';
	cpdId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "jacobsen"){
	jacobsenId.style.display = '';
}
else if  (selObject.options[selIndex].value == "johndeere"){

}
else if  (selObject.options[selIndex].value == "kees"){

}
else if  (selObject.options[selIndex].value == "kohler"){
	milacaId.style.display = '';
	gardnerId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "kubota"){

}
else if  (selObject.options[selIndex].value == "lastec"){

}
else if  (selObject.options[selIndex].value == "lawnboy"){
	milacaId.style.display = '';
	sepwId.style.display = '';
	toroId.style.display = '';

}
else if  (selObject.options[selIndex].value == "littlewonder"){
	greatnorthernId.style.display = '';
	oscarwilsonId.style.display = '';
}

else if  (selObject.options[selIndex].value == "lesco"){

}
else if  (selObject.options[selIndex].value == "massey"){

}
else if  (selObject.options[selIndex].value == "maxim"){

}
else if (selObject.options[selIndex].value == "megafire"){
	sparkxrefId.style.display = '';
}
else if  (selObject.options[selIndex].value == "mcculloch"){
	milacaId.style.display = '';
}
else if  (selObject.options[selIndex].value == "mower sulky"){
	gardnerId.style.display = '';
}

else if  (selObject.options[selIndex].value == "mtd"){
	oscarwilsonId.style.display = '';
	milacaId.style.display = '';
	gardnerId.style.display = '';
	cpdId.style.display = '';
}
else if  (selObject.options[selIndex].value == "murray"){
	powerportalId.style.display = '';
	oscarwilsonId.style.display = '';
	mpowerId.style.display = '';	

}
else if  (selObject.options[selIndex].value == "ngk"){
	sparkxrefId.style.display = '';
	mpowerId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "noma"){
	oscarwilsonId.style.display = '';

}
else if  (selObject.options[selIndex].value == "oregon"){
	oregonId.style.display = '';
	milacaId.style.display = '';
	gardnerId.style.display = '';
	mpowerId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "parker"){
	gardnerId.style.display = '';
	cpdId.style.display = '';
}

else if  (selObject.options[selIndex].value == "poulan"){
	oscarwilsonId.style.display = '';
	milacaId.style.display = '';
	gardnerId.style.display = '';
	mpowerId.style.display = '';

}
else if  (selObject.options[selIndex].value == "poulanpro"){
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "primeline"){
	greatnorthernId.style.display = '';
}
else if  (selObject.options[selIndex].value == "ransomes"){

}
else if  (selObject.options[selIndex].value == "rbg-grinders"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "redhawk"){
	gardnerId.style.display = '';
}

else if  (selObject.options[selIndex].value == "ridgid"){
	gardnerId.style.display = '';

}
else if  (selObject.options[selIndex].value == "ryobi"){
	gardnerId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "simplicity"){
	milacaId.style.display = '';
}
else if  (selObject.options[selIndex].value == "solo"){
	cpdId.style.display = '';

}
else if  (selObject.options[selIndex].value == "snapper"){

}
else if  (selObject.options[selIndex].value == "snow chief"){
	cpdId.style.display = '';

}
else if  (selObject.options[selIndex].value == "tanaka"){
	gardnerId.style.display = '';
	greatnorthernId.style.display = '';
}

else if  (selObject.options[selIndex].value == "tecumseh"){
	gardnerId.style.display = '';
	cpdId.style.display = '';
	oscarwilsonId.style.display = '';

}
else if  (selObject.options[selIndex].value == "tiny-tach"){
	gardnerId.style.display = '';
}
else if  (selObject.options[selIndex].value == "toro"){
	milacaId.style.display = '';
	sepwId.style.display = '';
	toroId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if (selObject.options[selIndex].value == "torch"){
	sparkxrefId.style.display = '';
}
else if  (selObject.options[selIndex].value == "tillotson"){
	gardnerId.style.display = '';
	cpdId.style.display = '';

}
else if  (selObject.options[selIndex].value == "trailmate"){

}
else if  (selObject.options[selIndex].value == "troybilt"){
	milacaId.style.display = '';
	gardnerId.style.display = '';
	oscarwilsonId.style.display = '';

}
else if  (selObject.options[selIndex].value == "walbro"){
	gardnerId.style.display = '';
	cpdId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "weedeater"){
	gardnerId.style.display = '';

}
else if  (selObject.options[selIndex].value == "wheelhorse"){

}
else if  (selObject.options[selIndex].value == "walker"){

}
else if  (selObject.options[selIndex].value == "woods"){

}
else if  (selObject.options[selIndex].value == "wright"){

}
else if  (selObject.options[selIndex].value == "yamaha"){

}
else if  (selObject.options[selIndex].value == "yardman"){
	gardnerId.style.display = '';
	oscarwilsonId.style.display = '';
}
else if  (selObject.options[selIndex].value == "yazoo"){

}
else if  (selObject.options[selIndex].value == "zama"){
	gardnerId.style.display = '';
	oscarwilsonId.style.display = '';
}
}