<?php
$hostname = '{mail.clinicanueva.com:995/pop/ssl}';
$username = 'aprendizsistemas@clinicanueva.com';
$password = 'Luf54473';

$inbox = imap_open($hostname, $username, $password);

if ($inbox) {
    echo "Conexión exitosa!";
    imap_close($inbox);
} else {
    echo "Error de conexión: " . imap_last_error();
}
?>
