<?php
$num = $_POST['numero'];
$fact=1;
for ($i = 1; $i <= $num; $i++) 
{
    $fact=$fact*$i;
}
echo "<br/>   El factorial del numero ". $num. " es: ". $fact;
?>