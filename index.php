<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>写真共有システム</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="style.css">

        <!--Google Font読み込み-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&display=swap" rel="stylesheet">
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

            <a href="javascript:click('<?php echo $imageName ?>', '<?php echo $photographer ?>', '<?php echo $date ?>', '<?php echo $place ?>', '<?php echo $hr ?>');" ><img src="<?php echo $imageURL; ?>" alt="" class="photos"></a>

            <?php } }else{} ?>
        </div>
        <div id="popup">
            <img src="" id="popup_image">
            <h2 id="popup_subtitle">撮影者</h2>
            <p id="popup_photographer">未設定</p>
            <h2 id="popup_subtitle">撮影日時</h2>
            <p id="popup_date">未設定</p>
            <h2 id="popup_subtitle">撮影場所</h2>
            <p id="popup_place">未設定!</p>
            <h2 id="popup_subtitle">その他区分</h2>
            <p id="popup_other">未設定</p>
        </div>
        <a href="javascript:close()"><div id="blank"></div></a>
        <script>
            function click(imageName, photographer, date, place, hr){
                document.getElementById("popup").style.display="block";
                document.getElementById("blank").style.display="block";
                document.getElementById("popup_image").src="uploads/"+imageName;
                document.getElementById("popup_photographer").innerHTML = photographer;
                document.getElementById("popup_date").innerHTML = date;
                document.getElementById("popup_place").innerHTML = place;
                document.getElementById("popup_other").innerHTML = hr;
                return;
            }

            function close(){
                document.getElementById("popup").style.display="none";
                document.getElementById("blank").style.display="none";
            }
        </script>
    </body>
</html>