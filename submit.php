<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$birthyear = filter_input(INPUT_POST, 'birthyear');
$guessAge = date('Y') - $birthyear;
$school = filter_input(INPUT_POST, 'school');
$hobby = filter_input(INPUT_POST, 'hobby');
$class = filter_input(INPUT_POST, 'class');
$description = filter_input(INPUT_POST, 'description');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<h1> Díky </h1>
<ul>
<li>Jméno a příjmení: <?= $firstname ?> <?= $lastname ?>    </li>
<li>Rok narození: <?= $birthyear ?>   </li>
<li>Odhadovaný věk: <?= $guessAge ?>   </li>
<li>Škola: <?= $school ?>   </li>
<li>Koníčky: <?= $hobby ?>   </li>
<li>Třída: <?= $class ?>   </li>
</ul>
<p> Popis: <?= $description ?>  </p>

</body>
</html>