<?php

// sqliteがなければ生成
if (! file_exists('../db')) {
    mkdir('../db');
}
if (! file_exists('../db/urls.sqlite')) {
    touch('../db/urls.sqlite');
}

// sqlite接続
try {
    $db = new PDO('sqlite:../db/urls.sqlite');
    // テーブルがなければ作成
    $sql = 'CREATE TABLE IF NOT EXISTS urls(id INT,json TEXT,time_stamp TEXT );' ;
    $db->query($sql);
} catch (Exception $e) {
    echo 'DB接続に失敗しました。';
    exit;
}

// 自動insertテスト
$result = $db->query("SELECT * FROM urls");
if (!$result->fetch()) {
    $db->query("INSERT INTO urls VALUES(1,'bbb','2022-11-27')");
}
