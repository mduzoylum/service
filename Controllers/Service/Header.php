<?php
$json = file_get_contents('products.json');
$products = json_decode($json, true);

// İstek gelen host ve content type üzerinden yönlendirilebilir
//$referer=parse_url($_SERVER['HTTP_HOST'],PHP_URL_HOST);
//$content_type=$_SERVER["CONTENT_TYPE"];
$referer="cimri";
$content_type="application/xml";


switch ($referer) {
    case 'facebook':
        $platform = new Facebook($content_type, $products);
        break;
    case 'google':
        $platform = new Google($content_type, $products);
        break;
    case 'cimri':
        $platform = new Cimri($content_type, $products);
        break;
}

$context = new Context($platform);
$product = $context->getProduct();

echo $product;