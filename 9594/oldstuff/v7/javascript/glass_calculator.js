
var glassMaterialCost = 3.00;
var glassEdgeCost = 0;

var glassTempered = false;

var glassLength = 12;
var glassWidth = 12;
var glassEdgeLength = 12;
var glassEdgeWidth = 12;

var glassSquareInches = 144;

var glassFinalPrice = 3.00;

// The numbers here are only to initilize the array
var glassEdgeFilterArray = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35];

// Clear Window Glass
glassEdgeFilterArray[0] = [false,false,false,true,true,true,true,true,true];
glassEdgeFilterArray[1] = [false,false,false,false,false,true,true,true,true];
// Non-Glare Glass
glassEdgeFilterArray[2] = [false,false,false,true,true,true,true,true,true];
// Clear Float Glass
glassEdgeFilterArray[3] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[4] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[5] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[6] = [false,false,false,false,false,false,false,false,false];
// Bronze/Grey Float
glassEdgeFilterArray[7] = [false,false,false,false,false,true,true,true,true];
glassEdgeFilterArray[8] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[9] = [false,false,false,false,false,false,false,false,false];
// Greylite
glassEdgeFilterArray[10] = [false,false,false,false,false,true,true,true,true];
glassEdgeFilterArray[11] = [false,false,false,false,false,false,false,false,false];
// Acrylic
glassEdgeFilterArray[12] = [false,true,true,true,true,true,true,true,true];
glassEdgeFilterArray[13] = [false,true,true,true,true,true,true,true,true];
glassEdgeFilterArray[14] = [false,true,true,true,true,true,true,true,true];
glassEdgeFilterArray[15] = [false,true,false,true,true,true,true,true,true];
glassEdgeFilterArray[16] = [false,true,false,true,true,true,true,true,true];
glassEdgeFilterArray[17] = [false,true,true,true,true,true,true,true,true];
//Mirror
glassEdgeFilterArray[18] = [false,false,false,true,true,true,true,true,true];
glassEdgeFilterArray[19] = [false,false,false,false,false,true,true,true,true];
glassEdgeFilterArray[20] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[21] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[22] = [false,false,false,false,false,false,false,false,false];
//Tempered Glass
glassEdgeFilterArray[23] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[24] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[25] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[26] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[27] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[28] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[29] = [false,false,false,false,false,false,false,false,false];
//Pyrex
glassEdgeFilterArray[30] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[31] = [false,false,false,false,false,false,false,false,false];
//Neoceram
glassEdgeFilterArray[32] = [false,false,false,false,false,false,false,false,false];
//Wire Glass
glassEdgeFilterArray[33] = [false,true,true,true,false,true,true,true,true];
//Laminated Glass
glassEdgeFilterArray[34] = [false,false,false,false,false,false,false,false,false];
glassEdgeFilterArray[35] = [false,false,false,false,false,false,false,false,false];

function glassChangeMaterialType(current, value)
{
	var total = 36;
	for (var i=0; i < total; i++)
	{
		document.getElementById("glassMaterialType-"+i).checked = false;
		if (current == i)
		{
			document.getElementById("glassMaterialType-"+i).checked = true;
			glassMaterialCost = value;
			document.getElementById("glassDisplayMaterialPrice").value = value.toFixed( 2 );
		}
	}
	glassTempered = false;
	for (var i=23; i < 30; i++)
	{
		if (current == i)
		{
			glassTempered = true;
		}
	}
	glassCalcPrice();
	glassEdgeFilter(current);
}

function glassChangeEdgeType(current, value)
{
	var total = 9;
	for (var i=0; i < total; i++)
	{
		document.getElementById("glassEdgeType-"+i).checked = false;
		if (current == i)
		{
			document.getElementById("glassEdgeType-"+i).checked = true;
			glassEdgeCost = value;
			document.getElementById("glassDisplayEdgePrice").value = value.toFixed( 2 );
		}
	}
	glassCalcPrice();
}

function glassCalcPrice()
{
	glassLength = parseFloat(document.getElementById("glassLengthFt").options(document.getElementById("glassLengthFt").selectedIndex).value);
	glassLength = glassLength + parseFloat(document.getElementById("glassLengthIn").options(document.getElementById("glassLengthIn").selectedIndex).value);
	glassLength = glassLength + parseFloat(document.getElementById("glassLengthFr").options(document.getElementById("glassLengthFr").selectedIndex).value);

	glassWidth = parseFloat(document.getElementById("glassWidthFt").options(document.getElementById("glassWidthFt").selectedIndex).value);
	glassWidth = glassWidth + parseFloat(document.getElementById("glassWidthIn").options(document.getElementById("glassWidthIn").selectedIndex).value);
	glassWidth = glassWidth + parseFloat(document.getElementById("glassWidthFr").options(document.getElementById("glassWidthFr").selectedIndex).value);

	glassEdgeWidth = glassWidth;
	if (glassEdgeWidth < 12)
		{
			glassEdgeWidth = 12;
		}
	glassEdgeLength = glassLength;
	if (glassEdgeLength < 12)
		{
			glassEdgeLength = 12;
		}
	glassSquareInches = glassLength * glassWidth;
	if (glassTempered == true && glassSquareInches < 432)
		{
			glassSquareInches = 432;
		}
	glassMultiple = parseFloat(document.getElementById("glassMultiple").options(document.getElementById("glassMultiple").selectedIndex).value);
	
	glassFinalSinglePrice = glassSquareInches / 144 * glassMaterialCost + glassEdgeWidth * 2 * glassEdgeCost + glassEdgeLength * 2 * glassEdgeCost;
	glassFinalMultiplePrice = glassFinalSinglePrice * glassMultiple;
	document.getElementById("glassFinalPrice").innerHTML = '<div class="alignleft">Individual Cost:</div><div class="alignright">$'+glassFinalSinglePrice.toFixed(2)+'</div><br /><div class="alignleft">Grand Total:</div><div class="alignright">$'+glassFinalMultiplePrice.toFixed(2)+'</div>';
	document.getElementById("glassShowMath").innerHTML = '<div align="middle">'+glassLength+'in. * '+glassWidth+'in. / 144 * $'+glassMaterialCost.toFixed(2)+' + '+glassEdgeLength+'in. * 2 * $'+glassEdgeCost.toFixed(2)+' + '+glassEdgeWidth+'in. * 2 * $'+glassEdgeCost.toFixed(2)+' = $'+glassFinalSinglePrice.toFixed(2)+' each</div>';
}

function format(input)
{
	var num = input.value.replace(/\,/g,'');
	if(!isNaN(num)){
		if(num.indexOf('.') > -1){
			num = num.split('.');
			num[0] = num[0].toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1,').split('').reverse().join('').replace(/^[\,]/,'');
			if(num[1].length > 2){
				alert('You may only enter two decimals!');
				num[1] = num[1].substring(0,num[1].length-1);
			}
			input.value = num[0]+'.'+num[1]; 
		}
		else{
			input.value = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1,').split('').reverse().join('').replace(/^[\,]/,'');
		}
	}
	else{
		alert('You may enter only numbers in this field!');
		input.value = input.value.substring(0,input.value.length-1);
	}
}

function glassEdgeFilter(current)
{	
	var total = 9;
	for (var i=0; i < total; i++)
	{
		if (document.getElementById("glassEdgeType-"+i).checked == true && glassEdgeFilterArray[current][i] == true)
			{
				glassChangeEdgeType(0, 0.00);
			}
		document.getElementById("glassEdgeType-"+i).disabled = glassEdgeFilterArray[current][i];
		
	}
}