<?php

/**
 * sec17 - Sécurisation
 * Connexion
 */
// Initialisations
include "init.php";

session_start();
session_unset();
session_destroy();
setcookie(session_name(),'',-1,'/');

header("Location: index.php");