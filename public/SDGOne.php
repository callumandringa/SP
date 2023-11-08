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
    // voorbeeld van één element:
$ID = ( int ) $_GET['id'];

/* create a statement */
$sql = 'SELECT * 
        FROM opdrachten
        WHERE ID=?
        ORDER BY Title';

/* create a prepared statement */
$stmt = $connection->prepare($sql);

/* Bind the slug */
$stmt->bind_param('i', $ID);

/* execute query */
$stmt->execute();

/* bind result variables */
$result = $stmt->get_result();

/* Nu wil ik mijn data in een array plaatsen */
$sdgItem = mysqli_fetch_assoc($result);
?>

<h2 class="articleh2php" ><?= $sdgItem["Title"]?></h2>
<p class="articlepphp" ><?= $sdgItem["Beschrijving"]?></p>
<img class="articleimagephp" src="/img/<?= $sdgItem["image"]?>" alt="image">

</div>

</body>
</html>