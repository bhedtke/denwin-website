<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Ace Hardware - Window and screen estimator</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/estimator.css" type="text/css" media="screen" />
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
<script language="javascript" src="javascript/glass_calculator.js"></script>
<script language="javascript" src="javascript/screen_calculator.js"></script>
<script language="javascript" src="javascript/jQuery.js"></script>
</head>
<body onLoad="changeTab(0, 0, 4);">

<div class="content">
<div class="menu-shadow">

<table class="nostyle" width=100%>
<tr>
<td class="menu"><a class="nostyle" href="index.php"><div id="mainMenuId0" class="menuMain" style="border-radius: 0px 0px 0px 10px;" onMouseOver="menuRollOverIn('mainMenuId0', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId0', 'menuMain');">General</div></a></td>
<td class="menu"><a class="nostyle" href="parts.php"><div id="mainMenuId1" class="menuMain" onMouseOver="menuRollOverIn('mainMenuId1', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId1', 'menuMain');">Small Engine</div></a></td>
<td class="menu"><a class="nostyle" href="estimator.php"><div id="mainMenuId2" class="menuMainCurrent" onMouseOver="menuRollOverIn('mainMenuId2', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId2', 'menuMainCurrent');">Estimator</div></a></td>
<td class="menu"><a class="nostyle" href="local.php"><div id="mainMenuId3" class="menuMain" style="border-radius: 0px 0px 10px 0px;" onMouseOver="menuRollOverIn('mainMenuId3', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId3', 'menuMain');">Local Stores</div></a></td>
</tr>
</table>
</div>

<div class="contentMainShadow">
<div class="contentHeader">
<table class="nostyle" width=100%>
<tr>
<td class="menu"><div class="menuSub" id="menuSub00" style="border-radius: 10px 0px 0px 0px;" onclick="changeTab(0, 0, 4);" onMouseOver="tabRollOverIn(0, 0, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 0, 'menuSub');">General Pricing</div></td>
<td class="menu"><div class="menuSub" id="menuSub01" style="border-radius: 0px 0px 0px 0px;" onclick="changeTab(0, 1, 4); glassChangeMaterialType(0, 3.50); glassChangeEdgeType(0, 0.00);" onMouseOver="tabRollOverIn(0, 1, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 1, 'menuSub');">Glass Calculator</div></td>
<td class="menu"><div class="menuSub" id="menuSub02" style="border-radius: 0px 0px 0px 0px;" onclick="changeTab(0, 2, 4); screenRepairTypeChangeTab(1, 0, 3); screenSetScreenMaterial(0, 3);" onMouseOver="tabRollOverIn(0, 2, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 2, 'menuSub');">Screen Estimator</div></td>
<td class="menu"><div class="menuSub" id="menuSub03" style="border-radius: 0px 10px 0px 0px;" onclick="changeTab(0, 3, 4);" onMouseOver="tabRollOverIn(0, 3, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 3, 'menuSub');">Window Estimator</div></td>
</tr>
</table>


<div id="menuSubObj00" style="display: none;">
<table class="general">
<tr class="general-header"><td colspan="8">Bulk Screen</td></tr>
<tr class="general-sub-header"><td>Material</td><td>Color</td><td>24"</td><td>28"</td><td>32"</td><td>36"</td><td>48"</td><td>60"</td></tr>
<tr class="white"><td>Aluminum</td><td>Charcoal</td><td>5033956</td><td>53929</td><td>53932</td><td>53943</td><td>53948</td><td>5033972</td></tr>
<tr class="ltblue"><td>Aluminum</td><td>Silver</td><td>52345</td><td>52347</td><td>52349</td><td>52350</td><td>52352</td><td>5033949</td></tr>
<tr class="white"><td>Fiberglass</td><td>Charcoal</td><td>52488</td><td>52490</td><td>52492</td><td>52493</td><td>52494</td><td>55350</td></tr>
<tr class="ltblue"><td>Fiberglass</td><td>Grey</td><td>57606</td><td>5000047</td><td>57608</td><td>51958</td><td>51959</td><td>51962</td></tr>
<tr class="white"><td>Pet Proof</td><td>Black</td><td></td><td></td><td></td><td>5172382</td><td>5172424</td><td></td></tr>
</table>
</div>

