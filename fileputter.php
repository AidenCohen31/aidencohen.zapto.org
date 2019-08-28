<html>

<body>
<?php

$file = 'writing/' + substr($_SERVER['PHP_SELF'], 0)
$handle = fopen($file, 'r') 
$data = fread($handle, filesize($file))

?>


</body>
</html>