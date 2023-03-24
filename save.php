<?php

$pdo = require_once('db_config.php');

$post = (object) $_POST;

var_dump($post);
$data = ['nama' => $post->nama, 'tanggal' => date("Y-m-d", strtotime($post->tanggal)), 'jumlah' => str_replace(".", "", $post->jumlah), 'status_kredit' => $post->status_kredit, 'alamat' => $post->alamat];
// $sql = "INSERT INTO profile (nama, tanggal, jumlah, status_kredit, alamat) VALUES (:nama, :tanggal, :jumlah, :status_kredit, :alamat)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute($data);

// echo "Saving is successful";
