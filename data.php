<?php

$products = [];

if (isset($_SESSION["products"])) {
    $products = unserialize($_SESSION["products"]);
} else {

    $products = [
        [
            "id" => 1,
            "productName" => "Iphone 14",
            "description" => "The iPhone 14 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display",
            "quantity" => 10,
            "color" => ["gold", "blue", "pink", "black", "silvar"],
        ],
        [
            "id" => 2,
            "productName" => "xbox one",
            "description" => "The Xbox One runs two operating systems within a hypervisor; games run within one separate operating system",
            "quantity" => 6,
            "color" => ["Purple", "blue", "red", "black", "silvar"],
        ],
        [
            "id" => 3,
            "productName" => "Pixel 8",
            "description" => "The Pixel 8 has a 6.2 in (157 mm) FHD+ 1080p OLED display at 428 ppi with a 2400 × 1080 pixel resolution and a 20:9 aspect ratio",
            "quantity" => 8,
            "color" => ["hazel", "obsidian", "rose"],
        ]
    ];

    $_SESSION["products"] = serialize($products);
}
?>