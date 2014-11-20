function expandInfo(row)
{

if (document.getElementById(row).style.display == '') 
{
	document.getElementById(row).style.display = 'none';
}
else
{
	document.getElementById(row).style.display = '';
}

}