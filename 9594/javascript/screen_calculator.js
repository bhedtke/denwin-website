
var screenHeight = 12;
var screenWidth = 12;

var screenBuildType = 0;

var screenTotalPriceLow = 0;
var screenTotalPriceHigh = 0;

var screenSqFtPrice = 0;
var laborCost = 12;
var aluminumChannelCost = 1.25;

var screenCornerCount = 0;
var screenVerticalCount = 0;
var screenHorizontalCount = 0;

function screenRepairTypeChangeTab(menu, current, total)
{
	screenBuildType = current;
	changeTab(menu, current, total);
	screenCalcPrice();
}

function screenGetDimensions()
{
	screenHeight = parseFloat(document.getElementById("screenHeightText").value);
	if (document.getElementById("screenHeightText").value == "")
		{
			screenHeight = 0;
		}
	screenWidth = parseFloat(document.getElementById("screenWidthText").value);
	if (document.getElementById("screenWidthText").value == "")
		{
			screenWidth = 0;
		}
	updateShortHandDisplay();
}
function updateShortHandDisplay()
{
	var feet = 0;
	var inches = screenHeight;
	while (inches >= 12)
	{
		inches = inches - 12;
		feet = feet + 1;
	}
	inches = inches.toFixed(1);
	document.getElementById("screenHeightDisplay").innerHTML = "Height: "+feet+" ft. "+inches+" in.";
	
	feet = 0;
	inches = screenWidth;
	while (inches >= 12)
	{
		inches = inches - 12;
		feet = feet + 1;
	}
	inches = inches.toFixed(1);
	document.getElementById("screenWidthDisplay").innerHTML = "Width: "+feet+" ft. "+inches+" in.";
}
function screenCalcPrice()
{
	if (screenBuildType == 0)
	{
		screenCalcRescreen();
	}
	else if (screenBuildType == 1)
	{
		screenCalcRebuild();
	}
	else if (screenBuildType == 2)
	{ 
		screenCalcNew();
	}
}