<div id="menuSubObj01" style="display: none;">
<table class="glassCalc">
<tr><td class="glassCalcHeader" colspan="2">Dimensions</td><td class="glassCalcHeader">Final Price</td></tr>
<tr width="100%">
<td class="glassCalcWhite">
<div class="alignleft">Length:</div>
<div class="alignright">
<input type="text" id="glassLengthText" value="12" size=6 onkeyup="glassCalcPrice();" onchange="glassCalcPrice();"/>in.
<select onchange="glassCalcPrice();" id="glassLengthFr">
<option value=0 selected>0</option>
<option value=0.0625>1/16 in.</option>
<option value=0.125>1/8 in.</option>
<option value=0.1875>3/16 in.</option>
<option value=0.25>1/4 in.</option>
<option value=0.3125>5/16 in.</option>
<option value=0.375>3/8 in.</option>
<option value=0.4375>7/16 in.</option>
<option value=0.5>1/2 in.</option>
<option value=0.5625>9/16 in.</option>
<option value=0.625>5/8 in.</option>
<option value=0.6875>11/16 in.</option>
<option value=0.75>3/4 in.</option>
<option value=0.8125>13/16 in.</option>
<option value=0.875>7/8 in.</option>
<option value=0.9375>15/16 in.</option>
</select>
</div>
</td>
<td class="glassCalcWhite">
<div class="alignleft">Width:</div>
<div class="alignright">
<input type="text" id="glassWidthText" value="12" size=6 onkeyup="glassCalcPrice();" onchange="glassCalcPrice();"/>in.
<select onchange="glassCalcPrice();" id="glassWidthFr">
<option value=0 selected>0</option>
<option value=0.0625>1/16 in.</option>
<option value=0.125>1/8 in.</option>
<option value=0.1875>3/16 in.</option>
<option value=0.25>1/4 in.</option>
<option value=0.3125>5/16 in.</option>
<option value=0.375>3/8 in.</option>
<option value=0.4375>7/16 in.</option>
<option value=0.5>1/2 in.</option>
<option value=0.5625>9/16 in.</option>
<option value=0.625>5/8 in.</option>
<option value=0.6875>11/16 in.</option>
<option value=0.75>3/4 in.</option>
<option value=0.8125>13/16 in.</option>
<option value=0.875>7/8 in.</option>
<option value=0.9375>15/16 in.</option>
</select>
</div>
</td>
<td class="glassCalcWhite" rowspan="2">
<div id="glassFinalPrice"></div>
</td></tr>
<tr><td class="glassCalcWhite" colspan="2">
<div class="alignleft">
Order Multiple:
</div>
<div class="alignright">
<select onchange="glassCalcPrice();" id="glassMultiple">
<option value=1>1x</option>
<option value=2>2x</option>
<option value=3>3x</option>
<option value=4>4x</option>
<option value=5>5x</option>
<option value=6>6x</option>
<option value=7>7x</option>
<option value=8>8x</option>
<option value=9>9x</option>
<option value=10>10x</option>
</select>
</div>
</td></tr>
<tr><td  class="glassCalcHeader" colspan="3">Glass Type</td></tr>
<tr width="100%"><td class="glassCalcHeader">Clear Window Glass</td><td class="glassCalcHeader">Mirror</td><td class="glassCalcWhite" rowspan="25" style="text-align: center;">Price Per Square Foot<br />(Length * Width)<br /><input type="text" id="glassDisplayMaterialPrice" style="width:150px" readonly="readonly"/></td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-0" onClick="glassChangeMaterialType(0, 3.50);"/>3/32" (Single Strength)</div><div class="alignright">$3.50 ft2</div></td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-18" onClick="glassChangeMaterialType('18', 5.75);"/>3/32" (Single Strenght)</div><div class="alignright">$5.75 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-1" onClick="glassChangeMaterialType(1, 4.00);"/>1/8" (Double Strength)</div><div class="alignright">$4.00 ft2</div></td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-19" onClick="glassChangeMaterialType('19', 6.50);"/>1/8" (Double Strenght)</div><div class="alignright">$6.50 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcHeader">Non-Glare Glass</td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-20" onClick="glassChangeMaterialType(20, 7.45);"/>3/16" Clear</div><div class="alignright">$7.45 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-2" onClick="glassChangeMaterialType(2, 6.50);"/>3/32"</div><div class="alignright">$6.50 ft2</div></td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-21" onClick="glassChangeMaterialType(21, 7.00);"/>1/4" Clear</div><div class="alignright">$7.00 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcHeader">Clear Float Glass</td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-22" onClick="glassChangeMaterialType(22, 14.85);"/>1/4" Bronze/Grey</div><div class="alignright">$14.85 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-3" onClick="glassChangeMaterialType(3, 5.65);"/>3/16"</div><div class="alignright">$5.65 ft2</div></td><td class="glassCalcHeader" rowspan="2">Tempered Glass<br />3 ft2 min price per piece</td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-4" onClick="glassChangeMaterialType(4, 5.85);"/>1/4"</div><div class="alignright">$5.85 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-5" onClick="glassChangeMaterialType(5, 9.15);"/>3/8"</div><div class="alignright">$9.15 ft2</div></td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-23" onClick="glassChangeMaterialType(23, 8.50);"/>1/8" Clear</div><div class="alignright">$8.50 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-6" onClick="glassChangeMaterialType(6, 13.00);"/>1/2"</div><div class="alignright">$13.00 ft2</div></td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-24" onClick="glassChangeMaterialType(24, 9.00);"/>3/16" Clear</div><div class="alignright">$9.00 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcHeader">Bronze/Grey Float</td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-25" onClick="glassChangeMaterialType(25, 9.50);"/>1/4" Clear</div><div class="alignright">$9.50 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-7" onClick="glassChangeMaterialType(7, 5.95);"/>1/8"</div><div class="alignright">$5.95 ft2</div></td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-26" onClick="glassChangeMaterialType(26, 15.70);"/>3/8" Clear</div><div class="alignright">$15.70 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-8" onClick="glassChangeMaterialType(8, 7.40);"/>3/16"</div><div class="alignright">$7.40 ft2</div></td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-27" onClick="glassChangeMaterialType(27, 8.00);"/>1/8" Bronze/Grey</div><div class="alignright">$8.00 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-9" onClick="glassChangeMaterialType(9, 7.75);"/>1/4"</div><div class="alignright">$7.75 ft2</div></td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-28" onClick="glassChangeMaterialType(28, 8.30);"/>3/16" Bronze/Grey</div><div class="alignright">$8.30 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcHeader">Greylite (Black Glass)</td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-29" onClick="glassChangeMaterialType(29, 8.50);"/>1/4" Bronze/Grey</div><div class="alignright">$8.50 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-10" onClick="glassChangeMaterialType(10, 10.80);"/>1/8"</div><div class="alignright">$10.80 ft2</div></td><td class="glassCalcHeader">Pyrex (450 Degrees)</td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-11" onClick="glassChangeMaterialType(11, 14.15);"/>1/4"</div><div class="alignright">$14.15 ft2</div></td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-30" onClick="glassChangeMaterialType(30, 29.35);"/>1/8"</div><div class="alignright">$29.35 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcHeader">Acrylic (Plexiglass)</td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-31" onClick="glassChangeMaterialType(31, 63.00);"/>7/32"</div><div class="alignright">$63.00 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-12" onClick="glassChangeMaterialType(12, 3.50);"/>0.098" Clear (Single Strength)</div><div class="alignright">$3.50 ft2</div></td><td class="glassCalcHeader">Neoceram (1200 Degrees)</td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-13" onClick="glassChangeMaterialType(13, 4.00);"/>0.118" Clear (Double Strength)</div><div class="alignright">$4.00 ft2</div></td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-32" onClick="glassChangeMaterialType(32, 80.75);"/>3/16"</div><div class="alignright">$80.75 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-14" onClick="glassChangeMaterialType(14, 5.05);"/>0.177" Clear (3/16)</div><div class="alignright">$5.05 ft2</div></td><td class="glassCalcHeader">Wire Glass</td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-15" onClick="glassChangeMaterialType(15, 7.25);"/>0.220" Clear (1/4")</div><div class="alignright">$7.25 ft2</div></td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-33" onClick="glassChangeMaterialType(33, 14.10);"/>1/4"</div><div class="alignright">$14.10 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-16" onClick="glassChangeMaterialType(16, 11.30);"/>0.236" PolyCarbonate (Lexan)</div><div class="alignright">$11.30 ft2</div></td><td class="glassCalcHeader">Laminated Glass</td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-17" onClick="glassChangeMaterialType(17, 6.00);"/>0.118" Bronze/Grey</div><div class="alignright">$6.00 ft2</div></td><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-34" onClick="glassChangeMaterialType(34, 10.60);"/>1/4" Clear</div><div class="alignright">$10.60 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcHeader">Double Pane</td><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-35" onClick="glassChangeMaterialType(35, 13.85);"/>1/4" Bronze/Grey/Green</div><div class="alignright">$13.85 ft2</div></td></tr>
<tr width="100%"><td class="glassCalcWhite"><div class="alignleft"><input type="radio" id="glassMaterialType-36" onClick="glassChangeMaterialType(36, 15.00);"/>Vaccume Seal (Air)</div><div class="alignright">$15.00 ft2</div></td><td class="glassCalcWhite"></td></tr>
<tr width="100%"><td class="glassCalcLtBlue"><div class="alignleft"><input type="radio" id="glassMaterialType-37" onClick="glassChangeMaterialType(37, 16.60);"/>Low-E (Argon)</div><div class="alignright">$16.60 ft2</div></td><td class="glassCalcWhite"></td></tr>
<tr><td  class="glassCalcHeader" colspan="3">Edge Work</td></tr>
<tr width="100%"><td class="glassCalcWhite" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-0" onClick="glassChangeEdgeType(0, 0.00);"/>None</div><div class="alignright">$0.00 in.</div></td><td class="glassCalcWhite" rowspan="9" style="text-align: center;">Price Per Linear Foot<br />(Length * 2) + (Width * 2)<br /><input type="text" id="glassDisplayEdgePrice" style="width:150px;" readonly="readonly"/></td></tr>
<tr width="100%"><td class="glassCalcLtBlue" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-1" onClick="glassChangeEdgeType(1, 0.04);"/>Seamed Edge</div><div class="alignright">$0.04 in.</div></td></tr>
<tr width="100%"><td class="glassCalcWhite" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-2" onClick="glassChangeEdgeType(2, 0.08);"/>Flat Ground</div><div class="alignright">$0.08 in.</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-3" onClick="glassChangeEdgeType(3, 0.16);"/>Flat Polished</div><div class="alignright">$0.16 in.</div></td></tr>
<tr><td class="glassCalcHeader" colspan="2">Beveled Edges</td></tr>
<tr width="100%"><td class="glassCalcLtBlue" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-4" onClick="glassChangeEdgeType(4, 0.22);"/>1/2"</div><div class="alignright">$0.22 in.</div></td></tr>
<tr width="100%"><td class="glassCalcWhite" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-5" onClick="glassChangeEdgeType(5, 0.24);"/>3/4"</div><div class="alignright">$0.24 in.</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-6" onClick="glassChangeEdgeType(6, 0.26);"/>1"</div><div class="alignright">$0.26 in.</div></td></tr>
<tr width="100%"><td class="glassCalcWhite" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-7" onClick="glassChangeEdgeType(7, 0.30);"/>1 1/4"</div><div class="alignright">$0.30 in.</div></td></tr>
<tr width="100%"><td class="glassCalcLtBlue" colspan="2"><div class="alignleft"><input type="radio" id="glassEdgeType-8" onClick="glassChangeEdgeType(8, 0.36);"/>1 1/2"</div><div class="alignright">$0.36 in.</div></td><td class="glassCalcWhite" align="right"><button onClick="expandInfo('glassShowMathRow');">Show Math</button></td></tr>
<tr width="100%" id="glassShowMathRow" style="display: none;"><td colspan="3"><div id="glassShowMath"></div></td></tr>
</table>
</div>

