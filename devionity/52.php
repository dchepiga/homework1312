<?php
function test($x, $y)
{
    return ($y == 0 ? false : $x / $y);
}

echo test(1, 0) or die('Error');
echo 'Unreached line';