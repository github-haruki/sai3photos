<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像をアップロード</title>
        <meta name="description" content="画像ファイルをアップロードします。">
    </head>
    <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    アップロードする画像ファイルを選択する:
    <input type="file" name="file[]" multiple >
    <select name="photographer">
        <option>水谷海斗</option>
        <option>大久保</option>
        <option>林春輝</option>
    </select>
    <input type="submit" name="submit" value="Upload">
    </form>
    <div>
    </div>
    </body>
</html>