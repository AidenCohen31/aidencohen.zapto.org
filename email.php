<html>

<body>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_POST["sugg"];
$name = $_POST["name"];
$email = $_POST["email"];
$c = 'website suggs';
$d = $c .= $name;
$thanks = "Thank You for making my website better. I will definitely look forward to implementing".$msg."Thank You for taking your time to do this. Sincerely, Aiden Cohen.";
if(mail("aidencohen31@gmail.com",$d ,$msg ))
{
echo "message sent";
}
mail($email, "Thank You", $thanks );
?>

<a href = aidencohen.zapto.org/index.html> return to home </a>
</body>



</html>
