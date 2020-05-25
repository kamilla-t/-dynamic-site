<?php
    $mysqli = false;
    // Функция подключения к БД
    function connectDB () {
        global $mysqli;
        $mysqli = new mysqli("localhost","root","root","site1base");
        // Установка кодировки
        $mysqli->query("SET NAMES 'utf8'");
    } 
    // Функция отключения от БД
    function closeDB () {
        global $mysqli;
        $mysqli->close ();
    }
?>