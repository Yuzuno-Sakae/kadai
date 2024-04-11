<?php
//果物にはそれぞれ価格があり、果物の一種である桃の価格は200円〜300円の間で個体ごと
//に変動する。また、果物の一種であるイチゴの価格は400円〜500円の間で個体ごとに変動
//する。桃とイチゴが15個ずつ存在する時に、それぞれの最高値と最安値、および平均価格を
//出力せよ。

//クラスFruitsの作成
class Fruits{
    public $fruits = [];

    //コンストラクタ
    public function __construct($name, $min, $max, $count)
    {
        //ランダムな価格の抽出
        for ( $i = 0; $i < $count; $i++ ) {
            $price = rand($min, $max);
            $this->fruits[] = $price;    
        }
        //結果の表示
        echo $name."の最高値".max($this->fruits)."円\n";
        echo $name."の最安値".min($this->fruits)."円\n"; 
        echo $name."の平均価格".array_sum( $this->fruits)/ count($this->fruits)."円\n";
    }
}

//桃の数値設定
class Peach extends Fruits{
    public function __construct()
    {
         parent::__construct("桃", 200, 300, 15);    
    }
}

//イチゴの数値設定
class Strawberry extends Fruits{
    public function __construct()
    {
         parent::__construct("イチゴ", 400, 500, 15);    
    }
}

//インスタンス化
$peach = new Peach();
$strawberry = new Strawberry();

?>