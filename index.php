<?php
require_once "frog.php";
require_once "ape.php";
require_once "animal.php";

$sheep = new animal();
echo "Name: " . $sheep->get_name() . "<br>";
echo "legs:". $sheep->get_legs() . "<br>";
echo "cold blooded: ". $sheep->get_blood() . "<br>";

echo "<br>";

$kodok = new frog();
echo "Name: " . $kodok->getfrogname() . "<br>";
echo "legs:".$kodok->getfroglegs() . "<br>";
echo "cold blooded: ".$kodok->getfrogblood() . "<br>";
echo "jump: " . $kodok->getfrogjump() . "<br>";

echo "<br>";

$ape = new ape();
echo "Name: " .$ape->getapename() . "<br>";
echo "legs:".$ape->getapelegs() . "<br>";
echo "cold blooded: ".$ape->getapeblood() . "<br>";
echo "Yell:   " .  $ape->getapeyell() . "<br>";
?>
