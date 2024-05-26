<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // foodクラスを作成
        class Food {
            private $name;
            private $price;
            // プロパティに値を代入するコンストラクタ
            public function __construct(string $name,int $price){
                $this->name = $name;
                $this->price = $price;
            }
            // プロパティ出力のためのメソッド
            public function show_price (){
                echo $this->price . '<br>';
            }
        }
        // animalクラスを作成
        class Animal {
            private $name;
            private $height;
            private $weight;
            // プロパティに値を代入するコンストラクタ
            public function __construct(string $name,string $height,string $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            // プロパティ出力のためのメソッド
            public function show_height(){
                echo $this->height . '<br>';
            }
        }
        // foodのインスタンスを作成
        $food_data = new Food('onion' , 300);
        // インスタンスを出力
        print_r($food_data);
        echo '<br>';
        // animalのインスタンスを作成
        $animal_data = new Animal('dog', '100cm', '10kg');
        // インスタンスを出力
        print_r($animal_data) ;
        echo '<br>';
        // それぞれのメソッドにアクセスし実行
        $food_data->show_price();
        $animal_data->show_height();
        ?>

    </p>
</body>
</html>