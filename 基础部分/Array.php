<!-- 从数组中删除元素 -->
<pre>
<?php
$grades = array(50, 60, 70, 80, 90, 100);
array_splice($grades, 2, 3);
print "\ngrades array contains " . count($grades) . "elements(array_splice).\n";
print_r($grades);
unset($grades[1]);
print "grades array contains " . count($grades) . "elements(unset).\n";
print_r($grades);
?>
</pre>
<!-- 数组中的foreach循环 -->
<?php
function array_max_foreach($a)
{
    $largest = $a[0];
    for ($i = 0; $i < count($a); $i++) {
        $largest = max($largest, $a[$i]);
    }
    return $largest;
}
function array_max_for($a)
{
    $largest = $a[0];
    foreach ($a as $num) {
        $largest = max($largest, $num);
    }
    return $largest;
}
?>
<!-- 数组与字符串互换函数explode/implode -->
<?php
$s = "UW CSE 190 M";
$a = explode(" ", $s);
$s2 = implode("---", $a);
?>