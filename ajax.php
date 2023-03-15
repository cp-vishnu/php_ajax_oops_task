<?php
$product_details = array(
array("ProductName"=>"Nike Air Max 90", "Price"=>"$120.00", "Description"=>"Classic and iconic sneakers from Nike.", "ImageURL"=>"download (11).jpg"),
array("ProductName"=>"Sony PlayStation 5", "Price"=>"$499.99", "Description"=>" The latest gaming console from Sony with cutting-edge technology and features.", "ImageURL"=>"download (12).jpg"),
array("ProductName"=>"Samsung 65 QLED 4K Smart TV", "Price"=>"$1,299.00", "Description"=>"Stunning 65 QLED TV from Samsung with 4K resolution and smart features", "ImageURL"=>"download (13).jpg"),
array("ProductName"=>"Apple MacBook Pro 16", "Price"=>"$2,399.00", "Description"=>"Powerful and elegant laptop from Apple", "ImageURL"=>"download (14).jpg"),
array("ProductName"=>"Amazon Echo Dot", "Price"=>"$49.99", "Description"=>"Smart speaker with Alexa", "ImageURL"=>"download (15).jpg"),
array("ProductName"=>"Canon EOS R5 Mirrorless Camera", "Price"=>"$3,899.00", "Description"=>"High-performance mirrorless camera from Canon", "ImageURL"=>"download (16).jpg"),
array("ProductName"=>"Bose QuietComfort 35 Wireless Headphones", "Price"=>"$299.00", "Description"=>"Premium noise-canceling headphones from Bose", "ImageURL"=>"download (17).jpg"),
array("ProductName"=>"Fitbit Versa 3 Smartwatch", "Price"=>"$229.95", "Description"=>"Advanced smartwatch from Fitbit with built-in GPS", "ImageURL"=>"download (18).jpg"),
array("ProductName"=>"Philips Sonicare DiamondClean Toothbrush", "Price"=>"$199.99", "Description"=>"Premium electric toothbrush from Philips", "ImageURL"=>"download (19).jpg"),
array("ProductName"=>"KitchenAid Artisan Stand Mixer", "Price"=>"$399.99", "Description"=>"Classic and stylish stand mixer from KitchenAid", "ImageURL"=>"download (20).jpg"),
);
$jsonData = json_encode($product_details);
echo $jsonData;
?>