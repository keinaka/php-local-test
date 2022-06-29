<?php
$product_id = $_GET["product"];

switch ($product_id) {
    case 'prod_code_a':
        $title = 'Product A';
        $description = 'This is Good';
        $image = '/img/a.jpg';
        $price = 500;
        break;
    case 'prod_code_b':
        $title = 'Product B';
        $description = 'Your choice is perfect';
        $image = '/img/b.jpg';
        $price = 800;
        break;
    case 'prod_code_c':
        $title = 'Product C';
        $description = 'Brilliant!';
        $image = '/img/c.jpg';
        $price = 1500;
        break;
    case 'prod_code_d':
        $title = 'Product D';
        $description = 'Hope you satisfied';
        $image = '/img/d.jpg';
        $price = 5000;
        break;
    default:
        $title = 'Home page';
        $description = 'Welcome to my shop!';
}

?>