<?php
//parameter koneksi database 
$dbConfig['host'] = 'localhost';
$dbConfig['username'] = 'root';
$dbConfig['password'] = '';
$dbConfig['name'] = 'mahasiswa'; //test koneksi dan akan error apabila gagal 
try {
    $db = new PDO("mysql:host={$dbConfig['host']};dbname={$dbConfig['name']}", $dbConfig['username'], $dbConfig['password'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db; //connection is success // 
    die(json_encode(array('outcome' => true)));
} catch (PDOException $ex) {
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
    exit;
}
