<?php

$db = mysqli_connect('localhost', 'root', 'root', 'doxysbarbershop_db');
mysqli_set_charset($db, 'utf8');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}