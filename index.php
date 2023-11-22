<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products List</title>
</head>

<body class="bg-gray-100">
    <?php

    ?>
    <div class="flex justify-between">
        <div class="m-auto max-w-2xl">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="productName">
                        Product Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="productName" id="productName" type="text" placeholder="Product Name...">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" type="text" placeholder="Description...">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
                        quantity
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="quantity" id="quantity" type="text" placeholder="Product Name...">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="color">
                        Color
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="color" id="color" type="text" placeholder="Product Name...">
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Add to list
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="m-auto max-w-2xl">
            <?php
            include_once("data.php");
            include_once("renderProducts.php");
            foreach ($products as $product) {
                echo renderProducts($product["productName"], $product["description"], $product["quantity"], implode(" | ", $product["color"]));
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo renderProducts($_POST["productName"], $_POST["description"], $_POST["quantity"], $_POST["color"]);
            }
            ?>

        </div>
    </div>
</body>

</html>