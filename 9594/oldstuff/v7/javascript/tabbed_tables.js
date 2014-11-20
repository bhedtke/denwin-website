var menuSubStates = [0,1,2,3,4,5,6,7,8,9];

function changeTab(menu, current, total)
{
	for (var i=0; i < total; i++){
		document.getElementById("menuSubObj"+menu+i).style.display = 'none';
		document.getElementById("menuSub"+menu+i).setAttribute('class', 'menuSub');

		if (current == i)
		{
			document.getElementById("menuSubObj"+menu+i).style.display = '';
			document.getElementById("menuSub"+menu+i).setAttribute('class', 'menuSubCurrent');
			menuSubStates[menu] = i;
		};
	}
}
function tabRollOverIn(menu, current, focusClass)
{
	document.getElementById('menuSub'+menu+current).setAttribute('class', focusClass);
}
function tabRollOverOut(menu, current, focusClass)
{
	if (menuSubStates[menu] == current)
	{
		document.getElementById('menuSub'+menu+current).setAttribute('class', focusClass+"Current");	
	}
	else
	{
		document.getElementById('menuSub'+menu+current).setAttribute('class', focusClass);	
	}
}
function menuRollOverIn(current, focusClass)
{
	document.getElementById(current).setAttribute('class', focusClass);
}
function menuRollOverOut(current, originalClass)
{
	document.getElementById(current).setAttribute('class', originalClass);
}