<?php
// データベースの構成
$dbHost     = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "sai3";

// データベース接続の構築
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// 接続の確認
if ($db->connect_error) {
    die("接続に失敗しました: " . $db->connect_error);
}
?>