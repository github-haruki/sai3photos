<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="check.css">
    </head>
    <body>
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

        <img src="<?php echo $imageURL; ?>" alt="" class="photos">
        <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="filename" value="<?php echo $imageName; ?>" />
        <input type="text" name="hr">
        <select name="place">
            <option>校内</option>
            <option>体育館</option>
            <option>運動場</option>
            <option>屋外</option>
            <option>部展</option>
            <option>クラス展</option>
        </select>
        <input type="submit" name="submit" value="Upload">
        </form>
        <?php } }else{} ?>
    </body>
</html>