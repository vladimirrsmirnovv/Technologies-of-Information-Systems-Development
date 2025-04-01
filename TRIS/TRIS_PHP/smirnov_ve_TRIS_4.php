<!-- ПРИМЕРЫ -->

<?php 
class SimpleClass { 
// свойства
  public $var = 'a default value';
 
// методы
  public function displayVar() { 
    echo $this->var; 
  } 
} 
?>

<?php 
  $instance = new SimpleClass();

// теперь можно вызвать метод (можно вызвать только в контексте объекта)
  $instance->displayVar();
?>

<?php 
class ExtendClass extends SimpleClass { 
// Переопределим родительский метод
   function displayVar() { 
    echo "Расширяемый класс\n";
    parent::displayVar(); 
  } 
} 
$extended = new ExtendClass(); 
$extended->displayVar(); 
?>

<?php 
class BaseClass { 
    function __construct() { 
      print "Конструктор класса BaseClass\n"; 
    } 
  } 
  
  class SubClass extends BaseClass { 
    function __construct() { 
      parent::__construct(); 
      print "Конструктор класса SubClass\n"; 
    } 
  } 
  
  $obj = new BaseClass(); 
  $obj = new SubClass(); 
  
?>

<?php 
class MyDestructableClass {
  function __construct() {
    print "Конструктор\n";
    $this->name = "MyDestructableClass";
  }
  function __destruct() {
    print "Уничтожается ".$this->name."\n";
  }
}
$obj = new MyDestructableClass();
?>

<?php 
interface MyInterface {
  public function doThis();
  public function doThat();
  public function setName($name);
}
class MyClass implements MyInterface {
  protected $name;
  public function doThis() { /* код метода */ }
  public function doThat() { /* код метода */ }
  public function setName($name) {
    $this->name = $name;
  }
}
?>

<?php 
abstract class MyAbstract { 
    public $name; 
    public function doThis() {/* код */ }
    abstract public function doThat(); 
    abstract public function setName($name); 
  } 
  class MyClass extends MyAbstract { 
    public function doThat() {/* код */ }
    public function setName($name) { 
      $this->name = $name; 
    } 
  }
  
?>

<!-- РЕШЕНИЕ ЗАДАЧ -->

<!-- Упражнение 1 -->


<!-- Создайте абстрактный класс Shape
Добавьте private свойство $name со значением по умолчанию «фигура»
Напишите public геттер и сеттер для свойства $name
Опишите абстрактные функции: perimeter, area
Добавьте конструктор класса -->

<?php 
  abstract class Shape {
    private $name = "фигура";
    // сеттер. если в качестве name не строка, выдай ошибку, условно
    public function setName($name) {
        $this->name = $name;
    }
    // геттер - для того, чтобы прочитать значение; всегда просто ретёрним
    public function getName() {
        return $this->name;
  }
  // функции
  abstract public function perimeter();
  abstract public function area();
  // конструктор
  function __construct() {
    $this->name = $name;
  }
}
?>

