<?php

//果物にはそれぞれ価格があり、果物の一種である桃の価格は200円〜300円の間で個体ごと
//に変動する。また、果物の一種であるイチゴの価格は400円〜500円の間で個体ごとに変動
//する。桃とイチゴが15個ずつ存在する時に、それぞれの最高値と最安値、および平均価格を
//出力せよ。


        //個数
        const COUNT = 15;

        //桃：ランダムな価格を１５個生成する

        $peach_range = range(200, 300);
    
        $peach_price = array_rand($peach_range, COUNT);

        $peach = array();
        foreach( $peach_price as $p_price){
            $peach[] = $peach_range[$p_price];
        }
        
        //イチゴ：ランダムな価格を１５個生成する

        $strawberry_range = range(400, 500);
    
        $strawberry_price = array_rand($strawberry_range, COUNT);

        $strawberry = array();
        foreach( $strawberry_price as $s_price){
            $strawberry[] = $strawberry_range[$s_price];
        }
        
        //最高値と最安値と平均価格

        $max_peach = max($peach);
        $min_peach = min($peach);
        $avg_peach = array_sum($peach) / 15;

        $max_strawberry = max($strawberry);
        $min_strawberry = min($strawberry);
        $avg_strawberry = array_sum($strawberry) / 15;

        echo "桃の最高値" . $max_peach . "円" ;
        echo "桃の最安値" . $min_peach . "円";
        echo "桃の平均価格" . $avg_peach . "円";

        echo "イチゴの最高値" .$max_strawberry . "円";
        echo "イチゴの最安値" .$min_strawberry . "円";
        echo "イチゴの平均価格" . $avg_strawberry . "円";

?>