<?php
include 'info.php';
$ip = $_GET['ip'] ?? $_SERVER['REMOTE_ADDR'];
$ipInfo = new IPInfo($ip);

if ($ipInfo->status == 'fail') {
  echo "<p class=\"detail\">
    IP details for " . $ipInfo->ip . "
    <span id=\"message\" style=\"color: green;\">[Reserved IP]</span>
  </p>";
} else {
  echo "<p class=\"detail\">
    IP details for " . $ipInfo->ip . "
    <span id=\"message\" style=\"color: red;\" hidden>[Invalid IP Address]</span>
  </p>";
}
echo "<h2 class=\"info\">Geolocation information</h2>";

if ($ipInfo->status == 'success') {
  echo "<p>Country code: " . $ipInfo->country_code . "</p>";
  echo "<p>Flag: <img src=\"" . $ipInfo->image_name . "\" alt=\"Flag\" width=\"50\" height=\"30\"></p>";
  echo "<p>Country name: " . $ipInfo->country_name . "</p>";
  echo "<p>Region: " . $ipInfo->region_name . "</p>";
  echo "<p>Region name " . $ipInfo->region_code . "</p>";
  echo "<p>City: " . $ipInfo->city . "</p>";
  echo "<p>Latitude: " . $ipInfo->latitude . "</p>";
  echo "<p>Longitude: " . $ipInfo->longitude . "</p>";
} else {
  echo "<p>Country: N/A</p>";
  echo "Flag: <img src=\"../flags/_unitednations.png\" alt=\"Flag of N/A\" />";
  echo "<p>Region: N/A</p>";
  echo "<p>Region name: N/A</p>";
  echo "<p>City: N/A</p>";
  echo "<p>Latitude: N/A</p>";
  echo "<p>Longitude: N/A</p>";
}
