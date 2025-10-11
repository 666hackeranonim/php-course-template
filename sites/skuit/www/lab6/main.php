<?php
$product1 = "топор";
$product2 = "перчатки";
$product3 = "сумка";
$product4 = "ремень";
$product5 = "нож";
$product6 = "плитка";
$product7 = "молоток";
$product8 = "гвоздодер";
$product9 = "лопата";
$product10 = "маска";
$product11 = "каска";
$product12 = "краска";
$product13 = "кисть";
$product14 = "стол";
$product15 = "ручка";

$price1 = "5000";
$price2 = "3000";
$price3 = "1500";
$price4 = "6000";
$price5 = "150000000000000";
$price6 = "200";
$price7 = "1200";
$price8 = "2900";
$price9 = "3000";
$price10 = "900";
$price11 = "4000";
$price12 = "3000";
$price13 = "12300";
$price14 = "20030";
$price15 = "2500";

$products = [  
    $product1, $product2, $product3, $product4, $product5,  
    $product6, $product7, $product8, $product9, $product10,  
    $product11, $product12, $product13, $product14, $product15  
];  
  
$prices = [  
    $price1, $price2, $price3, $price4, $price5,  
    $price6, $price7, $price8, $price9, $price10,  
    $price11, $price12, $price13, $price14, $price15
];

?>

<div class="product-list">
    <h2>Товары и цены<h3>

    <?php for ($i = 0; $i < count ($products); $i++) { ?>
    <div class= "product-card">
        <div class="product-name"><?= $products[$i]?></div>
        <div class="product-price"><?= $prices[$i]?> Р</div>
    </div>
    <?php } ?>
</div>


