<?php
    function renderProducts($name, $description, $quantity, $color){
        $product = "<div class='rounded-xl bg-green-100 p-5 mt-5'>";
        $product .= "<div class='font-bold pb-2'>Name : {$name}</div>";
        $product .= "<p class='font-medium pb-1 bg-green-200'>Description : {$description}</p>";
        $product .= "<h3 class='font-bold text-sm pb-1'>Quantity : {$quantity}</h3>";
        $product .= "<h3 class='font-bold text-sm'>Color's : {$color}</h3>";
        $product .= "</div>";

        return $product;
    }
?>