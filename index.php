<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index:物件導向</title>
</head>
<body>
    <div>
        <a href="./index">物件導向</a>
    </div>
    <h1>物件宣告</h1>
    <?php

    class Animal{
        // 宣告公開
        protected $type='animal';
        protected $name='John';
        protected $hair_color='black';
        protected $feet=['front-left','front-right','back-left','back-right'];
    
     function __construct($type,$name,$hair_color){
        $this->type=$type;
        $this->name=$name;
        $this->hair_color=$hair_color;
    }
    public function run(){
        echo $this->name. 'is running';
    }
    
    public function speed(){
        echo $this->name.'is running at 20km/h';

    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
}
    // 實例化 (instance)
    $cat=new Animal('cat','kitty','white');

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
    class Cat extends Animal{
        protected $type='cat';
        protected $name='Judy';
        function __construct($hair_color){
            $this->hair_color=$hair_color; 
        }

    }
    $mycat=new Cat('white');

    echo $mycat->getName();
    echo "<br>";
    echo $mycat->run();
    $mycat->setName('judy');
    echo $mycat->getName();

    ?>
</body>
</html>