<?php
/* create a statement */
$sql = 'SELECT * 
        FROM sdg 
        WHERE slug=?
        ORDER BY title';

/* create a prepared statement */
$stmt = $mysqli->prepare($sql);

/* Bind the slug */
$stmt->bind_param('s', $slug);

/* execute query */
$stmt->execute();

/* bind result variables */
$result = $stmt->get_result();

/* Nu wil ik mijn data in een array plaatsen */
$sdgItem = mysqli_fetch_assoc($result);

?>