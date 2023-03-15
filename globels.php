
<?php
$name ='vishnu';

function getName(){
  $x =$GLOBALS['name'];
  return $x;
}

echo getName()."<br>";


class Name{

   public function getName(){
    $x =$GLOBALS['name'];
    return $x;
   }
}

$myname = new Name();

echo $myname->getName()."<br>";

// var_dump($_)

?>
