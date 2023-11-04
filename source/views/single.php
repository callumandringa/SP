<?php
/* create a statement */
$sql = 'SELECT * 
        FROM opdrachten
        WHERE id=?
        ORDER BY Title';

/* create a prepared statement */
$stmt = $mysqli->prepare($sql);

/* Bind the slug */
$stmt->bind_param('i', $id);

/* execute query */
$stmt->execute();

/* bind result variables */
$result = $stmt->get_result();

/* Nu wil ik mijn data in een array plaatsen */
$sdgItem = mysqli_fetch_assoc($result);



?>

<article>
    <h2><?= $sdgItem['Title'] ?></h2>
    <img src="<?= $sdgItem['image'] ?>">
    <p>
        <?= $sdgItem['Beschrijving']?>
    </p>
</article>