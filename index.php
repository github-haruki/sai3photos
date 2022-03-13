<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>写真共有システム</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <div class="justbackground"></div>
            <a href="index.html"><img class="header_icon" src="icon.svg" alt="sai3 icon"></a>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
              </div>
            <nav class="hamburger_list">
                <a href="index.html"><h1 class="header_home">HOME</h1></a>
                <a href="index.html#contents_link"><h1 class="header_contents">CONTENTS</h1></a>
                <a href="articles.html"><h1 class="header_articles">ARTICLES</h1></a>
                <a href="about.html"><h1 class="header_about">ABOUT</h1></a>
            </div>
        </div>
        <div class="photo_container">
            <?php
            // データベース設定ファイルを含む
            include 'dbConfig.php';
            // データベースから画像を取得する
            $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $imageURL = 'uploads/'.$row["file_name"];
                    $imageName = $row["file_name"];
                    $photographer = $row["photographer"];
                    $hr = $row["hr"];
                    $place = $row["place"];
                    $date = $row["uploaded_on"];
                    
            ?>

            <a href="#" onclick="click(<?= json_encode($imageName) ?>);"><img src="<?php echo $imageURL; ?>" alt="" class="photos"></a>

            <?php } }else{} ?>
        </div>
        <div id="popup">
            <img src="">
            <h2></h2>
            <p></p>
        </div>
        </div id="blank"></div>
        <script>
            function click(imageName){
                document.getElementById("popup").style.display="block";
                console.log("hello");
                return;
            }
        </script>
    </body>
</html>