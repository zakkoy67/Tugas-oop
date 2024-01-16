<?php
require_once "Animal.php";
class ape extends animal{
    public function getapename(){
        echo"<br/><br/>name: goku";
    }
    public function getapelegs(){
        echo"<br/>legs : 2";
    }
    public function getapeblood(){
        echo"<br/>cold blooded: no";
    }
    public function getapeyell(){
        return"auoauo";
    }
}