function getWeather(zipCode){
  $.post("php/weather.php", {zipCode : zipCode}, function(returnData){
   if (returnData.length>0){
   var obj = $.parseJSON(returnData);
     $("#currentConditions").html( "Today<br />Conditions: " + obj.current.condition[0] + "<br />High: " + obj.future[0].high[0] + " degrees<br />Low: " + obj.future[0].low[0] + " degrees<br />Current: " + obj.current.tempurature[0] + " degrees<br />" + obj.current.humidity[0] + "<br />" + obj.current.wind[0]);
     $("#futureConditions1").html( obj.future[1].dow[0] + "<br />Conditions: " + obj.future[1].condition[0] + "<br />High: " + obj.future[1].high[0] + " degrees<br />Low: " + obj.future[1].low[0] + " degrees");
     $("#futureConditions2").html( obj.future[2].dow[0] + "<br />Conditions: " + obj.future[2].condition[0] + "<br />High: " + obj.future[2].high[0] + " degrees<br />Low: " + obj.future[2].low[0] + " degrees");
     $("#futureConditions3").html( obj.future[3].dow[0] + "<br />Conditions: " + obj.future[3].condition[0] + "<br />High: " + obj.future[3].high[0] + " degrees<br />Low: " + obj.future[3].low[0] + " degrees");
   } 
  }) 
} 