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
    $sql = 'CREATE TABLE IF NOT EXISTS settings(id INTEGER PRIMARY KEY AUTOINCREMENT,json TEXT,model TEXT,city TEXT,time_stamp TEXT );' ;
    $db->query($sql);
    echo '接続に成功しました。';
} catch (Exception $e) {
    echo 'DB接続に失敗しました。';
}
