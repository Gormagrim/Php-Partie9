<?php
$months = array('1' => 'janvier', '2' => 'février', '3' => 'mars', '4' => 'avril', '5' => 'mai', '6' => 'juin', '7' => 'juillet', '8' => 'aôut', '9' => 'septembre', '10' => 'octobre', '11' => 'novembre', '12' => 'décembre');
$days = array('0' => 'dimanche', '1' => 'lundi', '2' => 'mardi', '3' => 'mercredi', '4' => 'jeudi', '5' => 'vendredi', '6' => 'samedi');
if (isset($_POST['month'])) {
    $month = $_POST['month'];
}

if (isset($_POST['years'])) {
    $years = $_POST['years'];
}
$daysInMonth = intval(date('t', mktime(0, 0, 0, $month, 1, $years)));
$firstDayOfMonth = intval(date("w", mktime(0, 0, 0, $month, 1, $years)));
$firstDayNumber = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr" />
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>TP partie 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
        En fonction des choix, afficher un calendrier comme celui ci :</p>
    <form action="index.php" method="POST">
        <label for="month">Sélectionnez un mois.</label>
        <select name="month" id="month">
            <?php
            // Je cré une boucle pour l'affichage des mois dans la liste déroulante.
            foreach ($months as $key => $monthName) {
                ?>
                <option value="<?= $key ?>"<?= $month == $key ? 'selected' : '' ?>><?= $monthName ?></option>;
            <?php }
            ?>
        </select>
        <label for="years">Sélectionnez une année.</label>
        <select name="years" id="years">
            <?php
            // je cré une boucle pour l'affichage des années dans la liste déroulante.
            for ($year = 1970; $year <= 2030; $year++) {
                ?>
                <option value="<?= $year ?>"<?= $years == $year ? 'selected' : '' ?>><?= $year ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="submit" value="Valider" class="btn btn-primary" />
    </form>
    <table>
        <tbody>

            <tr class="days">
                <?php 
                echo $month;
                echo $firstDayOfMonth;
                echo $daysInMonth;
                foreach ($days as $key => $day) { ?>
                    <th><?= $day ?></th>  
                <?php } ?>
            </tr>
                <tr>
                    <?php
                    for ($day = 0; $day <= $firstDayOfMonth; $day++) {
                        // Si le premier jour du mois est égal à au numéro de jour du tableau.
                        if ($firstDayOfMonth == $day) {
                            // Alors j'affiche le numéro 1 dans la case
                            ?>
                    <td><?= $firstDayNumber ?></td>
                        <?php $firstDayNumber ++ ?>
                  <?php } else { ?>
                      <td class="empty"></td>
                 <?php }
                    } 
                    for ($day > $firstDayOfMonth; $day <= 6; $day++) { ?>
                        <td><?= $firstDayNumber ++ ?></td>  
                   <?php }
                    ?>
                </tr>
                 <tr>
                    <?php
                    for ($day = 8; $day <= 14; $day++) { ?>              
                    <td><?= $firstDayNumber ++ ?></td>                 
                   <?php } ?>
                </tr>
                <tr>
                    <?php
                    for ($day = 15; $day <= 21; $day++) { ?>              
                    <td><?= $firstDayNumber ++ ?></td>                 
                   <?php } ?>
                </tr>
                <tr>
                    <?php
                    for ($day = 22; $day <= 28; $day++) { ?>              
                    <td><?= $firstDayNumber ++ ?></td>                 
                   <?php } ?>
                </tr>
                <tr>
                    <?php
                    for ($day = 29; $day <= ($daysInMonth + $firstDayOfMonth); $day++) { ?>              
                    <td><?= $firstDayNumber ++ ?></td>                 
                   <?php } ?>
                    <?php
                    for ($day > $daysInMonth; $day <= 35; $day++) { ?>              
                    <td class="empty"></td>                 
                   <?php } ?>
                    
                </tr>
                <tr>
                    <?php
                    for ($day = 36; $day <= ($daysInMonth + $firstDayOfMonth); $day++) { ?>              
                    <td><?= $firstDayNumber ++ ?></td>                 
                   <?php } ?>
                    <?php
                    for ($day > $daysInMonth; $day <= 42; $day++) { ?>              
                    <td class="empty"></td>                 
                   <?php } ?>
                </tr>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>