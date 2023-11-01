<?php
// haal al mijn instellingen op
require_once('../source/config.php');

// haal de database verbinding op
require_once( SOURCE_PATH . 'database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" type="text/css" href="sdg.css">
</head>
<body>
    

<?php

// handle incomming request
// controleer de url, is er misschien een categorie geselecteerd?
$url = explode('/', trim($_SERVER['REQUEST_URI']));
// remove empty values 
$url = array_values(array_filter($url));
// and set a default
if (empty($url[0])) {
    $url[] = 'homeinfo';
}

switch ($url[0]) {
    case 'sdg':
        define('SDG_SLUG', htmlspecialchars($url[1]));
        include(VIEWS_PATH . 'infocard.php');
        break;
    case 'homeinfo':
    default:
        include(VIEWS_PATH . 'homeinfo.php');
}
?>



</div>

</body>
</html>