<?php
// データベース設定ファイルを含む
include 'dbConfig.php';
$statusMsg = '';

// ファイルのアップロード先
$targetDir = "uploads/";

//変数設定
$photographer= $_POST['photographer'];

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // 特定のファイル形式の許可
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    for($i=0;$i<count($_FILES["file"]["name"]);$i++){

        $fileName = basename($_FILES["file"]["name"][$i]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        if(in_array($fileType, $allowTypes)){
            // サーバーにファイルをアップロード
            if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], $targetFilePath)){
                // データベースに画像ファイル名を挿入 
                $insert = $db->query("INSERT into images (file_name, photographer, uploaded_on) VALUES ('".$fileName."', '".$photographer."', NOW())");
                if($insert){
                    $statusMsg .= " <br> ".$fileName. " が正常にアップロードされました";
                }else{
                    $statusMsg .= "<br>ファイルのアップロードに失敗しました、もう一度お試しください";
                } 
            }else{
                $statusMsg .= "<br>申し訳ありませんが、ファイルのアップロードに失敗しました";
            }
        }else{
            $statusMsg .= '<br>申し訳ありませんが、アップロード可能なファイル（形式）は、JPG、JPEG、PNG、GIF、PDFのみです';
        }
    }
}else{
    $statusMsg = 'アップロードするファイルを選択してください';
}

// ステータスメッセージを表示
echo $statusMsg;
?>