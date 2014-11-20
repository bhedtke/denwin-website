<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Ace Hardware - General Links</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />
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
<script language="javascript" src="javascript/getWeather.js"></script>
<script language="javascript" src="javascript/json2.js"></script>
<script language="javascript" src="javascript/jQuery.js"></script>

</head>
<body onLoad="changeTab(0, 0, 3); getWeather(55124);">



<div class="content">

<div class="menu-shadow">
<table class="nostyle" width=100%>
<tr>
<td class="menu"><a class="nostyle" href="index.php"><div id="mainMenuId0" class="menuMainCurrent" style="border-radius: 0px 0px 0px 10px;" onMouseOver="menuRollOverIn('mainMenuId0', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId0', 'menuMainCurrent');">General</div></a></td>
<td class="menu"><a class="nostyle" href="parts.php"><div id="mainMenuId1" class="menuMain" onMouseOver="menuRollOverIn('mainMenuId1', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId1', 'menuMain');">Small Engine</div></a></td>
<td class="menu"><a class="nostyle" href="estimator.php"><div id="mainMenuId2" class="menuMain" onMouseOver="menuRollOverIn('mainMenuId2', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId2', 'menuMain');">Estimator</div></a></td>
<td class="menu"><a class="nostyle" href="local.php"><div id="mainMenuId3" class="menuMain" style="border-radius: 0px 0px 10px 0px;" onMouseOver="menuRollOverIn('mainMenuId3', 'menuMainHighlight');" onMouseOut="menuRollOverIn('mainMenuId3', 'menuMain');">Local Stores</div></a></td>
</tr>
</table>
</div>

<div class="contentMainShadow">
<form method="get" action="http://www.google.com/search"> 
<table class="nostyle">
	<tr><td align="left" style="width: 650px;"><input style="width: 650px; border-radius: 10px;" type="text" name="q" size="31" maxlength="255" value="" /></td><td align="right"><input type="submit" align="right" value="Google Search" style="border-radius: 10px;"/></td></tr>
	</table>
</form>
</div>

<div class="contentMainShadow">
<div class="contentHeader">
<table class="nostyle" width=100%>
<tr>
<td class="menu"><div class="menuSub" id="menuSub00" style="border-radius: 10px 0px 0px 0px;" onclick="changeTab(0, 0, 3);" onMouseOver="tabRollOverIn(0, 0, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 0, 'menuSub');">General Links</div></td>
<td class="menu"><div class="menuSub" id="menuSub01" onclick="changeTab(0, 1, 3);" onMouseOver="tabRollOverIn(0, 1, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 1, 'menuSub');">Rep. Contacts</div></td>
<td class="menu"><div class="menuSub" id="menuSub02" style="border-radius: 0px 10px 0px 0px;" onclick="changeTab(0, 2, 3);" onMouseOver="tabRollOverIn(0, 2, 'menuSubHighlight');" onMouseOut="tabRollOverOut(0, 2, 'menuSub');">Employee Phone List</div></td>
</tr>
</table>

<div class="generalList" id="menuSubObj00" style="display: none;">

