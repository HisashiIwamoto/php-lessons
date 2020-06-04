<?php

class shiritori{
    public $w_list = [];

    /*
     *  @param string $word
    */
    public function add_word($word){
        $this->w_list[] = $word;
    }

    protected function shiri_PU($word){
        return mb_substr($word,(mb_strlen($word) - 1));
    }

    protected function atama_PU($word){
        return mb_substr($word,0,1);
    }

    protected function battle($siri){
        foreach($this->w_list as $value){
            if($siri == $this->atama_PU($value)){
                return $value;
            }
        }
        return "ないよ～";
    }

    public function serch_word($word){
        $word = $this->shiri_PU($word);
        return $this->battle($word);
    }
}

$func = new shiritori;

$func->add_word("ひらめ");
$func->add_word("めだか");

echo $func->serch_word("ひひ");


//include "../view/kasajankenn.php";

/*
$siri;
$text;

$word = ['あわび','えだまめ','おの','かさ','くま','さんずのかわ','しょうがっこう',
         'そらまめ','たらこ','ちからもち','とらんしーばー','なっとう','にもの','ねこ','はるさめ',
         'ひらめ','へいせい','まいなんばー','めがね','やさい','ゆどうふ','らっぱ','りそく','ろうそく',
         'わいやー','ぎりしゃ','ごりら','ずんだもち','ばにらあいす','ぼんさい'];

if(isset($_POST['text'])){
    $text = $_POST['text'];
    $siri = mb_substr($text,(mb_strlen($text) - 1));
}

*/
?>