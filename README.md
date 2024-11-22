# 2024_lesson5_php_object
物件導向


# 物件導向程式設計（Object-Oriented Programming, OOP）

**物件導向程式設計** 是一種程式設計的範式，將程式設計的重心放在「物件（Object）」上，並使用物件來模擬現實世界中的事物或概念。每個物件都是由 **屬性（Properties）** 和 **方法（Methods）** 組成，屬性用來儲存物件的狀態，方法則用來執行行為或操作。

## 物件導向程式設計的四大特性

1. **封裝（Encapsulation）**
    - 將資料和操作包裝在物件中，對外只提供有限的介面（例如：方法）來操作物件，隱藏內部實現的細節，確保資料的安全性。
    - 例如：將物件的屬性設為「私有（private）」並透過「公開（public）」的方法存取。
    
2. **繼承（Inheritance）**
    - 子類別（Subclass）可以繼承父類別（Superclass）的屬性和方法，從而避免重複程式碼並促進程式碼的重用。
    - 例如：`Car` 類別繼承自 `Vehicle` 類別，`Car` 可以擁有 `Vehicle` 的所有功能。
    
3. **多型（Polymorphism）**
    - 不同類別的物件可以以相同的方式被操作（例如，呼叫相同的方法），但表現出的行為可以不同。
    - 例如：`Bird` 和 `Plane` 都有 `fly()` 方法，但 `Bird` 的 `fly()` 是拍動翅膀，而 `Plane` 的 `fly()` 是啟動引擎。
    
4. **抽象（Abstraction）**
    - 將物件的關鍵功能抽象化，並隱藏不必要的細節，讓程式更簡潔、專注於解決問題。
    - 例如：定義一個抽象類別（`Abstract Class`）或介面（`Interface`），只描述必須實現的功能而不提供具體的實現。

---

## OOP 的關鍵概念

1. **類別（Class）：**
    - 類別是物件的藍圖，定義了物件的屬性和行為。
    - 例如：

    ```php
    class Car {
        public $brand;
        public $color;

        public function drive() {
            echo "The car is driving.";
        }
    }
    ```

2. **物件（Object）：**
    - 根據類別創建的實體，是可以操作的具體個體。
    - 例如：

    ```php
    $myCar = new Car();
    $myCar->brand = "Toyota";
    $myCar->color = "Red";
    $myCar->drive(); // Output: The car is driving.
    ```

3. **建構子（Constructor）：**
    - 在創建物件時自動執行的特殊方法，用於初始化物件屬性。
    - 例如：

    ```php
    class Car {
        public $brand;
        public $color;

        public function __construct($brand, $color) {
            $this->brand = $brand;
            $this->color = $color;
        }
    }

    $myCar = new Car("Honda", "Blue");
    ```

4. **介面和抽象類別：**
    - **介面（Interface）：** 定義類別必須實現的方法，沒有具體實現。
    - **抽象類別（Abstract Class）：** 可以有部分實現，也可以包含抽象方法。

---

## 為什麼學習 OOP？

- **模組化**：程式可以分解成更小的部分，易於理解和維護。
- **重用性**：使用繼承和多型，減少重複程式碼。
- **擴充性**：當需求改變時，方便擴展程式功能。
- **真實世界的模擬**：可以更自然地描述現實問題並提供解決方案。

如果你正開始學習 OOP，建議從 PHP 的基本類別與物件開始，然後逐步理解繼承和多型的應用！

你說：
抽象的對比是什麼?
ChatGPT 說：
ChatGPT
抽象（Abstraction） 的對比概念是 具體（Concrete）。

這兩者在程式設計中的意義如下：

1. 抽象（Abstraction）
描述：

抽象是將問題的核心概念提取出來，而忽略具體細節的過程。
強調「定義功能」而非「實現功能」。
通常透過抽象類別或介面實現，用於定義需要實現的行為或功能。
特徵：

提供規範，描述「應該做什麼」。
不能直接實例化（例如，抽象類別無法被用 new 關鍵字直接創建）。
專注於功能設計，避免過早關注細節。
例子（PHP 抽象類別）：

