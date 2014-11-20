
var screenLength = 12;
var screenWidth = 12;

var screenBuildType = 0;

var screenTotalPriceLow = 0;
var screenTotalPriceHigh = 0;

var screenSqFtPrice = 0;
var laborCost = 12;

function screenRepairTypeChangeTab(menu, current, total)
{
	screenBuildType = current;
	changeTab(menu, current, total);
	screenCalcPrice();
}

function screenGetDimensions()
{
	screenLength = parseFloat(document.getElementById("screenLengthFt").options(document.getElementById("screenLengthFt").selectedIndex).value);
	screenLength = screenLength + parseFloat(document.getElementById("screenLengthIn").options(document.getElementById("screenLengthIn").selectedIndex).value);
	
	screenWidth = parseFloat(document.getElementById("screenWidthFt").options(document.getElementById("screenWidthFt").selectedIndex).value);
	screenWidth = screenWidth + parseFloat(document.getElementById("screenWidthIn").options(document.getElementById("screenWidthIn").selectedIndex).value);
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
	screenRescreenGetVariables();
	
	if (screenWidth > 0 && screenLength > 0)
	{	
		splineCost = (screenWidth * 2 + screenLength * 2) / 12 * 0.20;
	
		screenCost = screenWidth * screenLength / 144 * screenSqFtPrice;
		screenTotalPriceLow = splineCost + screenCost + laborCost;
		document.getElementById("screenTotalPriceLow").value = screenTotalPriceLow.toFixed(2);
	
		screenCost = (screenWidth + 6) * (screenLength + 6) / 144 * screenSqFtPrice;
		splineCost = ((screenWidth * 2 + screenLength * 2) / 12 + 6) * 0.20;
		screenTotalPriceHigh = splineCost + screenCost + laborCost;
		document.getElementById("screenTotalPriceHigh").value = screenTotalPriceHigh.toFixed(2);
	}
	else
	{
		document.getElementById("screenTotalPriceLow").value = "Illegal Dimensions";
		document.getElementById("screenTotalPriceHigh").value = "Illegal Dimensions";
	}
}
function screenCalcWritePrice(high, low)
{

}
function screenCalcRebuild()
{
	screenGetDimensions();
	
	document.getElementById("screenTotalPrice").value = screenWidth + screenLength;
}

function screenCalcNew()
{
	screenGetDimensions();
	
	document.getElementById("screenTotalPrice").value = screenWidth + screenLength;
}
function screenRescreenSetScreenMaterial(current, total)
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
function screenRescreenGetVariables()
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