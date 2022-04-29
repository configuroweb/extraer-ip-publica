<?php

function saber_navegador()
{

    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
        return 'Navegador: Internet explorer';
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
        return 'Navegador:  Internet explorer';
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
        return 'Navegador:  Mozilla Firefox';
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
        return 'Navegador: Google Chrome';
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
        return "Navegador: Opera Mini";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
        return "Navegador: Opera";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
        return "Navegador:  Safari";
    else
        return 'Other';
}
echo  '</br> ' .  $_SERVER['HTTP_USER_AGENT'];
echo '</br> ' . saber_navegador();
echo '</br> IP local: ' . getHostByName(php_uname('n'));
$ip_address = file_get_contents('http://checkip.amazonaws.com/');

echo '</br> IP pública:' . $ip_address;


$PublicIP = "191.95.53.31";
//$PublicIP = $ip_address;

$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
//Breaks down the JSON object into an array
$json     = json_decode($json, true);
//This variable is the visitor's county
$country  = $json['country'];
//This variable is the visitor's region
$region   = $json['region'];
//This variable is the visitor's city
$city     = $json['city'];


echo '</br> País: ' . $country;
echo '</br> Departamento: ' . $region;
echo '</br> Ciudad: ' . $city;
