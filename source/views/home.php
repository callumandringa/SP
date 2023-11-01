<?php
// loop door het resultaat
// voorbeeld met het ophalen van alle data en dan de titel weer te geven
$sql = 'SELECT * FROM opdrachten ORDER BY Title';
$result = $connection->query($sql);

// ik loop door het resultaat uit de database heen
// ik vul elke keer de variabele $sdgItem die ik vervolgens weergeef in mijn kaartje
while ($sdgItem = $result->fetch_assoc()) {
    include( 'card.php');
}
