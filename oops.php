<?php
interface Calculate{
 public function calculatePerimeter();
 public function calculateVolume();

}

abstract class Area implements Calculate{
  public $dimensions;
  const PI =3.1416;
  abstract public function calculateSurfaceArea();
  public function __construct($dimensions) {
        $this->dimensions = $dimensions;
    }
  
}


class Sphere extends Area{
 const PI =3.1416;
 public function calculateVolume(){
 
  $x =(4/3)*self::PI*$this->dimensions**3;
  return $x;
 }
 public function calculateSurfaceArea(){
 
  $y =4*self::PI*$this->dimensions**2;
   return $y;
 }
 public function calculatePerimeter() {
   $z =2*self::PI*$this->dimensions;
    return $z;
    }
}

class cube extends Area{
 
 public function calculateVolume(){
 
  $x =$this->dimensions**3;
  return $x;
 }
 public function calculateSurfaceArea(){
  
  $y =6*$this->dimensions**2;
   return $y;
 }
 public function calculatePerimeter() {
   $z =12*$this->dimensions;
    return $z;
    }
}

// class square extends 

// $circle1 = new Circle();
// echo $circle1->area(4);
echo'<br>';
$spher1 =new Sphere(3);
echo 'Volume of sphere = '.$spher1->calculateVolume();
echo'<br>';
echo 'Surface area of sphere = '.$spher1->calculateSurfaceArea();
echo'<br>';
echo ' Perimeter of sphere = '.$spher1->calculatePerimeter();

echo'<br>';
$cube1 =new cube(4);
echo 'Volume of cube = '.$cube1->calculateVolume();
echo'<br>';
echo 'Surface area of cube = '.$cube1->calculateSurfaceArea();
echo'<br>';
echo ' Perimeter of cube  = '.$cube1->calculatePerimeter();


?>
