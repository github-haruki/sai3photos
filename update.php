<?php
// データベース設定ファイルを含む
include 'dbConfig.php';
$statusMsg = '';

//変数設定
$filename	= $_POST['filename'];
$hr	= $_POST['hr'];
$place= $_POST['place'];

$insert = $db->query("UPDATE images SET hr='" .$hr. "',  place='" .$place. "' WHERE file_name='" .$filename. "'");
if($insert){
    $statusMsg = "正常にアップロードされました";
}else{
    $statusMsg = "ファイルのアップロードに失敗しました、もう一度お試しください";
} 
// ステータスメッセージを表示
echo $statusMsg;
?>