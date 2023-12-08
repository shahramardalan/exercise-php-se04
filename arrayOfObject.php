<?php

class Car{
    private $company;
    private $model;


    public function setCompany($company){
        $this->company = $company;
    }

    public function getCompany(){
        return $this->company;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getModel(){
        return $this->model;
    }

    public function __construct($company, $model){
        $this->company = $company;
        $this->model = $model;
    }
}

class CarCollection{
    private $cars;

    public function __construct(){
        $this->cars = [];
    }

    public function addCars(Car $cars){
        $this->cars[] = $cars;
    }

    public function getCars(){
        return $this->cars;
    }

}

$cars1 = new Car("BENZ", "S500");
$cars2 = new Car("BMW", "X6");

$col = new CarCollection();
$col->addCars($cars1);
$col->addCars($cars2);

echo "<pre>";

foreach($col->getCars() as $car) {
    echo <<<HTML
    <div>
        <h1>{$car->getCompany()}</h1>
        <h3>{$car->getModel()}</h3>
        <hr />
    </div>
    HTML;
}


?>