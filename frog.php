<?php
require_once "Animal.php";
class frog extends animal
{
    public function getfrogname()
    {
        echo"<br/><br/>name : buduk ";
    }
    public function getfroglegs()
    {
        echo"<br/>legs : 4 ";
    }
    public function getfrogblood()
    {
        echo"<br/>cold blooded : no ";
    }
    public function getfrogjump()
    {
        echo"<br/>jump : wakakak ";
    }
}
?>