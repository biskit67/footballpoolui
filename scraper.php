<html>
<?php
ini_set('allow_url_fopen', 'On');
$contents=file_get_contents("http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest/");
//$contents = file_get_contents('http://biskitpoolnet.ipage.com/index.html/');

echo $contents;
//preg_match("/3 Day Weather Forecast Summary:/i", $contents, $matches);

//print_r($matches);

?>
</html>