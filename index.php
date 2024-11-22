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
        public $type='animal';
        public $name='John';
        public $hair_color='black';
    
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
}
    // 實例化 (instance)
    $cat=new Animal('cat','kitty','white');

    echo $cat->type;
    echo $cat->name;
    echo $cat->hair_color;
    echo $cat->run();
    echo $cat->speed();



    
    ?>
</body>
</html>