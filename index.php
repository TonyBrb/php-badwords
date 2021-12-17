<?php
$paragrafo = 'Ciao come stai?';
$paragrafoModificato = str_replace($_GET, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>

<body>
  <h1>
    Paragrafo: <?php echo $paragrafo; ?>
  </h1>

  <h2>Lunghezza: <?php echo strlen($paragrafo); ?></h2>

  <h2>Paragrafo modificato: <?php echo str_replace($_GET, '***', $paragrafo) ?></h2>
  <h2>Lunghezza paragrafo modificato: <?php echo strlen($paragrafoModificato); ?></h2>
</body>

</html>