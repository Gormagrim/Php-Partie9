<!DOCTYPE html>
<html lang="fr" dir="ltr" />
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>Exercice 5 partie 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
    
    <?php
    $first = strtotime('2019-02-04');
    $last = strtotime('2016-05-16');
    $delta = ceil(abs($last - $first) / 86400);
    ?>
    <p><?= $delta; ?> jours depuis le 16 mai 2016.</p>
    <a href="../index.php">retour</a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
