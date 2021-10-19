<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        include_once("../../includes/connect.php");

        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $connection->prepare("SELECT * FROM kapiteins WHERE gebruikersnaam = :username AND wachtwoord = :password");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                session_start();
                $_SESSION["id"] = $result["username"];
                $_SESSION["role"] = "3";

                header("Location: ../../welkom.php");
                exit();
            }
        }
    }
}
