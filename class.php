<pre>
<?php

class Mobile
{
    public $color;
    public $model;
    public $brand;

    private $serialNumber;

    function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    function getSerialNumber()
    {
        return $this->serialNumber;
    }

    function setInformation($color, $model, $brand, $serialNumber)
    {
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
        $this->serialNumber = $serialNumber;
    }
    function getInformation()
    {
        $color = $this->color;
        $model = $this->model;
        $brand = $this->brand;
        $serial = $this->serialNumber;

        return "color : " . $color . "\nmodel : " . $model . "\nbarnd : " . $brand . "\nserial : " . $serial;
    }
}

$mobile1 = new Mobile();
$mobile2 = new Mobile();
$mobile3 = new Mobile();

$mobile1->setInformation("gold", "iPhone14", "Apple", "123456");
$mobile2->setInformation("silver", "A13", "SAMSUNG", "3454");
$mobile3->setInformation("Black", "blackBerry", "AT&T", "99999766");

$mobileList = array($mobile1, $mobile2, $mobile3);

foreach ($mobileList as $mobile) {
    echo $mobile->getInformation();
    echo "<hr />";
}


?>

</pre>