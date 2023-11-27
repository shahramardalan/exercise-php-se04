<?php
    include_once("data.php");

    $serialized = serialize($products);

    setcookie("products", $serialized, -1);

    $deSerialized = unserialize($_COOKIE["products"]);
    echo "<pre>";
    print_r($_COOKIE["products"]);
    echo "</pre>";
    echo "<pre>";
    print_r($deSerialized);
    echo "</pre>";
?>