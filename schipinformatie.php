<!DOCTYPE html>
<html>
<head>
    <title>Bestevaer</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/schipinfo.css">
</head>

<?php include_once("includes/connect.php");?>

<body>
<header>
    <nav>
        <a href="schipinformatie.php">Schipinformatie</a>
        <a href="gewicht_invoeren.php">Gewicht invoeren</a>
        <a href="uitloggen.php">Uitloggen</a>
    </nav>
</header>

<main>
    <div class="infoContent">
        Schipinformatie <br><br>
        <?php
        $stmt_info = $connection->prepare("SELECT * FROM schepen ORDER BY naam_schip");
        $stmt_info->execute();
        if($stmt_info->rowCount() > 0) {
            while ($result_info = $stmt_info->fetch(PDO::FETCH_ASSOC)) {
                echo '
                <div class="schipInfo">Naam schip: ' . $result_info["naam_schip"] . '<br> Laadruimte: ' .
                    $result_info["laadruimte"] . '<br> Momenteel in gebruik: ' . $result_info["in_gebruik"] . '<br> Huidige kapitein:' .
                    $result_info["huidige_kapitein"] .
                    '</div><br>';
            }
        }
        ?>
    </div>
</main>
</body>

</html>
