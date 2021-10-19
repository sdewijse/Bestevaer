<!DOCTYPE html>
<html>
<head>
    <title>Bestevaer</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<header>
    <nav>
        <a href="schipinformatie.php">Schipinformatie</a>
        <a href="gewicht_invoeren.php">Gewicht invoeren</a>
        <a href="uitloggen.php">Uitloggen</a>
    </nav>
</header>

<main>
<div class="loginContent">
    <form class="inloggen" action="php/login/login_connect.php" method="post">
        <div class="loginInhoud">
            <p class="inlogTitel">Log in</p><br>
            <label>Username</label><br>
            <input required type="text" name="username" id="username" placeholder="username"/><br>
            <label>Password</label><br>
            <input required type="password" name="password" id="password" placeholder="password"/><br>
        </div>
        <div class="button">
            <input type="submit" name="submit" value="Sign in" id="sign in">
        </div>
    </form>
</div>
</main>
</body>

</html>
<?php
