<?php  
require "animal.php";
require "frog.php";
require "ape.php";

$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 2
echo $sheep->cold_blooded."<br>"; // false

$kodok = new Frog("Buduk");

echo $kodok->name."<br>";
echo $kodok->legs;
echo $kodok->cold_blooded."<br>";
echo $kodok->loncat."<br><br>";

$sunggokong = new Ape("kera sakti");


echo $sunggokong->name."<br>";
echo $sunggokong->legs;
echo $sunggokong->cold_blooded."<br>";
echo $sunggokong->suara."<br><br>";
echo $sunggokong;
?>