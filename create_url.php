<?php

require __DIR__ . '/vendor/autoload.php';
require '../connect_db.php';
$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ );
$dotenv->load();
$sheet_id = $_ENV['SHEET_ID'];
$tab_name = $_ENV['TAB_NAME'];
$api_key  = $_ENV['API_KEY'];

$sheet_api_url = "https://sheets.googleapis.com/v4/spreadsheets/{$sheet_id}/values/{$tab_name}/?key={$api_key}";
$get_json      = mb_convert_encoding( file_get_contents( $sheet_api_url ), 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN' );
$get_data      = array_column( json_decode( $get_json, true )['values'], 1, 0 );

$set = ! empty( $_GET['go'] ) ? htmlspecialchars( $_GET['go'], ENT_QUOTES, 'UTF-8' ) : false;
$url = $set ? $get_data[ $set ] : './404.php';