<div id="menuSubObj02" style="display: none;">
<table class="screenEst">
<tr class="screenEstHeader"><td colspan="2">Dimensions</td><td width="120px">Final Price</td></tr>
<tr class="screenEstSubHeader"><td align="left">Height: <input type="text" id="screenHeightText" value="12" size=6 onkeyup="screenCalcPrice();" onchange="screenCalcPrice();"/>in.</td><td align="left">Width: <input type="text" id="screenWidthText" value="12" size=6 onkeyup="screenCalcPrice();" onchange="screenCalcPrice();"/>in.</td><td rowspan="2" id="screenTotalPrice"></td></tr>
<tr class="screenEstSubHeader"i><td align="left" id="screenHeightDisplay"></td><td align="left" id="screenWidthDisplay"></td></tr>
</table>

<table width="100%" class="nostyle">
<tr class="dkgrey"><td align="center">Screen Material</td></tr>
<tr class="white"><td><input type="radio" id="screenRescreen0" onClick="screenSetScreenMaterial(0, 3);"/>Fiberglass</td></tr>
<tr class="ltblue"><td><input type="radio" id="screenRescreen1" onClick="screenSetScreenMaterial(1, 3);"/>Aluminium</td></tr>
<tr class="white"><td><input type="radio" id="screenRescreen2" onClick="screenSetScreenMaterial(2, 3);"/>Pet Proof</td></tr>
</table>