<div>
	<table class="generalElement">
		<tr class="white">
			<td align="left"><a href="http://ww1.acehardware-acenet.com/Default1.asp">ACENET</a></td>
			<td align="middle">Ace Catalog (Internet Explorer Only)</td>
			<td align="right"><button onClick="expandInfo('acenetInfo');">Login Info</button></td>
		</tr>
		<tr class="white" id="acenetInfo" style="display: none;">
			<td colspan="3">
			<table>
			<tr><td>Store Number: 9594</td></tr>
			<tr><td>Username: SALES</td></tr>
			<tr><td>Password: CLERK</td></tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue">
			<td align="left"><a href="http://www.colwellindustries.com/sampleoe/default.asp?cnum=A0910">Ace Paint Chip Ordering</a></td>
			<td align="right">Username: ACE09594<br>Password: ACE111</td>
		</tr>
		<tr class="white">
			<td align="left">Associates: <a href="http://client.itasker.com/">Task Master</a></td>
			<td align="right"><button onClick="expandInfo('schedules');">View Schedules Directory</button></td>
		</tr>
		<tr class="white" id="schedules" style="display: none;">
			<td colspan="3" style="padding: 0px;">
				<table class="nostyle">
					<tr><td align="right"><button onClick="document.getElementById('iframeSchedule').src = 'schedules/?C=M'">Return to schedules list</button></td></tr>
					<tr><td><iframe src="schedules/?C=M" id="iframeSchedule" frameborder="0" style="width: 100%; height: 400px;">Your browser doesnt support iframes</iframe></td></tr>
				</table>
			</td>
		</tr>
		<tr class="ltblue">
			<td align="left">Supervisors: <a href="http://mytaskmaster.com">My Task Master</a></td>
			<td align="right"><button onClick="expandInfo('taskMasterInfo');">More Info</button></td>
		</tr>
		<tr class="ltblue" id="taskMasterInfo" style="display: none;">
			<td colspan="3" style="padding: 0px;">
				<table>
					<tr><td><p>Your default username and password should be as follows. First initial, full last name and your store number (All letters are capitol). Example: Mike McHugh would be MMCHUGH9594.</p></td></tr>
					<tr><td>Supervisors use the following link for printing reports</td></tr>
				</table>
			</td>
		</tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="white">
			<td class="mailHeader" colspan="6">Email Web Sites</td>
		</tr>
		<tr class="white">
			<td class="mailSubHeader"><a href="http://mail.denwinhardware.com">Ace eMail</a></td>
			<td class="mailSubHeader"><a href="http://mail.aol.com">Aol Mail</a></td>
			<td class="mailSubHeader"><a href="http://www.gmail.com">GMail</a></td>
			<td class="mailSubHeader"><a href="http://www.icloud.com">iCloud</a></td>
			<td class="mailSubHeader"><a href="http://mail.msn.com">MSN / Hotmail</a></td>
			<td class="mailSubHeader"><a href="http://mail.yahoo.com">Yahoo Mail</a></td>
		</tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue">
			<td align="left"><a href="http://store.weber.com">Weber Parts Finder</a></td>
			<td align="right"><button onClick="expandInfo('weberGrillList');">Grill List</button><button onClick="expandInfo('weberInfo');">More Info</button></td>
		</tr>
		<tr class="ltblue" id="weberInfo" style="display: none;">
			<td colspan="2">
			<table>
			<tr><td colspan="2">Use the weber parts finder to determine parts if the customer doesnt know the model number of the machine.</td></tr>
			<tr><td rowspan="3" width="60%">Use the following link to get pricing information for parts. Shipping is usually about $9.00 for an order of small parts.</td><td width="40%"><a href="http://rrc.weber.com/">Weber RRC</a></td></tr><tr><td>Login: applevalley</td></tr><tr><td>Password: app9594</td></tr>
			</table>
			</td>
		</tr>
		<tr class="white" id="weberGrillList" style="display: none;">
			<td>
				<p>Ace changed most weber SKU's so until further notice the weber grill list will not be available.</p>
			</td>
		</tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="white"><td align="left">Cashier Documents Directory</td><td align="right"><button onClick="expandInfo('documents');">List of Documents</button></td></tr>
		<tr class="white" id="documents" style="display: none;"><td colspan="2" style="padding: 0px;">
			<table class="nostyle">
				<tr><td align="right"><button onClick="document.getElementById('iframeDocs').src = 'documents'">Return to documents list</button></td></tr>
				<tr><td><iframe src="documents" id="iframeDocs" frameborder="0" style="width: 100%; height: 400px;">Your browser doesnt support iframes</iframe></td></tr>
			</table>
		</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue"><td align="left">Rental Item Information</td><td align="right"><button onClick="expandInfo('rentals');">Show Rental Items</button></td></tr>
		<tr class="ltblue" id="rentals" style="display: none;"><td colspan="2" style="padding: 0px;">
			<table class="rentals">
				<tr><td class='rentalTableHeader'>Rental Item Name</td><td class='rentalTableHeader'>SKU</td><td class='rentalTableHeader'>Hourly Rate</td><td class='rentalTableHeader'>Hour Minimum</td></tr>
				<tr><td>Aerator #1</td><td>500510</td><td>$18.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Appliance Dolly</td><td>121212</td><td>$10.00</td><td>4 Hr min.</td></tr>
				<tr><td>Basin Wrench</td><td>300334</td><td>$5.00</td><td>1 Day min.</td></tr>
				<tr><td>Belt Sander</td><td>RE</td><td>$10 (4Hr.) $20 (Day)</td><td>4 Hr. min.</td></tr>
				<tr><td>Ben Moore Color Bag (Preview)</td><td>DP</td><td>$50 Deposite</td><td>1 Day min.</td></tr>
				<tr><td>Ben Moore Color Bag (Classic)</td><td>DP</td><td>$50 Deposite</td><td>1 Day min.</td></tr>
				<tr><td>Bolt Cutter Large</td><td>100506</td><td>$5 Day</td><td>1 Day min.</td></tr>
				<tr><td>Circular Saw (7 1/4")</td><td>200220</td><td>$8 (4 Hrs.) $15 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Dolly</td><td>200200</td><td>$10.00 day</td><td>1 Day min.</td></tr>
				<tr><td>Echo Gas Broom</td><td>300336</td><td>$15.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Faucet Socket</td><td>100700</td><td>$5.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Fence Post Driver</td><td>800503</td><td>$20.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Flaring Tool</td><td>100400</td><td>$5.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Hole Saw (All Sizes)</td><td>800504</td><td>$5 Day</td><td>1 Day min.</td></tr>
				<tr><td>10 Foot Ladder</td><td>300301</td><td>$15 Day</td><td>1 Day min.</td></tr>
				<tr><td>24 Foot Ladder</td><td>300328</td><td>$15 Day</td><td>1 Day min.</td></tr>
				<tr><td>Lawn Edger</td><td>100600</td><td>$13.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Lawn Mower</td><td>401401</td><td>$10.00 Hr. ($5 off for loaner)</td><td>2 Hr min.</td></tr>
				<tr><td>Lawn Roller #90</td><td>300390</td><td>$10 (4 Hrs.) $15 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Lawn Roller #91</td><td>300391</td><td>$10 (4 Hr) $15 (Day)</td><td>4 Hr min.</td></tr>
				<tr><td>Lawn Roller #92</td><td>300392</td><td>$10 (4 Hr) $15 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Moen Stem Remover #1</td><td>100101</td><td>$5 Day</td><td>1 Day min.</td></tr>
				<tr><td>Moen Stem Remover #2</td><td>100102</td><td>$5 Day</td><td>1 Day min.</td></tr>
				<tr><td>Paint Stripping Machine</td><td>100111</td><td>$15.00 day with Paint purchase</td><td>1 Day min.</td></tr>
				<tr><td>Pipe Wrench</td><td>800012</td><td>$5.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Post Driver</td><td>RE</td><td>$5 Day</td><td>1 Day min.</td></tr>
				<tr><td>Post Hole Digger Auger</td><td>800500</td><td>$10.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Post Hole Digger Spade</td><td>800501</td><td>$10.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Power Rake w/ Bag #259</td><td>200259</td><td>$20.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Power Rake w/ bag #274</td><td>200274</td><td>$20.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Power Rake w/ bag #277</td><td>772002</td><td>$20.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Power Rake w/o bag #247</td><td>200247</td><td>$18.50 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Power Rake w/o bag #250</td><td>200250</td><td>$18.50 hr</td><td>2 Hr min.</td></tr>
				<tr><td>Power Washer Electric</td><td>140002</td><td>$35 (4 hrs) $50 (8 hrs)</td><td>4 Hr min.</td></tr>
				<tr><td>Power Washer Gas</td><td>100004</td><td>$50.00 (4 hrs) $60 (8 hrs)</td><td>2 Hr min.</td></tr>
				<tr><td>Ramps</td><td>RE</td><td>$8 day</td><td>1 Day min.</td></tr>
				<tr><td>Palm Sander</td><td>600100</td><td>$8 (4 hr) $15 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Sawzall</td><td>600101</td><td>$8 (4 hr) $15 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Seat Wrench</td><td>800322</td><td>$5.00 day</td><td>1 day min.</td></tr>
				<tr><td>Sewer Auger 25 Inch</td><td>800325</td><td>$5.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Sewer Auger 50 inch</td><td>800350</td><td>$10.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Sledge Hammer</td><td>800302</td><td>$5.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Slicer/Seeder #328</td><td>800328</td><td>$20.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Slit Seeder</td><td>800328</td><td>$20.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Sod Cutter #3</td><td>600003</td><td>$8 (4 hr) $15 (day)</td><td> 4 Hr min.</td></tr>
				<tr><td>Sod Cutter #6</td><td>600006</td><td>$8 (4 hr) $15 (day) </td><td>4 Hr min.</td></tr>
				<tr><td>Sod Roller</td><td>RE</td><td>$8 (4hrs) $15 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Drop Spreader #432</td><td>800432</td><td>$5 (4 hrs) $8 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Drop Spreader #10</td><td>800010</td><td>$5 (4 hrs) $8 (day) </td><td>4 Hr min.</td></tr>
				<tr><td>Rotary Spreader #1</td><td>800101</td><td>$5 (4 hrs) $8 (day) </td><td>4 Hr min.</td></tr>
				<tr><td>Rotary Spreader #2</td><td>800102</td><td>$5 (4 hr) $8 (day)</td><td>4 Hr min.</td></tr>
				<tr><td>Tamper</td><td>800001</td><td>$10.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Tile Cutter</td><td>800110</td><td>$10.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Tiller #2</td><td>700002</td><td>$10.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Tiller #3</td><td>700003</td><td>$10.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Echo Q cycle Tiller</td><td>700006</td><td>$10.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Large Rearline Tiller</td><td>700005</td><td>$15.00 Hr.</td><td>2 Hr min.</td></tr>
				<tr><td>Toilet Auger</td><td>800100</td><td>$8.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Large Live Trap</td><td>800505</td><td>$25.00 Week</td><td>1 Week</td></tr>
				<tr><td>Small Live Trap</td><td>RE</td><td>$25.00 Week</td><td>1 Week</td></tr>
				<tr><td>Tree Trimmer</td><td>800002</td><td>$10.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Utility Pump</td><td>800502</td><td>$10.00 Day</td><td>1 Day min.</td></tr>
				<tr><td>Wall Paper Steamer</td><td>800013 (4Hr) 800014 (Day)</td><td>$15 (4Hr) $30 (Day)</td><td>4 Hr min.</td></tr>
				<tr><td>Plug Wrench</td><td>RE</td><td>Price Unknown</td><td>2 Hr min.</td></tr>
			</table>
		</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="white"><td align="left"><a href="http://bm.faicentral.com/logina">Ben Moore Ordering</a></td><td align="right"><button onClick="expandInfo('benmoore');">More Info</button></td></tr>
		<tr class="white" id="benmoore" style="display: none;"><td colspan="2">No Extra Info Yet</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue"><td align="left"><a href="http://acehardware.woosterbrush.com">Wooster Ace Site</a></td><td align="right"><button onClick="expandInfo('wooster');">More Info</button></td></tr>
		<tr class="ltblue" id="wooster" style="display: none;"><td colspan="2">No Extra Info Yet</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="white"><td align="left"><a href="http://www.rosemountsawandtool.com/prices.htm">Rosemount Saw and Tool</a></td><td align="right"><button onClick="expandInfo('rosemountSawAndTool');">More Info</button></td></tr>
		<tr class="white" id="rosemountSawAndTool" style="display: none;"><td colspan="2">No Extra Info Yet</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue"><td align="left"><a href="">Sales Calendar</a></td><td align="right"><button onClick="expandInfo('salesCalendar');">More Info</button></td></tr>
		<tr class="ltblue" id="salesCalendar" style="display: none;"><td colspan="2">Link is currently dead. I will get the link from Mike McHugh and reactivate this.</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="white"><td align="left"><a href="http://www.hykokeys.com/key_finder.php">Key Finder</a></td><td align="right"><button onClick="expandInfo('keyFinder');">More Info</button></td></tr>
		<tr class="white" id="keyFinder" style="display: none;"><td colspan="2">No Extra Info Yet</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue"><td align="left" colspan="5"><a href="http://radar.weather.gov/ridge/radar.php?product=NCR&rid=MPX&loop=yes">Weather Map (Radar)</a></td></tr>
		<tr class="ltblue" style="vertical-align: top;"><td align="left" id="currentConditions"></td><td align="left" id="futureConditions1"></td><td align="left" id="futureConditions2"></td><td align="left" id="futureConditions3"></td><td align="left" id="futureConditions4"></td></tr>
	</table>
</div>


<div>
	<table class="generalElement">
		<tr class="white"><td align="left"><a href="old_site"><a href="http://www.google.com/calendar/hosted/denwinhardware.com/embed?src=denwinhardware.com_m8ndb0m01o6tilh28e1pr4r54g%40group.calendar.google.com&ctz=America/Chicago">Time off calander</a></td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue"><td align="left"><a href="https://fusebox.elavon.net/ui/portal.html">Fusebox</a></td><td align="right"><button onClick="expandInfo('fuseBox');">More Info</button></td></tr>
		<tr class="ltblue" id="fuseBox" style="display: none;"><td colspan="2">
		<table class="nostyle">
			<tr><td>Username:</td><td>mike.mchugh@denwinhardware.com</td></tr>
			<tr><td>Password:</td><td>applevalley-09594</td></tr>
		</table>
		</td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="white"><td align="left"><a href="http://www.filtreteondemand.com">Filtrete On Demand</a></td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="ltblue"><td align="left"><a href="http://store6cams.local:7000">Bloomington Security Cameras</a></td></tr>
	</table>
</div>

<div>
	<table class="generalElement">
		<tr class="white"><td align="center"><a href="old_site">Old version of the home page</a></td></tr>
	</table>
</div>


</div>

<div id="menuSubObj01" style="display: none;">

	<table class="nostyle">
		<tr class="white"><td rowspan="2" align="middle" width="155px"><img src="images/reps/epicor.png"/></td><td>Epicor</td><td align="right"><button onClick="expandInfo();">More Info</button></td></tr>
		<tr class="white"><td>Account #: 020991</td><td>Phone: 800-322-3077</td></tr>
		<tr class="white" id="activantInfo" style="display: none;"><td colspan="3">
			<table class="nostyle">
				<tr><td></td></tr>
			</table>
		</td></tr>
		
		<tr class="blue"><td rowspan="3" align="middle"><img src="images/reps/weber.png"/></td><td>Weber</td><td align="right"><button onClick="expandInfo('weberInfo');">More Info</button></td></tr>
		<tr class="blue"><td colspan="2">For parts call Sweeney Wright Wiencek</td></tr>
		<tr class="blue"><td>Weber Reach Us Line</td><td>Phone: 1-800-446-1071</td></tr>
		<tr class="blue" id="weberInfo" style="display: none;"><td colspan="3">
			<table class="nostyle">
				<tr><td></td></tr>
			</table>		
		</td></tr>
		
		<tr class="white"><td rowspan="2" align="middle"></td><td>Sweeney Wright Wiencek</td><td align="right"><button onClick="expandInfo('sweeneyInfo');">More Info</button></td></tr>
		<tr class="white"><td>Rep: Jim Brunn</td><td>Phone: 952-933-2214</td></tr>
		<tr class="white" id="sweeneyInfo" style="display: none;"><td colspan="3">
			<table class="nostyle">
				<tr><td>Jim Brunn</td><td></td></tr>
				<tr><td>952-933-2214</td></tr>
				<tr><td>Kristi Foss</td></tr>
				<tr><td>952-351-5462</td></tr>
			</table>		
		</td></tr>
		
		<tr class="blue"><td rowspan="2" align="middle"><img src="images/reps/scotts.png"/></td><td>The Scotts Company</td><td align="right"><button onClick="expandInfo('scottsInfo');">More Info</button></td></tr>
		<tr class="blue"><td>Rep: Jason Mueller</td><td>Phone: 507-252-5525</td></tr>
		<tr class="blue" id="scottsInfo" style="display: none;"><td colspan="3">
			<table class="nostyle">
				<tr><td></td></tr>
			</table>		
		</td></tr>
		
		<tr class="white"><td rowspan="2" align="middle"><img src="images/reps/mti.png"/></td><td>MTI</td><td align="right"><button onClick="expandInfo('mtiInfo');">More Info</button></td></tr>
		<tr class="white"><td>Consumer Solutions</td><td>Phone: 952-948-4001</td></tr>
		<tr class="white" id="mtiInfo" style="display: none;"><td colspan="3">
			<table class="nostyle">
				<tr><td></td></tr>
			</table>		
		</td></tr>
		
		<tr class="blue"><td rowspan="2.5" align="middle"><img src="images/reps/hillman.png"/></td><td>The Hillman Group</td><td align="right"><button onClick="expandInfo('hillmanInfo');">More Info</button></td></tr>
		<tr class="blue"><td>Rep: Marjorie Zabel</td><td>Phone: 651-357-6234</td></tr>
		<tr class="blue" id="hillmanInfo" style="display: none;"><td colspan="3">
			<table class="nostyle">
				<tr><td></td></tr>
			</table>
		</td></tr>
		
		
		
		<tr class="white"><td rowspan="2" align="middle"><img src="images/reps/iMobileDoctor.jpeg"/></td><td>iMobile Doctor</td><td align="right"><button onClick="expandInfo('iMobileInfo');">More Info</button></td></tr>
		<tr class="white"><td>Support</td><td>Main Phone: 1-800-267-8093 Ext: 700</td></tr>
		<tr class="white" id="iMobileInfo" style="display: none;"><td colspan="3">
			<table class="nostyle">
				<tr><td>Marty Goehner</td><td>Cell Phone: 952-818-9521</td></tr>
			</table>		
		</td></tr>
		
	</table>

</div>

<div id="menuSubObj02" style="display: none;">
	<iframe src="phoneList/phonelist.pdf" id="iframeSchedule" frameborder="0" style="width: 100%; height: 640px;">Your browser doesnt support iframes</iframe>
</div>
<table class="phoneList" id="old-menuSubObj02" style="display: none;">
<tr class="phoneListHeader"><th>Name</th><th>Home Phone</th><th>Cell Phone</th><th>Email Address</th></tr>
<tr class="phoneListSubHeader"><td colspan=4>Simons</td></tr>
<tr class="white"><td>Dennis Simon</td><td>952-758-4315</td><td>952-807-7547</td><td>NA</td></tr>
<tr class="ltblue"><td>Dean Simon</td><td>952-985-0737</td><td>952-807-7549</td><td>deansimon_ace@yahoo.com</td></tr>
<tr class="white"><td>Donald Simon</td><td>952-758-4152</td><td>952-807-7550</td><td>donaldsimon_ace@yahoo.com</td></tr>
<tr class="ltblue"><td>Nickey Simon</td><td>952-892-0764</td><td>952-807-7552</td><td>nickey_simon@yahoo.com</td></tr>
<tr class="phoneListSubHeader"><td colspan=4>Management</td></tr>
<tr class="white"><td>Mike Mchugh</td><td>NA</td><td>952-393-2733</td><td>mike.mchugh@denwinhardware.com</td></tr>
<tr class="ltblue"><td>Jeff Wood</td><td>952-892-3523</td><td>952-836-7648</td><td>jeff.wood@denwinhardware.com</td></tr>
<tr class="white"><td>Jenna Bangasser</td><td>NA</td><td>651-403-0241</td><td>jenna.bang@denwinhardware.com</td></tr>
<tr class="ltblue"><td>Jim Sullivan</td><td>NA</td><td>612-801-3545</td><td>jim.sullivan@denwinhardware.com</td></tr>
<tr class="white"><td>Jim Soulak</td><td>952-686-9299</td><td>NA</td><td>NA</td></tr>
<tr class="ltblue"><td>Dan Davies</td><td>952-898-5361</td><td>NA</td><td>NA</td></tr>
<tr class="white"><td>Tim Wegner</td><td>651-423-0467</td><td>612-845-1345</td><td>NA</td></tr>
<tr class="phoneListSubHeader"><td colspan=4>Full Time Staff</td></tr>
<tr class="white"><td>Louie Wright</td><td>NA</td><td>651-356-2553</td><td>NA</td></tr>
<tr class="ltblue"><td>John Glynn</td><td>651-460-6535</td><td>NA</td><td>john.glynn@denwinhardware.com</td></tr>
<tr class="white"><td>Paul Kuehne</td><td>651-423-6559</td><td>952-820-5916</td><td>paulkuehne@frontier.com</td></tr>
<tr class="ltblue"><td>Marv Johnson</td><td>952-432-8125</td><td>NA</td><td>NA</td></tr>
<tr class="white"><td>Kara Drescher</td><td>952-891-2623</td><td>952-451-3042</td><td>NA</td></tr>
<tr class="phoneListSubHeader"><td colspan=4>Part Time Staff</td></tr>
<tr class="white"><td>Deb Vander Heyden</td><td>952-432-9392</td><td>NA</td><td>djvanderheyden@yahoo.com</td></tr>
<tr class="ltblue"><td>Lisa Eekhoff</td><td>952-431-6837</td><td>NA</td><td>eekhoff@frontiernet.net</td></tr>
<tr class="white"><td>Reed Anderson</td><td>NA</td><td>952-456-1377</td><td>reed.anderson@denwinhardware.com</td></tr>
<tr class="white"><td>Karl Flick</td><td>952-432-4336</td><td>612-961-9705</td><td>karlflick43@gmail.com</td></tr>
<tr class="ltblue"><td>Sean Cahill</td><td>952-953-3605</td><td>NA</td><td>chseancahill@aol.com</td></tr>
<tr class="white"><td>Alan Glass</td><td>651-686-8596</td><td>NA</td><td>NA</td></tr>
<tr class="ltblue"><td>Brian Whelan</td><td>952-469-5265</td><td>NA</td><td>NA</td></tr>
<tr class="white"><td>Shaun Lynch</td><td>612-804-4323</td><td>NA</td><td>NA</td></tr>
<tr class="ltblue"><td>Daniel Wing</td><td>NA</td><td>952-836-5097</td><td>NA</td></tr>
<tr class="white"><td>Zach Eischens</td><td>NA</td><td>1-320-309-4804</td><td>NA</td></tr>
<tr class="phoneListSubHeader"><td colspan=4>Student Staff</td></tr>
<tr class="white"><td>Ben Fleser</td><td>952-431-4158</td><td>952-994-7492</td><td>funkmasterfles11@yahoo.com</td></tr>
<tr class="ltblue"><td>John Greene</td><td>NA</td><td>952-451-7699</td><td>greene02@gmail.com</td></tr>
<tr class="white"><td>Brenna Syrstad</td><td>952-432-2631</td><td>952-693-1562</td><td>brenna.syrstad@yahoo.com</td></tr>
<tr class="ltblue"><td>Ashley Vetter</td><td>952-435-7319</td><td>612-816-3081</td><td>NA</td></tr>
<tr class="white"><td>David Sand</td><td>952-200-9038</td><td>952-688-1036</td><td>david.sand8@gmail.com</td></tr>
<tr class="ltblue"><td>Hailey Smith</td><td>952-997-2622</td><td>952-807-7513</td><td>smith.hailey28@gmail.com</td></tr>
<tr class="white"><td>Julie Balster</td><td>952-469-6039</td><td>507-491-2018</td><td>jkbalster@hotmail.com</td></tr>
<tr class="ltblue"><td>Austin Chouanard</td><td>952-435-1644</td><td>952-843-3794</td><td>austinchouanard@gmail.com</td></tr>
<tr class="white"><td>Taylor Ham</td><td>NA</td><td>952-432-2755</td><td>NA</td></tr>
<tr class="ltblue"><td>Adam Hansen</td><td>NA</td><td>763-412-8369</td><td>NA</td></tr>
<tr class="phoneListSubHeader"><td colspan=4>Mechanics</td></tr>
<tr class="ltblue"><td>Shaun Fenwick</td><td>952-891-8327</td><td>NA</td><td>shaun.fenwick@denwinhardware.com</td></tr>
<tr class="white"><td>Mark Moncur</td><td>NA</td><td>651-324-2956</td><td>mark.moncur@denwinhardware.com</td></tr>
<tr class="ltblue"><td>Tom Murphy</td><td>952-221-5184</td><td>NA</td><td>tom.murphy@denwinhardware.com</td></tr>
</table>

</div>
<div class="content-footer">
</div>
</div>

</div>

</body>
</html>