php
複製程式碼
abstract class Animal {
    abstract public function sound(); // 抽象方法
}

class Dog extends Animal {
    public function sound() {
        echo "Woof!";
    }
}

$dog = new Dog();
$dog->sound(); // Output: Woof!
2. 具體（Concrete）
描述：

具體是實現或執行細節的過程，是抽象的具現化。
通常是對抽象概念的實際應用或實現，並能直接操作。
特徵：

提供完整的功能實現。
可以直接被實例化和使用。
包含詳細的程式碼邏輯與操作。
例子（PHP 具體類別）：

php
複製程式碼

class Car {
    public function drive() {
        echo "The car is driving.";
    }
}

$myCar = new Car();
$myCar->drive(); // Output: The car is driving.

抽象 vs. 具體 的對比
特徵	抽象	具體
意義	提取問題的核心概念，忽略細節	將抽象的概念實現成實際功能或行為
實例化	無法直接實例化	可以直接實例化
側重點	定義規範與框架，描述應做的事情	實現詳細邏輯，完成具體的功能
程式設計表現	抽象類別、介面	具體類別
使用場景	用於規劃架構或設計多型行為	用於完成實際的業務邏輯與操作
舉例解釋（生活中的例子）
抽象：

概念：一張「電器說明書」。
說明書描述電器的功能（開關、調節溫度等），但不提供如何內部製造的細節。
具體：

實現：一台真正的電器（如電風扇）。
這台電風扇按照說明書上的功能提供實際運作的能力，並能被直接使用。
總結來說，抽象關注的是「計畫與規範」，而具體則負責「執行與實現」。在程式設計中，這兩者緊密配合，共同打造結構清晰且靈活的系統。






你說：

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }

為什麼上面要return 下面不用? 有甚麼規則嗎?
ChatGPT 說：
ChatGPT
在物件導向程式設計中，上述方法分別是取值器（Getter）和設值器（Setter），它們的主要功能與是否需要 return 取決於各自的用途和設計規則。

為什麼上面的方法要 return？
方法名稱：getName()
功能：取值器（Getter）
用途：用於取得物件的某個屬性值（這裡是 $name）。
行為：因為 getName() 的目的是讓外部獲取屬性的值，所以必須使用 return，將 $this->name 的值傳回給呼叫者。
範例：

php
複製程式碼
$person = new Person();
$person->setName("Alice");
echo $person->getName(); // Output: Alice
如果沒有 return，getName() 將無法將 $name 的值傳遞給外部。

為什麼下面的方法不用 return？
方法名稱：setName($name)
功能：設值器（Setter）
用途：用於設定物件的某個屬性值（這裡是 $name）。
行為：setName($name) 的目的是修改物件內部的屬性，因此只需要將傳入的 $name 值賦值給 $this->name，不需要傳回值。
範例：

php
複製程式碼
$person = new Person();
$person->setName("Alice"); // 設定名稱為 "Alice"
即使 setName() 沒有 return，物件內部的 $name 屬性已經被成功修改，外部不需要知道這個過程。

設計上的規則
Getter 必須 return 值：

因為它的目的是讓外部獲得屬性值。
如果沒有 return，外部呼叫這個方法時會得到 null 或空值，無法完成其用途。
Setter 通常不 return 值：

因為它的目的是設置屬性值，並且不需要回報任何結果。
但在某些情況下，Setter 可能會回傳一些資訊，例如成功設置的確認訊息，或支援方法鏈式呼叫。
延伸：Setter 支援方法鏈（Fluent Interface）
在一些設計中，Setter 會回傳 $this，以便支援方法鏈式呼叫：

php
複製程式碼
public function setName($name) {
    $this->name = $name;
    return $this; // 支援鏈式呼叫
}

// 使用範例
$person = new Person();
$person->setName("Alice")->setAge(30); // 連續呼叫
總結
Getter：需要回傳屬性值，必須使用 return。
Setter：主要用於修改屬性值，通常不需要 return，除非有特殊需求（如支援方法鏈）。
這樣的設計符合「單一責任原則」，讓程式更易於理解和維護。





