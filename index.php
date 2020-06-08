
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device=width, initial-scale-1.0">
     <title>Document</title>
  </head>  

  <body>
  <h1>Vstupné</h1>

  <?php 
$age=14;

/*
if ($age > 15) {
    $entryfee = 100;
} else {
    $entryfee = 50;
}
*/

if (($age <= 15) || ($age >= 65)) {
    $entryfee = 50;
} else {
    $entryfee = 100;
}

?>


<p>Jelikož ti je <?= $age ?>, tak platíš <?= $entryfee ?> Kč. </p>

</body>
</html>