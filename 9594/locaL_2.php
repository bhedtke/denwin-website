<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Ace Hardware - Local Stores</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/local.css" type="text/css" media="screen" />
<?php
date_default_timezone_set('America/Chicago');
for( $i = 1; $i <= 53; $i++ )
{
	if( date('W') == $i )
	{
		echo '<link rel="stylesheet" href="css/weeks/' . $i . '.css" type="text/css" media="screen" />';
	}
}
?>
<script language="javascript" src="javascript/expanded_info.js"></script>
<script language="javascript" src="javascript/tabbed_tables.js"></script>
</head>
<body onLoad="changeTab(0, 0, 2);">

<div class="content">

<div class="menu-shadow">
<table class="nostyle" width=100%>
<tr>
<td class="menu"><a class="nostyle" href="index.php"><div id="mainMenuId0" class="menuMain" style="border-radius: 0px 0px 0px 10px;" onMouseOver="menuRollOverIn('mainMenuId0', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId0', 'menuMain');">General</div></a></td>
<td class="menu"><a class="nostyle" href="parts.php"><div id="mainMenuId1" class="menuMain" onMouseOver="menuRollOverIn('mainMenuId1', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId1', 'menuMain');">Small Engine</div></a></td>
<td class="menu"><a class="nostyle" href="estimator.php"><div id="mainMenuId2" class="menuMain" onMouseOver="menuRollOverIn('mainMenuId2', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId2', 'menuMain');">Estimator</div></a></td>
<td class="menu"><a class="nostyle" href="local.php"><div id="mainMenuId3" class="menuMainCurrent" style="border-radius: 0px 0px 10px 0px;" onMouseOver="menuRollOverIn('mainMenuId3', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId3', 'menuMainCurrent');">Local Stores</div></a></td>
</tr>
</table>
</div>


<div class="contentMainShadow">
<div class="contentHeader">
<table class="nostyle" width=100%>
<tr>
<td class="menu"><div class="menuSub" id="menuSub00" style="border-radius: 10px 0px 0px 0px;" onclick="changeTab(0, 0, 2);" onMouseOver="tabRollOverIn(0, 0, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 0, 'menuSub');">Local Ace Stores</div></td>
<td class="menu"><div class="menuSub" id="menuSub01" style="border-radius: 0px 10px 0px 0px;" onclick="changeTab(0, 1, 2);" onMouseOver="tabRollOverIn(0, 1, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 1, 'menuSub');">Other Recommended Stores</div></td>
</tr>
</table>
</div>

