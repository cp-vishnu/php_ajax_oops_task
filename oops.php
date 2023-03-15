<?php
interface Calculate{
 public function area($r);
 public function volume($r);

}

abstract class Circle implements Calculate{
  public $r;
  const PI =3.1416;
  abstract public function surfaceArea($r);
  public function area($r){
  $this->r=$r;
  $x =self::PI*$this->r**2;
  return $x;
  
  }
  
}


class Sphere extends Circle{
 public $r;
 public $rd;
 const PI =3.1416;
 public function volume($r){
  $this->r =$r;
  $x =(4/3)*self::PI*$this->r**3;
  return $x;
 }
 public function surfaceArea($rd){
  $this->rd =$rd;
  $y =4*self::PI*$this->rd**2;
   return $y;
 }
}

// $circle1 = new Circle();
// echo $circle1->area(4);
echo'<br>';
$spher1 =new Sphere();
echo 'Volume of sphere = '.$spher1->volume(3);
echo'<br>';
echo 'Surface area of sphere = '.$spher1->surfaceArea(5);
echo'<br>';
echo 'Area of circle = '.$spher1->area(5);


?>