你說：
```php
class Animal{
        // 宣告隱藏
        protected $type='animal';
        protected $name='John';
        protected $hair_color='black';
        private $feet=['front-left','front-right','back-left','back-right'];
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
```
請問我想echo $cat->weight();會失敗 哪裡有錯?
ChatGPT 說：
ChatGPT
程式碼中出現錯誤的原因是 weight 是一個屬性，而不是方法。在 PHP 中，屬性直接存取，不需要加括號 ()。你使用了 $cat->weight()，但 weight 並不是方法，導致錯誤。

正確存取方式
存取屬性：直接使用 $cat->weight。

php
複製程式碼
echo $cat->weight; // 正確，會輸出 'big'
如果希望以方法形式存取：需要為 weight 添加 Getter 方法。

php
複製程式碼
public function getWeight() {
    return $this->weight;
}
然後呼叫：

php
複製程式碼
echo $cat->getWeight(); // 輸出 'big'
修正版程式碼
以下是修正後的完整程式碼：

php
複製程式碼
```php
class Animal {
    // 屬性宣告
    protected $type = 'animal';
    protected $name = 'John';
    protected $hair_color = 'black';
    private $feet = ['front-left', 'front-right', 'back-left', 'back-right'];
    public $weight = 'small';

    // 建構子
    function __construct($type, $name, $hair_color, $weight) {
        $this->type = $type;
        $this->name = $name;
        $this->hair_color = $hair_color;
        $this->weight = $weight;
    }

    // 方法
    public function run() {
        echo $this->name . ' is running';
    }

    public function speed() {
        echo $this->name . ' is running at 20km/h';
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getWeight() {
        return $this->weight; // 新增的 Getter 方法
    }
}

// 實例化
$cat = new Animal('cat', 'kitty', 'white', 'big');

// 呼叫方法與屬性
echo $cat->getName();      // 輸出: kitty
$cat->setName('Joson');    // 設定新名稱
echo $cat->getName();      // 輸出: Joson
echo $cat->getWeight();    // 輸出: big (透過 Getter 方法)
```
關於括號 () 的用途
屬性存取：直接用 $物件->屬性（不加 ()）。
方法呼叫：使用 $物件->方法()（加 ()）。
錯誤地將屬性當成方法使用（加上 ()）會導致錯誤，因為 PHP 會嘗試尋找名為 weight 的方法，但類別中並不存在該方法。

如何避免類似錯誤
熟悉屬性與方法的區別：

屬性：不加括號，直接存取。
方法：加括號，進行呼叫。
使用 Getter 和 Setter：

為所有屬性提供 Getter 和 Setter，避免直接存取屬性，提升封裝性。
閱讀錯誤訊息：

PHP 的錯誤訊息通常會指出問題，例如 Call to undefined method 提示你呼叫了不存在的方法。





你說：
請問我想在dog新增一個$high 需要在class Animal 增加$high才能使用嗎?
ChatGPT 說：
ChatGPT
是的，如果你想要在 Dog 類別中新增一個屬性 $high，有兩種方式：

直接在 Animal 類別中新增 $high 屬性：

因為 Dog 繼承自 Animal，所以如果你在 Animal 中新增 $high 屬性，Dog 就能直接繼承並使用這個屬性。
php
複製程式碼
class Animal {
    protected $type;
    protected $name;
    protected $hair_color;
    protected $weight;
    protected $high; // 新增屬性

    function __construct($type, $name, $hair_color, $weight, $high) {
        $this->type = $type;
        $this->name = $name;
        $this->hair_color = $hair_color;
        $this->weight = $weight;
        $this->high = $high;
    }

    public function getHigh() {
        return $this->high;
    }

    public function setHigh($high) {
        $this->high = $high;
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " is barking!";
    }
}

$dog = new Dog('dog', 'Buddy', 'brown', 'medium', '50cm');
echo $dog->getHigh(); // 輸出: 50cm
在 Dog 類別中新增 $high（不需要改動 Animal）：

