<pre>
<?php
$a = rand(-100, 100);
$b = rand(-100, 100);
echo "\$a = ".$a."\n\$b = ".$b."\n";
if ($a >= 0 && $b >= 0)
    echo "\$a - \$b = ".($a - $b);
elseif ($a < 0 && $b < 0)
    echo "\$a * \$b = ".($a * $b);
else
    echo "\$a + \$b = ".($a + b);
?>
</pre>
