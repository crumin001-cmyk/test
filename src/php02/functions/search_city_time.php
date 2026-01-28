<?php

require('config/cities.php');
require('config/cities.php');
foreach ($cities as $city) {
  if ($city['name'] === $city_name) {
  }
}
if ($city['name'] === $city_name) {
  $date_time = new DateTime();
}

$date_time = new DateTime('', new DateTimeZone($city["time_zone"]));
// 略
$time = $date_time->format('H:i');
if ($city['name'] === $city_name) {
  // 略
  $city['time'] = $time;
  return $city;
}


function searchCityTime($city_name)
{
  require('config/cities.php');

  foreach ($cities as $city) {
    if ($city['name'] === $city_name) {
      $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
      $time = $date_time->format('H:i');
      $city['time'] = $time;

      return $city;
    }
  }

}   
