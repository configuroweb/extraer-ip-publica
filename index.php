<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Pública</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>


    <h1>Extraer IP Pública ConfiguroWeb</h1>
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
    $ip_address = file_get_contents('http://checkip.amazonaws.com/');
    echo '</br> <h3>IP pública: ' . $ip_address . '</h3>';
    echo '</br> <h5>  IP local: ' . getHostByName(php_uname('n'));
    echo '</br>' . saber_navegador() . '</h5>';

    $PublicIP = "191.95.48.192";
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


    echo '</br><h5> País: ' . $country;
    echo '</br> Departamento: ' . $region;
    echo '</br> Ciudad: ' . $city . '</h5>';

    ?>


    <footer>
        <p>El código lo puedes descargar aquí: <a href="https://www.configuroweb.com/script-php-para-extraer-la-ip-publica-desde-el-navegador/">ConfiguroWeb</a>
        </p>
    </footer>




</body>

</html>