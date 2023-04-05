<?php

$apiKey = "5de3cbc537861aab28f0bb3e3846400c";
$city = "Riga";

$apiUrl ="http://api.openweathermap.org/geo/1.0/direct?q={$city}&limit=1&appid={$apiKey}";
$geoResponse = file_get_contents($apiUrl);
$geoData = json_decode($geoResponse);


$lat = $geoData[0]->lat;
$lon = $geoData[0]->lon;



$weatherUrl = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";
$geoResponse = file_get_contents($weatherUrl);
$temperatureResponse = json_decode($geoResponse);


$temperature = $temperatureResponse->main->temp;
$humidity = $temperatureResponse->main->humidity;


echo "Temperature in $city  is $temperature °C, and humidity is $humidity and wind speed ";