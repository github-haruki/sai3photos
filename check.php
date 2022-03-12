<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="check.css">
    </head>
    <body>
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
            <div id="box">
                <img src="<?php echo $imageURL; ?>" alt="" class="photos">
                <form class="form" action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="filename" value="<?php echo $imageName; ?>" />
                <p>HR: </p><input type="text" name="hr"></br>
                <p>撮影場所: </p><select name="place">
                    <option>校内</option>
                    <option>体育館</option>
                    <option>運動場</option>
                    <option>屋外</option>
                    <option>部展</option>
                    <option>クラス展</option>
                </select></br>
                <input type="submit" name="submit" value="Upload">
                </form>
            </div>
            <?php } }else{} ?>
        </div>
    </body>
</html>