function screenCalcRescreen()
{	

	var splineCost = 0;
	var screenCost = 0;
	
	screenGetDimensions();
	screenGetScreenPrices();
	
	if (screenWidth > 0 && screenHeight > 0)
	{	
		screenCost = Math.max(20, screenWidth * screenHeight / 144 * screenSqFtPrice + 1.50);
		splineCost = ((screenWidth * 2 + screenHeight * 2) / 12 + 6) * 0.20;
		if ( document.getElementById("screenRescreenSpline").checked == true)
		{
			screenTotalPriceLow = splineCost + screenCost + laborCost;
		}
		else
		{
			screenTotalPriceLow = screenCost + laborCost;
		}
	
		screenCost = (screenWidth + 6) * (screenHeight + 6) / 144 * screenSqFtPrice;
		if ( document.getElementById("screenRescreenSpline").checked == true)
		{
			screenTotalPriceHigh = splineCost + screenCost + laborCost;
		}
		else
		{
			screenTotalPriceHigh = screenCost + laborCost;
		}
		
		screenCalcWritePrice("Est: $"+screenTotalPriceHigh.toFixed(2));
	}
	else
	{
		screenCalcWritePrice("Illegal Dimensions");
	}
}
function screenCalcWritePrice(est)
{
	document.getElementById("screenTotalPrice").innerHTML = est;
}
function screenCalcRebuild()
{
	var splineCost = 0;
	var screenCost = 0;
	var screenRebuildTempLow = 0;
	var screenRebuildTempHigh = 0;
	
	var partsLow = 0;
	var partsHigh = 0;
	
	screenGetDimensions();
	screenGetScreenPrices();
	
	var screenRebuildCornerPriceLow = $("#screenCornerCount").val() * 1;
	var screenRebuildCornerPriceHigh = document.getElementById('screenCornerCount').options[document.getElementById('screenCornerCount').selectedIndex].value * 3;
	document.getElementById("screenReplaceCornerPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: left;'>Min $"+screenRebuildCornerPriceLow.toFixed(2)+"</td>"+"<td style='text-align: right;'>Max $"+screenRebuildCornerPriceHigh.toFixed(2)+"</td></tr></table>";
	
	var screenRebuildVerticalPriceLow = document.getElementById('screenVerticalCount').options[document.getElementById('screenVerticalCount').selectedIndex].value * (laborCost / 30);
	var screenRebuildVerticalPriceHigh = document.getElementById('screenVerticalCount').options[document.getElementById('screenVerticalCount').selectedIndex].value * screenHeight * (aluminumChannelCost / 12) + screenVerticalCount * (laborCost / 12);
	document.getElementById("screenReplaceVerticalPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: left;'>Repair $"+screenRebuildVerticalPriceLow.toFixed(2)+"</td>"+"<td style='text-align: right;'>Replace $"+screenRebuildVerticalPriceHigh.toFixed(2)+"</td></tr></table>";
	
	var screenRebuildHorizontalPriceLow = document.getElementById('screenHorizontalCount').options[document.getElementById('screenHorizontalCount').selectedIndex].value * (laborCost / 30);
	var screenRebuildHorizontalPriceHigh = document.getElementById('screenHorizontalCount').options[document.getElementById('screenHorizontalCount').selectedIndex].value * screenWidth * (aluminumChannelCost / 12) + screenHorizontalCount * (laborCost / 12);
	document.getElementById("screenReplaceHorizontalPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: left;'>Repair $"+screenRebuildHorizontalPriceLow.toFixed(2)+"</td>"+"<td style='text-align: right;'>Replace $"+screenRebuildHorizontalPriceHigh.toFixed(2)+"</td></tr></table>";
	
	var screenRebuildPinPrice = document.getElementById('screenPinCount').options[document.getElementById('screenPinCount').selectedIndex].value * 2;
	document.getElementById("screenReplacePinPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: right;'> Replace $"+screenRebuildPinPrice.toFixed(2)+"</td></tr></table>";
	
	var screenRebuildSpringPrice = document.getElementById('screenSpringCount').options[document.getElementById('screenSpringCount').selectedIndex].value * 1;
	document.getElementById("screenReplaceSpringPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: right;'>Replace $"+screenRebuildSpringPrice.toFixed(2)+"</td></tr></table>";
	
	var screenRebuildTabPriceLow = document.getElementById('screenTabCount').options[document.getElementById('screenTabCount').selectedIndex].value * .5;
	var screenRebuildTabPriceHigh = document.getElementById('screenTabCount').options[document.getElementById('screenTabCount').selectedIndex].value * 1;
	document.getElementById("screenReplaceTabPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: left;'>Min $"+screenRebuildTabPriceLow.toFixed(2)+"</td>"+"<td style='text-align: right;'>Max $"+screenRebuildTabPriceHigh.toFixed(2)+"</td></tr></table>";
	
	var screenRebuildRollerPriceLow = document.getElementById('screenRollerCount').options[document.getElementById('screenRollerCount').selectedIndex].value * 4;
	var screenRebuildRollerPriceHigh = document.getElementById('screenRollerCount').options[document.getElementById('screenRollerCount').selectedIndex].value * 12;
	document.getElementById("screenReplaceRollerPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: left;'>Min $"+screenRebuildRollerPriceLow.toFixed(2)+"</td>"+"<td style='text-align: right;'>Max $"+screenRebuildRollerPriceHigh.toFixed(2)+"</td></tr></table>";
	
	var screenRebuildDividerPriceLow = document.getElementById('screenDividerCount').options[document.getElementById('screenDividerCount').selectedIndex].value * screenWidth * (aluminumChannelCost / 12) + screenHorizontalCount * (laborCost / 12);
	var screenRebuildDividerPriceHigh = document.getElementById('screenDividerCount').options[document.getElementById('screenDividerCount').selectedIndex].value * screenWidth * (aluminumChannelCost / 12) + screenHorizontalCount * (laborCost / 12);
	document.getElementById("screenReplaceDividerPrice").innerHTML = "<table class='nostyle'><tr><td style='text-align: left;'>Min $"+screenRebuildDividerPriceLow.toFixed(2)+"</td>"+"<td style='text-align: right;'>Max $"+screenRebuildDividerPriceHigh.toFixed(2)+"</td></tr></table>";
	
	if (screenWidth > 0 && screenHeight > 0)
	{	
		splineCost = ((screenWidth * 2 + screenHeight * 2) / 12 + 6) * 0.20;
		
		screenCost = Math.max(20, screenWidth * screenHeight / 144 * screenSqFtPrice + 1.5);
		partsLow = screenRebuildCornerPriceLow + screenRebuildVerticalPriceLow + screenRebuildHorizontalPriceLow + screenRebuildPinPrice + screenRebuildSpringPrice + screenRebuildTabPriceLow + screenRebuildRollerPriceLow + screenRebuildDividerPriceLow;
		screenTotalPriceLow = splineCost + screenCost + laborCost + partsLow;
		
		screenCost = (screenWidth + 6) * (screenHeight + 6) / 144 * screenSqFtPrice;
		partsHigh = screenRebuildCornerPriceHigh + screenRebuildVerticalPriceHigh + screenRebuildHorizontalPriceHigh + screenRebuildPinPrice + screenRebuildSpringPrice + screenRebuildTabPriceHigh + screenRebuildRollerPriceHigh + screenRebuildDividerPriceHigh;
		screenTotalPriceHigh = splineCost + screenCost + laborCost + partsHigh;
		
		screenCalcWritePrice("Est: $"+screenTotalPriceHigh.toFixed(2));
	}
	else
	{
		screenCalcWritePrice("Illegal Dimensions");
	}
}
function screenCalcNew()
{
	var splineCost = 0;
	var screenCost = 0;
	var screenRebuildTempLow = 0;
	var screenRebuildTempHigh = 0;
	
	var partsLow = 0;
	var partsHigh = 0;
	
	screenGetDimensions();
	screenGetScreenPrices();
	
	if (document.getElementById("screenNewType0").checked == true)
	{
	var screenRebuildCornerPriceLow = 4 * 1;
	var screenRebuildCornerPriceHigh = 4 * 3;
	var screenRebuildVerticalPriceLow = 2 * screenHeight * (aluminumChannelCost / 12);
	var screenRebuildVerticalPriceHigh = 2 * screenHeight * (aluminumChannelCost / 12);
	var screenRebuildHorizontalPriceLow = 2 * screenWidth * (aluminumChannelCost / 12);
	var screenRebuildHorizontalPriceHigh = 2 * screenWidth * (aluminumChannelCost / 12);
	var screenRebuildRollerPriceLow = 0 * 4;
	var screenRebuildRollerPriceHigh = 0 * 12;
	
	if (document.getElementById("screenNewFrameType0").checked == true)
	{
	var screenRebuildPinPrice = 0;
	var screenRebuildSpringPrice = 2 * 1;
	var screenRebuildTabPriceLow = 2 * .5;
	var screenRebuildTabPriceHigh = 2 * 1;
	}
	else if (document.getElementById("screenNewFrameType1").checked == true)
	{
	var screenRebuildPinPrice = 4 * 2;
	var screenRebuildSpringPrice = 0;
	var screenRebuildTabPriceLow = 0;
	var screenRebuildTabPriceHigh = 0;
	}
	
	}
	else if (document.getElementById("screenNewType1").checked == true)
	{
	var screenRebuildCornerPriceLow = 4 * 1;
	var screenRebuildCornerPriceHigh = 4 * 3;
	var screenRebuildVerticalPriceLow = 2 * screenHeight * (aluminumChannelCost / 12);
	var screenRebuildVerticalPriceHigh = 2 * screenHeight * (aluminumChannelCost / 12);
	var screenRebuildHorizontalPriceLow = 2 * screenWidth * (aluminumChannelCost / 12);
	var screenRebuildHorizontalPriceHigh = 2 * screenWidth * (aluminumChannelCost / 12);
	var screenRebuildRollerPriceLow = 4 * 4;
	var screenRebuildRollerPriceHigh = 4 * 12;
	var screenRebuildPinPrice = 0;
	var screenRebuildSpringPrice = 0;
	var screenRebuildTabPriceLow = 0;
	var screenRebuildTabPriceHigh = 0;
	}
	if ( document.getElementById("screenNewCenterSupport").checked == true)
	{
	var screenRebuildDividerPriceLow = screenWidth * (aluminumChannelCost / 12) + screenHorizontalCount * (laborCost / 12);
	var screenRebuildDividerPriceHigh = screenWidth * (aluminumChannelCost / 12) + screenHorizontalCount * (laborCost / 12);
	}
	else
	{
	var screenRebuildDividerPriceLow = 0;
	var screenRebuildDividerPriceHigh = 0;
	}
	
	if (screenWidth > 0 && screenHeight > 0)
	{	
		splineCost = ((screenWidth * 2 + screenHeight * 2) / 12 + 6) * 0.20;
		
		screenCost = screenWidth * screenHeight / 144 * screenSqFtPrice + 1.5;
		partsLow = screenRebuildCornerPriceLow + screenRebuildVerticalPriceLow + screenRebuildHorizontalPriceLow + screenRebuildPinPrice + screenRebuildSpringPrice + screenRebuildTabPriceLow + screenRebuildRollerPriceLow + screenRebuildDividerPriceLow;
		screenTotalPriceLow = splineCost + screenCost + (laborCost * 2) + partsLow;
		
		screenCost = (screenWidth + 6) * (screenHeight + 6) / 144 * screenSqFtPrice;
		partsHigh = screenRebuildCornerPriceHigh + screenRebuildVerticalPriceHigh + screenRebuildHorizontalPriceHigh + screenRebuildPinPrice + screenRebuildSpringPrice + screenRebuildTabPriceHigh + screenRebuildRollerPriceHigh + screenRebuildDividerPriceHigh;
		screenTotalPriceHigh = splineCost + screenCost + (laborCost * 2) + partsHigh;
		
		screenCalcWritePrice("Est: $"+screenTotalPriceHigh.toFixed(2));
	}
	else
	{
		screenCalcWritePrice("Illegal Dimensions");
	}
}
function screenSetScreenMaterial(current, total)
{
	for (var i=0; i < total; i++)
	{
		document.getElementById("screenRescreen"+i).checked = false;
		if (current == i)
		{
			document.getElementById("screenRescreen"+i).checked = true;
		}
	}
	screenCalcPrice();
}
function screenNewSetType(current, total)
{
	for (var i=0; i < total; i++)
	{
		document.getElementById("screenNewType"+i).checked = false;
		if (current == i)
		{
			document.getElementById("screenNewType"+i).checked = true;
		}
	}
	if (document.getElementById("screenNewType0").checked == true)
	{
		document.getElementById("screenNewWindowOptions").style.display = '';
	}
	else
	{
		document.getElementById("screenNewWindowOptions").style.display = 'none';
	}
	screenCalcPrice();
}
function screenNewFrameSetType(current, total)
{
	for (var i=0; i < total; i++)
	{
		document.getElementById("screenNewFrameType"+i).checked = false;
		if (current == i)
		{
			document.getElementById("screenNewFrameType"+i).checked = true;
		}
	}
	screenCalcPrice();
}
function screenGetScreenPrices()
{
	if (document.getElementById("screenRescreen0").checked == true)
	{
		screenSqFtPrice = 1.09;
	}
	else if (document.getElementById("screenRescreen1").checked == true)
	{
		screenSqFtPrice = 1.29;
	}
	else if (document.getElementById("screenRescreen2").checked == true)
	{
		screenSqFtPrice = 1.99;
	}
}