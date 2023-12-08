<?php
    class Product{
        public $id;
        public $name;
        public $price;
        public $color;
    }

    class Phone extends Product{
        public function __construct($id,$name,$price,$color){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->color = $color;
        }
    }

    $phone1 = new Phone(111, "iPhone 13", 700, "blue");

    echo "<pre>";
       var_dump($phone1);
    echo "/pre>";

?>