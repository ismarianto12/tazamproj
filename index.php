<?php

$dsn      = "DESKTOP-Q8E77HI\ISMARIANTO"; // nama DSN yg ada di odbc
$user     = "sa";
$pass     = "kotokare12";
$database = "fastgko";

$koneksi = mssql_connect($dsn, $user, $pass);
if ($koneksi) {
    //echo "koneksi sukses..!! <br>";
    $selecdb = mssql_select_db($database);
    if ($selecdb) {
    } else {
        print('gagal database tidak ada');
    };
} else {
    echo 'data base tak ada';
}