如果 $high 屬性僅適用於 Dog，你可以直接在 Dog 類別中新增這個屬性，而不需要修改 Animal。
php
複製程式碼
class Dog extends Animal {
    private $high;

    public function __construct($type, $name, $hair_color, $weight, $high) {
        parent::__construct($type, $name, $hair_color, $weight); // 呼叫父類別的建構子
        $this->high = $high; // 初始化 $high
    }

    public function getHigh() {
        return $this->high;
    }

    public function setHigh($high) {
        $this->high = $high;
    }
}

$dog = new Dog('dog', 'Buddy', 'brown', 'medium', '50cm');
echo $dog->getHigh(); // 輸出: 50cm
什麼時候選擇修改 Animal？
如果 $high 是所有動物共有的屬性，應該在 Animal 中新增 $high。
這樣可以保持程式碼一致性，所有子類別（如 Cat 或其他動物）都能使用這個屬性。
什麼時候選擇只修改 Dog？
如果 $high 僅適用於 Dog，而其他動物類別（如 Cat）不需要這個屬性，那麼應該只在 Dog 中新增 $high。
這樣可以避免在不需要的類別中增加多餘的屬性，保持類別的專注性。





你說：
可以把這一整篇使用md格式讓我方便複製貼上嗎
ChatGPT 說：
ChatGPT
以下是使用 Markdown 格式撰寫的內容，方便你直接複製貼上：

markdown
複製程式碼
# 如何在 Dog 類別中新增 `$high` 屬性？

如果你想要在 `Dog` 類別中新增一個 `$high` 屬性，有兩種方式可以選擇：

---

## 方式 1：在 `Animal` 類別中新增 `$high`

因為 `Dog` 繼承自 `Animal`，所以在 `Animal` 中新增 `$high` 屬性後，`Dog` 就能直接繼承並使用這個屬性。

### 範例程式碼
```php
class Animal {
    protected $type;
    protected $name;
    protected $hair_color;
    protected $weight;
    protected $high; // 新增屬性

    function __construct($type, $name, $hair_color, $weight, $high) {
        $this->type = $type;
        $this->name = $name;
        $this->hair_color = $hair_color;
        $this->weight = $weight;
        $this->high = $high;
    }

    public function getHigh() {
        return $this->high;
    }

    public function setHigh($high) {
        $this->high = $high;
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " is barking!";
    }
}

$dog = new Dog('dog', 'Buddy', 'brown', 'medium', '50cm');
echo $dog->getHigh(); // 輸出: 50cm
方式 2：只在 Dog 類別中新增 $high
如果 $high 屬性僅適用於 Dog 類別，可以直接在 Dog 中新增這個屬性，而不需要改動 Animal。

範例程式碼
php
複製程式碼
class Dog extends Animal {
    private $high;

    public function __construct($type, $name, $hair_color, $weight, $high) {
        parent::__construct($type, $name, $hair_color, $weight); // 呼叫父類別的建構子
        $this->high = $high; // 初始化 $high
    }

    public function getHigh() {
        return $this->high;
    }

    public function setHigh($high) {
        $this->high = $high;
    }
}

$dog = new Dog('dog', 'Buddy', 'brown', 'medium', '50cm');
echo $dog->getHigh(); // 輸出: 50cm
什麼時候選擇修改 Animal？
如果 $high 是所有動物共有的屬性，應該在 Animal 中新增 $high。
這樣可以保持程式碼一致性，所有子類別（如 Cat 或其他動物）都能使用這個屬性。
什麼時候選擇只修改 Dog？
如果 $high 僅適用於 Dog，而其他動物類別（如 Cat）不需要這個屬性，那麼應該只在 Dog 中新增 $high。
這樣可以避免在不需要的類別中增加多餘的屬性，保持類別的專注性。
css
複製程式碼

將此內容直接複製到支持 Markdown 的編輯器（例如 VS Code 或其他 Markdown 檢視工具）中即可使用。
