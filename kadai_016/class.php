
<?php
  // Foodクラスを定義
  class Food {
    private $name;
    private $price;


    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }


    public function show_price() {
      echo $this->price . '<br>';
    }
   }
  
  
  $food = new Food('potato', 250);

  print_r($food);

  echo '<br>';


  // Animalクラスを定義
  class Animal {
    private $name;
    private $height;
    private $weight;


    public function __construct(string $name, int $height, string $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    
    public function show_height() {
      echo $this->height . '<br>';
    }
  }

  $animal = new Animal('dog', 60, 5000);

  print_r($animal);  

  echo '<br>';


  // [price] 出力
  $food->show_price();
  
  // [height] 出力
  $animal->show_height();
  
  

  
?>
