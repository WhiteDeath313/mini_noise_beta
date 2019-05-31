<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 18/04/2019
 * Time: 11:54
 */

$error = 0;

$name = "";
$_SESSION["isConnected"] = 0;
$_SESSION["name"] = "";

if (!empty($_POST["isSubmit"])) {
    if (!empty($_POST["identifiant"]) && $_POST["identifiant"] == "arnaud.ridet@epitech.eu") {
        $name = $_POST["identifiant"];
        if (!empty($_POST["password"]) && $_POST["password"] == "toto") {
            $_SESSION["name"] = "Arnaud";
            $_SESSION["isConnected"] = 1;
            header("Location: http://www.localhost/MiniNoise");
        }
        else {
            $error = 2;
        }
    }
    else {
        $error = 1;
    }
}

?>