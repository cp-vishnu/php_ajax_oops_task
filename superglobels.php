<?php

if(isset($_POST['submit'])){
  $name =$_POST['fname'];
  $address =$_POST['address'];
  $phone =$_POST['phone'];
  $img =$_FILES['profile']['name'];

  $existingData = file_get_contents('data.json');


$existingArray = json_decode($existingData, true);

 $data =array(
  "name"=>$name,
  "address"=>$address,
  "phoneNumber"=>$phone,
  "imageURL"=>$img
 );

 $existingArray[] = $data;

 $jsonData = json_encode($existingArray);
 $jsonData = rtrim($existingData, "]") . ",";
 $jsonData .= json_encode($data) . "]";

 file_put_contents('data.json', $jsonData);
echo $jsonData;
}
?>

