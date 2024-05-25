<?php
// printting a php 
echo "hello world \n";

//declaring a variable
$name = "Nandan ";
echo "$name";
// concatination 
echo "<br> hi".$name;

// indexed array 
$books = array("Data analytics","Web programing","Artificial intelegence","Data mining");
// getting a value from indexed array 
//echo $books[0];
var_dump($books);
echo"<br>";

// associative array 
$details = array(
    "name" => "Nandan",
    "age" => "20",
    "course" =>"BCA"
);
echo $details["name"];
//var_dump($details);

foreach($details as $detail) {
    echo  $detail."<br>";
}

// conditions in php 
$age = 20;

if($age<=18){
    echo "not able to drive";
}else{
    echo "can drive";
}











?>