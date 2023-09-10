<?php
$product_description = filter_input(INPUT_POST, 'product_description');
$list_price = filter_input(INPUT_POST, 'list_price');
$discount_percent = filter_input(INPUT_POST,'discount_percent');

$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

$list_price_f = "$".number_format($list_price, 2);
$discount_percent_f = $discount_percent."%";
$discount_f = "$".number_format($discount, 2);
$discount_price_f = "$".number_format($discount_price, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>ex2_1</title>
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label for="">Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label for="">List price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label for="">Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label for="">Discount Amount:</label>
        <span><?php echo $discount_f; ?></span>

        <label for="">Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span>
    </main>
</body>
</html>