<!-- if/else -->
<?php
if ($a == 5) {
    print "a等于5";
} else if ($a == 6) {
    print "a等于6";
} else {
    print "a既不等于5又不等于6";
}
?>
<!-- for loop -->
<?php
for ($i = 0; $i < 10; $i++) {
    print "$i squared is" . $i * $i . ".\n";
}
?>
<!-- foreach -->
<?php
$stooges = array("Larry", "Moe", "Curly", "Shemp");
foreach ($stooges as $stooge) {
    print "Moe slaps $stooge\n";
}
for ($i = 0; $i < count($stooges); $i++) {
    print "Moe slaps {$stooges[$i]}\n";
}
?>
<!-- while loop -->
<?php
$x = 1;
while ($x <= 5) {
    echo "这个数字是:$X";
    $x++;
}
?>
<!-- do...while loop -->
<?php
$x=1;
do{
    echo "这个数字是:$x";
    $x++;
}while($x<=5);
?>