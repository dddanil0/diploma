<?php
    $username = 'diploma';
    $hostname = 'localhost';
    $password = 'diploma';
    $database = 'diploma';

    $link = mysqli_connect($hostname, $username, $password, $database);

    if(mysqli_connect_errno()) {
        echo "Ошибка в подключении к базе данных, № ".mysqli_connect_errno(). " - ".mysqli_connect_error();
        exit();
    }