<div class="contentBody">
<div id="menuSubObj00">
<table class="nostyle" width="100%" >
<tr class="grey"><td colspan="5" align="center">Simons Ace Hardwares</td></tr>
<tr class="white"><td rowspan="4"><div class="roundedImage" style="height: 90px; width: 220px; background-image: url(images/stores/av1.png);"></div></td><td colspan="2">Store 1 - Apple Valley</td><td colspan="2">Store Number: 9594</td></tr>
<tr class="white"><td rowspan="3" colspan="2">14760 Pennock Ave S.<br />Apple Valley, MN<br />55124</td><td colspan="2">952-432-1004</td></tr>
<tr class="white"><td rowspan="2" colspan="2">Mike McHugh<br /><a href="mailto:mike.mchugh@denwinhardware.com">mike.mchugh@denwinhardware.com</a></td></tr>
<tr class="white"></tr>
<tr class="ltblue"><td rowspan="4"><div class="roundedImage" style="height: 90px; width: 220px; background-image: url(images/stores/np2.png);"></div></td><td colspan="2">Store 2 - New Prague</td><td>Store Number: 9572</td></tr>
<tr class="ltblue"><td rowspan="3" colspan="2"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=1300+1st+Street+Northeast,+New+Prague,+MN+56071">1300 1st Street North<br />New Prague, MN<br />56071</a></td><td colspan="2">952-758-4440</td></tr>
<tr class="ltblue"><td rowspan="2" colspan="2">Ed Kotek<br /><a href="mailto:ed.kotek@denwinhardware.com">ed.kotek@denwinhardware.com</a></td></tr>
<tr class="ltblue"></tr>
<tr class="white"><td rowspan="4" width="200px"><div class="roundedImage" style="height: 90px; width: 220px; background-image: url(images/stores/lk3.png);"></div></td><td colspan="2">Store 3 - Downtown Lakeville</td><td>Store Number: 9638</td></tr>
<tr class="white"><td rowspan="3" colspan="2"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=20810+Holyoke+Avenue,+Lakeville,+MN+55044">20810 Holyoke Ave.<br />Lakeville, MN<br />55044</a></td><td colspan="2">952-469-3433</td></tr>
<tr class="white"><td rowspan="2" colspan="2">Ryan Hauser<br /><a href="mailto:ryanhauser_ace@yahoo.com">ryanhauser_ace@yahoo.com</a></td></tr>
<tr class="white"></tr>
<tr class="ltblue"><td rowspan="4"><div class="roundedImage" style="height: 90px; width: 220px; background-image: url(images/stores/lk4.png);"></div></td><td colspan="2">Store 4 - Uptown Lakeville</td><td>Store Number: 14414</td></tr>
<tr class="ltblue"><td rowspan="3" colspan="2"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=17729+Juniper+Path,+Lakeville,+MN+55044">17729 Juniper Path<br />Lakeville, MN<br />55044</a></td><td colspan="2">952-898-7151</td></tr>
<tr class="ltblue"><td rowspan="2" colspan="2">Zac Ferree<br /><a href="mailto:zacferree_ace@yahoo.com">zacferree_ace@yahoo.com</a></td></tr>
<tr class="ltblue"></tr>
<tr class="white"><td rowspan="4" width="200px"><div class="roundedImage" style="height: 90px; width: 220px; background-image: url(images/stores/igh5.png);"></div></td><td colspan="2">Store 5 - Inver Grove Heights</td><td>Store Number: 14952</td></tr>
<tr class="white"><td rowspan="3" colspan="2"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=3098+65th+Street%20East,+Inver+Grove+Hts,+MN+55076">3098 65th. St. E.<br />Inver Grove Heights, MN<br />55076</a></td><td colspan="2">651-455-2228</td></tr>
<tr class="white"><td rowspan="2" colspan="2">Kacey Weiers<br /><a href="mailto:kaceyweiers_ace@yahoo.com">kaceyweiers_ace@yahoo.com</a></td></tr>
<tr class="white"></tr>
<tr class="ltblue"><td rowspan="4"><div class="roundedImage" style="height: 90px; width: 220px; background-image: url(images/stores/bl6.png);"></div></td><td colspan="2">Store 6 - Bloomington</td><td>Store Number: 15338</td></tr>
<tr class="ltblue"><td rowspan="3" colspan="2"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=108+98th+Street,+Bloomington,+MN+55420">108 98th Street<br />Bloomington, MN<br />55420</a></td><td colspan="2">952-767-2981</td></tr>
<tr class="ltblue"><td rowspan="2" colspan="2">Craig Carmean<br /><a href="mailto:craigcarmean_ace@yahoo.com">craigcarmean_ace@yahoo.com</a></td></tr>
<tr class="ltblue"></tr>
<tr class="grey"><td colspan="5" align="center">Pellicci Ace Hardwares</td></tr>
<tr class="ltblue"><td>Eagan</td></tr>
<tr class="white"><td>Farmington</td></tr>
<tr class="grey"><td colspan="5" align="center">Terry's Ace Hardwares</td></tr>
<tr class="ltblue"><td>Rosemount</td></tr>
<tr class="white"><td>Hastings</td></tr>
</table>
</div>

