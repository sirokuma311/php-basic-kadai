<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $num = [15, 4, 18, 23, 10];

        function sort_2way($array , $order){
            if($order){
                echo "昇順にソートします。<br>";
                sort($array);
                foreach($array as $n){
                    echo "{$n}<br>";
                }
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
                foreach($array as $n){
                    echo "{$n}<br>";
                }
            }
        }
        sort_2way($num , true);
        sort_2way($num , false);
        ?>
    </p>
</body>

</html>