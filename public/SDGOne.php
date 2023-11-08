<?php
// haal al mijn instellingen op
require_once('../source/config.php');

// haal de database verbinding op
require_once( SOURCE_PATH . 'database.php');
?>

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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" href="SDGOne.css">
</head>
<body>
<header class="header">
        <figure>
            <img src="IMG/NVVN-favicon copy.png" alt="" class="logo">
        </figure>
        <ul class="naviegatie">
        <li class="nav"><a href="SDGOne.php">SDG Pagina</a></li>
            <li class="nav"><a href="#Game">The Game</a></li>
            <li class="nav"><a href="#Info">Informatie</a></li>
        </ul>
    </header>
    <main class="SDG-BlockMain">

        <section class="SDG-BlockSection">
        <h2 class="articleh2php" ><?= $sdgItem["Title"]?></h2>            
        <img class="articleimagephp" src="/img/<?= $sdgItem["image"]?>" alt="image">
        </section>
        <section class="SDG-BlockSection">
            <figure class="SDG-BlockText">
                <p class="articlepphp" ><?= $sdgItem["Beschrijving"]?></p>
            </figure>
            
        </section>
    </main>
    
    <footer>
        <div class="Footer-Blocks">Voor vragen email naar:</div>
        <div class="Footer-Blocks">Contact<br><a class="Footer-Blocks-A" href="https://www.google.com/">info@nvvn.nl</a></div>
        <img src="img/NVVN-favicon copy.png" alt="">
        <div class="Footer-Blocks">Gemaakt door:</div>
        <div class="Footer-Blocks"><img src="img/SP_Logo.png" alt=""></div>
    </footer>



</body>
</html>