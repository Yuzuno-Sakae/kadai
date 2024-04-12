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
//クラスFruitの作成
class Fruit{
    public $fruit = [];

    //コンストラクタ
    public function __construct($name, $min, $max, $count)
    {
        //ランダムな価格の抽出
        for ( $i = 0; $i < $count; $i++ ) {
            $price = rand($min, $max);
            $this->fruit[] = $price;    
        }
        //結果の表示
        echo $name."の最高値".max($this->fruit)."円";
        echo"<br>";
        echo $name."の最安値".min($this->fruit)."円";
        echo"<br>"; 
        echo $name."の平均価格".array_sum( $this->fruit)/ count($this->fruit)."円\n";
        echo"<br>";
    }
}

//桃の数値設定
class Peach extends Fruit{
    public function __construct($count)
    {
         parent::__construct("桃", 200, 300, $count);    
    }
}

//イチゴの数値設定
class Strawberry extends Fruit{
    public function __construct($count)
    {
         parent::__construct("イチゴ", 400, 500, $count);    
    }
}

//インスタンス化
$pCount = 15;
$sCount = 15;

$peach = new Peach($pCount);
$strawberry = new Strawberry($sCount);

?>

<!-- 戻るボタン・画面遷移 -->
<form action= "tech.php" methods= "post">
    <input type="submit" name="back" value="戻る" />
</form>
</body>
</html>