<div id="menuSubObj01">
<table class="nostyle">
<tr class="white"><td rowspan="2">img</td><td align="left">Grainger Industrial Supply</td><td align="right">612-656-7100</td></tr>
<tr class="white"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=7627+Anagram+Drive,+Eden+Prairie,+MN+55344">7627 Anagram Drive Eden Prairie, MN 55344</a></td><td align="right"><button onClick="expandInfo('graingerInfo');">Show Details</button><td></tr>
<tr class="white" id="graingerInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="ltblue"><td rowspan="2">img</td><td align="left">Security Solutions</td><td align="right">952-881-0896</td></tr>
<tr class="ltblue"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=9905+Lyndale+Avenue+South,+Bloomington,+MN+55420">9905 Lyndale Avenue South, Bloomington, MN 55420</a></td><td align="right"><button onClick="expandInfo('securityInfo');">Show Details</button><td></tr>
<tr class="ltblue" id="securityInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="white"><td rowspan="2">img</td><td align="left">Floyd Lock & Safe Co.</td><td align="right">612-861-5625</td></tr>
<tr class="white"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=9036+Grand+Avenue+South,+Minneapolis,+MN+55420">9036 Grand Ave South, Minneapolis, MN 55420</a></td><td align="right"><button onClick="expandInfo('floydInfo');">Show Details</button><td></tr>
<tr class="white" id="floydInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="ltblue"><td rowspan="2">img</td><td align="left">Park Supply</td><td align="right">612-767-2197</td></tr>
<tr class="ltblue"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=2727+East+26th+Street,+Minneapolis,+MN+55406">2727 East 26th Street, Minneapolis, MN 55406</a></td><td align="right"><button onClick="expandInfo('parkSupplyInfo');">Show Details</button><td></tr>
<tr class="ltblue" id="parkSupplyInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="white"><td rowspan="2">img</td><td align="left">Ferguson Plumbing</td><td align="right">952-894-9385</td></tr>
<tr class="white"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=670+East+Travelers+Trail,+Burnsville,+MN+55337">670 East Travelers Trail, Burnsville, MN 55337</a></td><td align="right"><button onClick="expandInfo('fergusonInfo');">Show Details</button><td></tr>
<tr class="white" id="fergusonInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="ltblue"><td rowspan="2">img</td><td align="left">Dey Appliance</td><td align="right">952-890-9358</td></tr>
<tr class="ltblue"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=3431+Highway+13+East,+Burnsville,+MN+55337">3431 Highway 13 East, Burnsville, MN 55337</a></td><td align="right"><button onClick="expandInfo('deyApplianceInfo');">Show Details</button><td></tr>
<tr class="ltblue" id="deyApplianceInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="white"><td rowspan="2">img</td><td align="left">A-1 Vacum Solutions</td><td align="right">612-869-2555</td></tr>
<tr class="white"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=1311+East+66th+Street,+Richfield,+MN+55423">1311 East 66th Street, Richfield, MN 55423</a></td><td align="right"><button onClick="expandInfo('a1VacInfo');">Show Details</button><td></tr>
<tr class="white" id="a1VacInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="ltblue"><td rowspan="2">img</td><td align="left">Viking Electric</td><td align="right">952-890-8420</td></tr>
<tr class="ltblue"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=2601+Highway+13+West,+Burnsville,+MN+55337">2601 Highway 13 W, Burnsville, MN 55337</a></td><td align="right"><button onClick="expandInfo('vikingInfo');">Show Details</button><td></tr>
<tr class="ltblue" id="vikingInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="white"><td rowspan="2">img</td><td align="left">Honsa Lighting</td><td align="right">651-456-0011</td></tr>
<tr class="white"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=2990+Lexington+Avenue+South,+Eagan,+MN+55121">2990 Lexington Avenue South, Eagan, MN 55121</a></td><td align="right"><button onClick="expandInfo('honsaInfo');">Show Details</button><td></tr>
<tr class="white" id="honsaInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="ltblue"><td rowspan="2">img</td><td align="left">Southern Lights</td><td align="right">952-890-8977</td></tr>
<tr class="ltblue"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=12550+West+Frontage+Road,+Burnsville,+MN+55337">12550 West Frontage Road, Burnsville, MN 55337</a></td><td align="right"><button onClick="expandInfo('southernLightsInfo');">Show Details</button><td></tr>
<tr class="ltblue" id="southernLightsInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="white"><td rowspan="2">img</td><td align="left">Rockler Woodworking</td><td align="right">952-892-7999</td></tr>
<tr class="white"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=2020+Egan+Drive,+Burnsville,+MN+55337">2020 Egan Drive, Burnsville, MN 55337</a></td><td align="right"><button onClick="expandInfo('rocklerInfo');">Show Details</button><td></tr>
<tr class="white" id="rocklerInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="ltblue"><td rowspan="2">img</td><td align="left">Lamperts Lumber</td><td align="right">952-432-0600</td></tr>
<tr class="ltblue"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=14555+Galaxie+Avenue+West,+Apple+Valley,+MN+55124">14555 Galaxie Avenue West, Apple Valley, MN 55124</a></td><td align="right"><button onClick="expandInfo('lampertsInfo');">Show Details</button><td></tr>
<tr class="ltblue" id="lampertsInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="white"><td rowspan="2">img</td><td align="left">Fastenal</td><td align="right">952-808-2658</td></tr>
<tr class="white"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=12150+12th+Avenue+South,+Burnsville,+MN+55337">12150 12th Avenue South, Burnsville, MN 55337</a></td><td align="right"><button onClick="expandInfo('fastenalInfo');">Show Details</button><td></tr>
<tr class="white" id="fastenalInfo" style="display: none;"><td colspan="3"></td></tr>

<tr class="ltblue"><td rowspan="2">img</td><td align="left">Northern Tool</td><td align="right">952-894-0326</td></tr>
<tr class="ltblue"><td align="left"><a href="http://maps.google.com/maps?f=d&source=s_d&saddr=14760+Pennock+Avenue,+Apple+Valley,+MN+55124&daddr=12205+River+Ridge+Boulevard,+Burnsville,+MN+55337">12205 River Ridge Boulevard, Burnsville, MN 55337</a></td><td align="right"><button onClick="expandInfo('northernToolInfo');">Show Details</button><td></tr>
<tr class="ltblue" id="northernToolInfo" style="display: none;"><td colspan="3"></td></tr>

</table>
</div>

</div>
<div class="content-footer">

</div>

</div>

</body>
</html>