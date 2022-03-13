<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>写真共有システム/承認フォーム</title>
        <link rel="stylesheet" href="check.css">
    </head>
    <body>
        <div class="header">
            <a href="index.html"><img class="header_icon" src="header.png" alt="sai3 icon"></a>
            <h1><span class="slash">/</span> 写真共有システム承認フォーム</h1>
        </div>
        
        <div class="flex-container">
            <?php
            // データベース設定ファイルを含む
            include 'dbConfig.php';
            // データベースから画像を取得する
            $query = $db->query("SELECT * FROM images WHERE hr IS NULL OR place IS NULL ORDER BY uploaded_on DESC");

            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $imageURL = 'uploads/'.$row["file_name"];
                    $imageName = $row["file_name"];
            ?>
                <iframe id="iframe" srcdoc="
                <style>
                .photos{
                    height: 250px;
                    display: inline-block;
                }

                form{
                    display: inline-block;
                }

                input{
                    display: inline-block;
                }

                p{
                    padding: 0;
                    margin:0;
                    display: inline-block;
                }
                </style>
                <img src=&quot;<?php echo $imageURL; ?>&quot; class=&quot;photos&quot;>
                <form class=&quot;form&quot; action=&quot;update.php&quot; method=&quot;post&quot; enctype=&quot;multipart/form-data&quot;>
                <input type=&quot;hidden&quot; name=&quot;filename&quot; value=&quot;<?php echo $imageName; ?>&quot; />
                <p>HR: </p><input type=&quot;text&quot; name=&quot;hr&quot;></br>
                <p>撮影場所: </p><select name=&quot;place&quot;>
                    <option>校内</option>
                    <option>体育館</option>
                    <option>運動場</option>
                    <option>屋外</option>
                    <option>部展</option>
                    <option>クラス展</option>
                </select></br>
                <input type=&quot;submit&quot; name=&quot;submit&quot; value=&quot;Upload&quot;>
                </form>"></iframe>
                
            <?php } }else{} ?>
        </div>
        <p>承認待ちのレコードは以上です。</p>
    </body>
</html>