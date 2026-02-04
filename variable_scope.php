<?php
echo "php data types";

$name="Rose's Women Clothes";
echo"string:$name<br>";

$items="25";
echo"integer:$items<br>";

$price="1499.50";
echo"float:$price<br>";

$available=true;
echo"boolean";
echo $available?"available":"not available";
echo"<br>";

$categories=array("westren","traditional","casual");
echo"array";
print_r($categories);
echo"<hr>";


//local scoope
function local_scope()
{
    $locvar="iam local";
    echo"local scope:$locvar<br>";
}
local_scope();

//global scope
$brand="Rose's Women Clothes";
function global_scope()
{
    global $brand;
    echo"global scope:$brand<br>";
}
global_scope();

//static scope 
function static_scope()
{
    static $count=1;
    $count++;
    echo"static value:$count<br>";
    $count++;
}
static_scope();
static_scope();
static_scope();
?>


