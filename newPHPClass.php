<?php

class Car {
    public $brand;
    public $model;
    public $color;
    public $transmission;
    public $speed;
    public function __construct($brand, $model, $color, $transmission) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->transmission = $transmission;
    }
    public function go(){
        if (empty($this->speed)){
            echo $this->brand. ' '. $this->model. ' не двигается.'. '<br>';
        }
        else {
            echo $this->brand. ' '. $this->model. ' двигается со скоростью '. $this->speed. 'км/ч.'. '<br>';
        }
    }
}

class Televisor {
    public $brand;
    public $diagonal;
    public $channel;
    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function next($newChannel){
        $this->channel = $newChannel;
        echo 'Вы переключили на канал '. $this->channel. ' на телевизоре '. $this->brand. '<br>';
    }
}

class Pen {
    public $brand;
    public $colorInk;
    public $color;
    public $inkType;
    public $material;
    public function __construct($colorInk, $inkType) {
        $this->colorInk = $colorInk;
        $this->inkType = $inkType;
    }
    public function change($colorInk) {
        if ($this->colorInk == $colorInk) {
            echo 'У ручки и так '. $this->colorInk. ' цвет чернил.'. '<br>';
        }
        else {
            $this->colorInk = $colorInk;
            echo 'Вы поменяли цвет чернил на '. $this->colorInk. '<br>';
        }
    }
}

class Duck {
    public $family;
    public $color;
    public $wt;
    private $hotDuck;
    public function __construct($family, $wt) {
        $this->family = $family;
        $this->wt = $wt;
    }
    public function hot() {
        $this->hotDuck = 'в яблоках';
        echo 'Утка '. $this->family. ' '. $this->hotDuck. ' '. $this->wt. 'кг.'. '<br>';
    }
}

class Product {
    public $price;
    private $discount;
    public function __construct($price) {
        $this->price = $price;
    }
    public function discount ($n) {
        $this->discount = $n;
        $this->price = $this->price * (100 - $this->discount) / 100;
    }
    public function view () {
        echo 'Ваша скидка составила '. $this->discount. '%. ';
    }
}

$car1 = new Car('BMW', 'X5', 'белый', 'АКП');
$car1->go();
$car2 = new Car('Лада', 'Калина', 'красный', 'МКП');
$car2->speed = 40;
$car2->go();

$tv1 = new Televisor('Samsung');
$tv2 = new Televisor('LG');
$tv1->next('Россия 24');
$tv2->next('Культура');

$pen1 = new Pen('черный', 'гелевая');
$pen2 = new Pen('красный', 'шариковая');
$pen1->change('черный');
$pen2->change('зеленый');

$duck1 = new Duck('домашняя', 10);
$duck2 = new Duck('кряква', 2);
$duck1->hot();

$product1 = new Product(1000);
$product2 = new Product(184);
$product1->discount(2);
$product2->discount(10);
echo 'Цена со скидкой '. $product1->price. ' руб.'. $product1->view(). '<br>';
echo 'Цена со скидкой '. $product2->price. ' руб.'. $product2->view(). '<br>';