<?php
$json = file_get_contents('products.json');
$products = json_decode($json, true);

// İstek gelen host ve content type üzerinden yönlendirilebilir
//$referer=parse_url($_SERVER['HTTP_HOST'],PHP_URL_HOST);
//$content_type=$_SERVER["CONTENT_TYPE"];

switch ("cimri") {
    case 'facebook':
        $platform = new Facebook("json", $products);
        break;
    case 'google':
        $platform = new Google("json", $products);
        break;
    case 'cimri':
        $platform = new Cimri("xml", $products);
        break;
}

$context = new Context($platform);
$product = $context->getProduct();

echo $product;