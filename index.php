<?php

require_once 'Speedometer.php';

$miles = 7;
$km = 10;

echo $miles . " miles are equals to " . round(Speedometer::convertKmToMiles($miles), 2) . ' km <br>';
echo $km . " km are equals to " . round(Speedometer::convertMilesToKm($km), 2) . ' miles <br>';
?> 

<br><br>
<iframe src="https://giphy.com/embed/Y7O3LHmhllEk" width="480" height="403" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
