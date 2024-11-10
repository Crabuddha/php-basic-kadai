<!DOCTYPE html>
 <html lange='ja'>

 <head>
  <meta charset='UTF-8'>
  <title>PHP基礎編</title>
 </head>

 <p>
  <?php
  //クラスを定義する
  class Food{
    //プロパティを定義する
    private $name;
    private $price;

    //コンストラクタを定義する
    public function __construct(string $name , int $price) {
      $this->name = $name;
      $this->price = $price;
    }
    public function show_price(){
      echo $this->price;
    }
  }
  

  //クラスを定義する
  class Animal{
    //プロパティを定義する
    private $name;
    private $height;
    private $weight;

    //コンストラクタを定義する
    public function __construct(string $name , int $height , int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

     //メソッドを定義する
   public function show_height(){
    echo $this->height;
   }
  }

   //インスタンス化する
   $potato = new Food('potato' , 250);
   $dog = new Animal('dog' , 60 , 5000);

   //インスタンス$animalの各プロパティの値を出力する
   print_r($potato);
   echo '<br>';   
   print_r($dog);
   echo '<br>';

   //メソッドにアクセスして実行する
   $potato->show_price();
   echo '<br>';
   $dog->show_height();
  ?>
 </p>
 
 </html>