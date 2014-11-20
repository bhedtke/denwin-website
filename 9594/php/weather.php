<?php
function getWeather()
{
	$zipCode = $_POST['zipCode'];
$requestAddress = "http://www.google.com/ig/api?weather=". $zipCode;
$xml_str = file_get_contents($requestAddress,0);
// Parses XML
$xml = new SimplexmlElement($xml_str);
// Loops XML
	$count = 0;
	$currentConditions = array();
	$currentConditions['condition'] = $xml->weather->current_conditions->condition['data'];
	$currentConditions['tempurature'] = $xml->weather->current_conditions->temp_f['data'];
	$currentConditions['humidity'] = $xml->weather->current_conditions->humidity['data'];
	$currentConditions['wind'] = $xml->weather->current_conditions->wind_condition['data'];
foreach($xml->weather as $item)
{
	$futureConditions = array();
	foreach($item->forecast_conditions as $new)
	{
		$temp['dow'] = $new->day_of_week['data'];
		$temp['condition'] = $new->condition['data'];
		$temp['low'] = $new->low['data'];
		$temp['high'] = $new->high['data'];
		$futureConditions[$count] = $temp;
		$count++;
	}
}
$returnData = array();
$returnData['current'] = $currentConditions;
$returnData['future'] = $futureConditions;
echo json_encode($returnData);
}
getWeather();
?>