<table class="nostyle">
<tr>
<td class="menu"><div class="menuSub" id="menuSub10" onClick="screenRepairTypeChangeTab(1, 0, 3);" onMouseOver="tabRollOverIn(1, 0, 'menuSubHighlight');" onMouseOut="tabRollOverOut(1, 0, 'menuSub');">Rescreen</div></td>
<td class="menu"><div class="menuSub" id="menuSub11" onClick="screenRepairTypeChangeTab(1, 1, 3);" onMouseOver="tabRollOverIn(1, 1, 'menuSubHighlight');" onMouseOut="tabRollOverOut(1, 1, 'menuSub');">Rescreen and repair frame</div></td>
<td class="menu"><div class="menuSub" id="menuSub12" onClick="screenRepairTypeChangeTab(1, 2, 3); screenNewSetType(0, 2); screenNewFrameSetType(0, 2);" onMouseOver="tabRollOverIn(1, 2, 'menuSubHighlight');" onMouseOut="tabRollOverOut(1, 2, 'menuSub');">Build from scratch</div></td>
</tr>
</table>

<div id="menuSubObj10" style="display: none;">
<table>
<tr>
<td class="white" rowspan="3" style="vertical-align: text-top;"><input type="checkbox" checked="checked" id="screenRescreenSpline" onClick="screenCalcRescreen();"/>Replace spline? (Checked = Yes)</td>
</tr>
</table>
</div>

