<?php
echo"<h2> php string functions</h2>";
$brand="Rose's Women Clothes";
echo"<h3>hardcoded strings</h3>";
echo"brand name:".$brand."<br>";
echo"length:".strlen($brand)."<br>";
?>

<form method="post">
Enter Username:
<input type="text" name="username">
<input type="submit" value="submit">
</form>

<?php
if(isset($_POST['username']))
{   $username=$_POST['username'];
    echo"<h3>user input string</h3>";
    echo"username:".$username."<br>";
    echo"length:".strlen($username)."<br>";
    echo"uppecase:".strtoupper($username)."<br>";
}
?>

<?php
//string functions
echo"<h3>Basic string </h3>";
echo"length:".strlen($brand)."<br>";
echo"word count:".str_word_count($brand)."<br>";
echo"reverse:".strrev($brand)."<br>";


echo"<h3>Case Conversion</h3>";
echo"Uppercase:".strtoupper($username)."<br>";
echo"Lowercase:".strtolower($username)."<br>";
echo"Ucfirst:".ucfirst($username)."<br>";
echo"Ucwords:".ucwords($username)."<br>";


echo"<h3>Search  &Replace</h3>";
echo"Position of 'Women':".strpos($brand, "Women")."<br>";
echo"Replace string:".str_replace("Rose's","Queen's",$brand)."<br>";


echo "<h3>Substring & Trimming</h3>";
$spaceString = "   hello php   ";
echo"Substring:".substr($username,0,7)."<br>";
echo"Trim:".trim($spaceString)."<br>";
echo"Ltrim:".ltrim($spaceString)."<br>";
echo"Rtrim:".rtrim($spaceString)."<br>";


echo"<h3>String Comparison</h3>";
echo"strcmp result:".strcmp("Bunty", "bunty") . "<br>";
echo"strcasecmp result:".strcasecmp("Admin", "admin") . "<br>";
?>

