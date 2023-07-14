<?php
session_start(); // Inizia la sessione

// Verifica se la variabile di sessione "counter" è impostata
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0; // Imposta il contatore a 0 se non è stato ancora impostato
}

// Incrementa il contatore
$_SESSION['counter']++;

// Restituisce il valore del contatore come risposta
echo $_SESSION['counter'];
?>