<div id="menuSubObj11" style="display: none;">
<table width="100%" class="nostyle">
<tr class="white"><td>Replace </td><td><select onChange="screenCalcRebuild();" id="screenCornerCount"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></td><td> Corners</td><td></td><td style="text-align: right;" id="screenReplaceCornerPrice"></td></tr>
<tr class="ltblue"><td>Repair </td><td><select onChange="screenCalcRebuild();" id="screenVerticalCount"><option value="0">0</option><option value="1">1</option><option value="2">2</option></select></td><td> Vertical Sides</td><td align="middle">This will use the corisponding height</td><td style="text-align: right;" id="screenReplaceVerticalPrice"></td></tr>
<tr class="white"><td>Repair </td><td><select onChange="screenCalcRebuild();" id="screenHorizontalCount"><option value="0">0</option><option value="1">1</option><option value="2">2</option></select></td><td> Horizontal Sides</td><td align="middle">and width for pricing.</td><td style="text-align: right;" id="screenReplaceHorizontalPrice"></td></tr>
<tr class="ltblue"><td>Replace </td><td><select onChange="screenCalcRebuild();" id="screenPinCount"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></td><td> Pins</td><td></td><td style="text-align: right;" id="screenReplacePinPrice"></td></tr>
<tr class="white"><td>Replace </td><td><select onChange="screenCalcRebuild();" id="screenSpringCount"><option value="0">0</option><option value="1">1</option><option value="2">2</option></select></td><td> Retaining Springs</td><td></td><td style="text-align: right;" id="screenReplaceSpringPrice"></td></tr>
<tr class="ltblue"><td>Replace </td><td><select onChange="screenCalcRebuild();" id="screenTabCount"><option value="0">0</option><option value="1">1</option><option value="2">2</option></select></td><td> Pull Tabs</td><td></td><td style="text-align: right;" id="screenReplaceTabPrice"></td></tr>
<tr class="white"><td>Replace </td><td><select onChange="screenCalcRebuild();" id="screenRollerCount"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></td><td> Rollers</td><td></td><td style="text-align: right;" id="screenReplaceRollerPrice"></td></tr>
<tr class="white"><td>Replace or add </td><td><select onChange="screenCalcRebuild();" id="screenDividerCount"><option value="0">No</option><option value="1">Yes</option></select></td><td> Divider (Uses width)</td><td></td><td style="text-align: right;" id="screenReplaceDividerPrice"></td></tr>
</table>
</div>

<div id="menuSubObj12" style="display: none;">
<table width="100%" class="nostyle">
<tr class="screenEstSubHeader"><td colspan="2">What type of screen?</td></tr>
<tr class="white"><td width="50%"><input type="radio" id="screenNewType0" onClick="screenNewSetType(0, 2);"/>Window</td>
<td id="screenNewWindowOptions">Does the screen use springs and pull tabs or does it use retaining pins?<br/>
<input type="radio" id="screenNewFrameType0" onClick="screenNewFrameSetType(0, 2);"/>Springs and tabs<br/>
<input type="radio" id="screenNewFrameType1" onClick="screenNewFrameSetType(1, 2);"/>Pins</td></tr>
<tr class="ltblue"><td colspan="2"><input type="radio" id="screenNewType1" onClick="screenNewSetType(1, 2);"/>Door</td></tr>
<tr class="white"><td colspan="2"><input type="checkbox" id="screenNewCenterSupport" onClick="screenCalcPrice();"/>Does the window/door have a center support?</td></tr>
</table>
</div>
Screen prices are not correct on computer estimates with very large screens compared to Alex's price book.
</div>

<div id="menuSubObj03" style="display: none;">
<table>
<tr><td>Window</td></tr>
</table>
</div>

</div>
<div class="content-footer">
</div>
</div>

</div>

</body>
</html>
