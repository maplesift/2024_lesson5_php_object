<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index:物件導向</title>
</head>
<body>
    <div>
        <a href="./index.php">物件導向</a>
    </div>
    <h1>物件宣告</h1>
    <?php
    // 禁止緩存
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    class Animal{
        // 宣告隱藏
        protected $type='animal';
        protected $name='John';
        protected $hair_color='black';
        public $feet=['front-left','front-right','back-left','back-right'];
        public $weight='small';
    
     function __construct($type,$name,$hair_color,$weight){
        $this->type=$type;
        $this->name=$name;
        $this->hair_color=$hair_color;
        $this->weight=$weight;
        
    }
    public function run(){
        echo $this->name. 'is running';
    }
    
    public function speed(){
        echo $this->name.'is running at 20km/h';
        print_r($this->feet);
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
}
    // 實例化 (instance)
    $cat=new Animal('cat','kitty','white','big');

    // echo $cat->type;
    echo $cat->getName();
    // echo $cat->hair_color;
    echo $cat->run();
    echo $cat->speed();
    // print_r($cat->feet);

    $cat->setName('Joson');
    echo $cat->getName();
    ?>
    <h1>繼承</h1>
    <?php
    //  implements 實施Interface Behavior
    class Cat extends Animal implements Behavior{
        protected $type='cat';
        protected $name='Judy';
        function __construct($hair_color,){
            $this->hair_color=$hair_color; 
        }
        function jump(){
            echo $this->name . "jumpping 5mm";
        }
        function getFeet(){
            return $this->feet;
        }

    }
// 介面 Interface(規範/指引 限制)
// 針對類別進行抽象的宣告
// 包含成員，方法
// 成員只能是常數成員
// 方法不需要實作
// 類別可以實作多個介面
    Interface Behavior{
        public function run();
        public function speed();
        public function jump();
    }


    $mycat=new Cat('white');

    echo $mycat->getName();
    echo "<br>";
    echo $mycat->run();
    $mycat->setName('judy');
    echo $mycat->getName();
    echo "<br>";
    echo $mycat->jump();

    ?>
    <h2>繼承dog</h2>
    <?php
        class Dog2 extends Animal{
        protected $type='dog';
        protected $name='WanWan';
        function __construct($hair_color,$weight){
            $this->hair_color=$hair_color; 
            $this->weight=$weight;
        }

    }
    $mydog=new Dog2('brown','big');
    echo $mydog->getName();
    echo "<br>";
    echo $mydog->run();
    echo $mydog->weight;
    
    $mydog->setName('WW');
    echo $mydog->getName();
    ?>
<h1>靜態宣告</h1>
<?php

class Dog extends Animal implements Behavior{
    protected $type='dog';
    protected $name='Doggy';
    protected static  $count=0;
    //static $count=0;

    function __construct($hair_color){
        $this->hair_color=$hair_color;
        self::$count++;
    }

    function bark(){
        echo $this->name . " is barking";
    }

    function getFeet(){
        return $this->feet;
    }

    static function getCount(){
        return self::$count;
    }

    function jump(){
        echo $this->name . " jumpping 1m";
    }
}

echo Dog::getCount();

$dog1=new Dog('brown');
$dog2=new Dog('black');
$dog3=new Dog('orange');
$dog4=new Dog('white');
$dog5=new Dog('white');


echo Dog::getCount();

?>

<?php


$array1=[
    'img'=>[
        'name' => 'mm.aa',
        'error' => '0']
        ,'cat'=>[1=>1,123]
];
echo "<pre>";
print_r($array1['img']['name']);
echo "</pre>";

?>
</body>
</html>