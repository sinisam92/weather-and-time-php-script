<?php

  $request = 'http://api.openweathermap.org/data/2.5/weather/?id=3194360&APPID=ac81beead76261aee4679e4eedebb476';
  $response  = file_get_contents($request);
  $weatherResponse = json_decode($response, true);
  $weather = "The weather in " . $weatherResponse['name'] . " is currently " . $weatherResponse['weather'][0]['description'] . ".";
  $temp = $weatherResponse['main']['temp']- 273.15 ;

  $weather .= " The temperature is " . $temp . "&deg;C";
