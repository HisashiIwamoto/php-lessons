<?php
    $text = @$_GET['text'];
?>


<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <form method = 'get'>
            <input type = "text" name = "text">
            <input type = "submit" value = "送信">
            <p><?php 
                echo $text;
            ?></p>
        </form>
    </body>
</html>
