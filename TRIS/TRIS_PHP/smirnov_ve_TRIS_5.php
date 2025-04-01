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
    function __construct($name = "фигура") {
    $this->name = $name;
  }
    // добавим prop()
    public function prop() {
    echo "Периметр ".$this->name."а равен ".$this->perimeter().", а площадь -- ".$this->area()."\n";
  }
}
?>


<!-- Упражнение 2
Создайте класс Circle, расширяющий класс Shape
Добавьте private свойство $radius
Напишите  public геттер и сеттер для этого свойства
Добавьте константу   const PI = 3.14159;
Создайте конструктор класса, в котором вызовите конструктор родительского класса с параметром «круг»
Реализуйте абстрактные функции родительского класса
Создайте объект класса Circle с радиусом 5 и напечатайте его свойства с помощью var_dump(); (за пределами класса)
Выведите площадь и периметр (с помощью echo) -->


<?php 
    class Circle extends Shape {

        // свойство радиус
        private $radius;

        // константа
        const PI = 3.14159;

        // сеттер
        public function setRadius($radius) {
        // this обращается к объекту
        $this->radius = $radius;
    }
        // геттер
        public function getRadius() {
        return $this->radius;
    }
    // конструктор класса
    function __construct($radius) {
        parent::__construct("круг");
        $this->radius = $radius; 
    }
    // абстрактные функции родительского класса
    public function perimeter() {
        return 2 * self::PI * $this->radius;
    }
    public function area() {
        return self::PI * $this->radius * $this->radius;
    }
}
    // Создайте объект класса Circle
    $c = new Circle(5);
    var_dump($c);
    // Выведите площадь и периметр
    echo $c->perimeter();
    echo $c->area();
?>


<!-- Упражнение 3

Создайте класс Rectangle, расширяющий класс Shape
Добавьте private свойства $length и $width
Геттеры и сеттеры создавать не будем ☺
Создайте конструктор класса, в котором вызовите конструктор родительского класса с параметром «прямоугольник»
Реализуйте абстрактные функции родительского класса
Создайте объект класса Rectangle с длиной 6 и шириной 4. Напечатайте его свойства
Выведите площадь и периметр -->

<?php 
    class Rectangle extends Shape {

        // свойства
        private $length;
        private $width;

        // конструктор - создает объект и присваивает ему длину и ширину, а также тип
        function __construct($length, $width) {
            parent::__construct("«прямоугольник»");
            $this->length = $length; 
            $this->width = $width; 
        }

        // абстрактные функции родительского класса
        public function perimeter() {
           return 2 * ($this->length + $this->width);
        }
        public function area() {
            return ($this->length * $this->width);
    }
}

    // 
    $r = new Rectangle(6, 4);
    var_dump($r);
    // 
    echo $r->perimeter(). "\n";
    echo $r->area(). "\n";
?>

<!-- Упражнение 4
Создайте класс Square, расширяющий класс Rectangle
Создайте конструктор класса, в котором задайте для свойства $name значение «квадрат»
Переопределите функции родительского класса
Создайте объект класса Square с длиной стороны 5 . Напечатайте его свойства
Выведите площадь и периметр -->

<?php 
    class Square extends Rectangle {
        // свойства
        private $length;

        // конструктор - создает объект и присваивает ему длину и ширину, а также тип
        function __construct($length) {
            parent::__construct($length, $length);
            $this->setName("Квадрат");
        }
    }

    // 
    $s = new Square(5);
    var_dump($s);
    // 
    echo $s->perimeter(). "\n";
    echo $s->area(). "\n";

    $c->prop();
    $r->prop();
    $s->prop();
?>