<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 18/04/2019
 * Time: 11:19
 */

session_start();

$page = "";

if (isset($_GET["p"])) {
    $page = $_GET["p"];
}

if (!isset($_SESSION["isConnected"]) || $_SESSION["isConnected"] != 1) {
    $page = "connexion";
}

switch ($page) {
    case "connexion" || "deconnexion":
        include "modele/connexion_modele.php";
        include "vue/connexion_vue.php";
        break;
    case "setting":
        echo "<h1>Work in progress ...</h1>";
        break;
    case "profil":
        echo "<h1>Work in progress ...</h1>";
        break;
    case "graph":
        echo "<h1>Work in progress ...</h1>";
        break;
    default:
        include "modele/accueil_modele.php";
        include "vue/accueil_vue.php";
        break;
}