<?php
session_start();

// Set the value of the session with key name.
$_SESSION['name'] = "Saloni";
$_SESSION['age'] = 21;
// header('Location: viewSession.php');