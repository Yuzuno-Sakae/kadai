<?php
//戻るボタンがクリックされている場合、前ページに遷移
if(isset($_POST['back'])){
    require_once("tech.php");
    return;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
<h2>計算結果</h2>

<?php
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
        echo $name."の最高値".max($this->fruits)."円";
        echo"<br>";
        echo $name."の最安値".min($this->fruits)."円";
        echo"<br>"; 
        echo $name."の平均価格".array_sum( $this->fruits)/ count($this->fruits)."円\n";
        echo"<br>";
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

<!-- 戻るボタン・画面遷移 -->
<form action= "tech.php" methods= "post">
    <input type="submit" name="back" value="戻る" />
</form>
</body>
</html>