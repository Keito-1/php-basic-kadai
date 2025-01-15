<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
        class Food{
          private $name;
          private $price;

          public function show_price(){
            echo $this->price;
          }
          // コンストラクタ
          public function __construct(string $food_name, int $food_price) {
            $this->name = $food_name;
            $this->price = $food_price;
          }
        }
        // インスタンス化
        $potato = new Food('potato', 250);
         print_r($potato); 
         echo '<br>';
         $potato->show_price();
    ?>
  </p>
  <p>
    <?php
      class Animal{
        private $name;
        private $height;
        private $weight;

        public function show_height(){
          echo $this->height;
        }
          public function __construct(string $animal_name, int $animal_height, int $animal_weight){
            $this->name = $animal_name;
            $this->height = $animal_height;
            $this->weight = $animal_weight;
          }
        }
      $dog = new Animal('dog', 60, 5000);
      print_r($dog);
      echo '<br>';
      $dog->show_height();
    ?>
  </p>
</body>
</html>