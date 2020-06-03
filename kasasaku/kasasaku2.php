<?php

$word = ['あわび','えだまめ','おの','かさ','くま','さんずのかわ','しょうがっこう',
         'そらまめ','たらこ','ちからもち','とらんしーばー','なっとう','にもの','ねこ','はるさめ',
         'ひらめ','へいせい','まいなんばー','めがね','やさい','ゆどうふ','らっぱ','りそく','ろうそく',
         'わいやー','ぎりしゃ','ごりら','ずんだもち','ばにらあいす','ぼんさい'];

if(isset($_POST['text'])){
    $text = $_POST['text'];
    $siri = mb_substr($text,(mb_strlen($text) - 1));
}
?>


<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <form method = 'POST'>
            <input type = "text" name = "text">
            <input type = "submit" value = "送信">
            <p>
            <?php
                foreach($word as $value){
                if($siri == mb_substr($value,0,1)){
                    echo $value."<br>";
                    exit;
                }
            }
            echo 'ないよ～';
            
            ?>
            </p>
        </form>
    </body>
</html>
