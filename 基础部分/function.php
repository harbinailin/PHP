<?php
function slope($x1, $y1, $x2, $y2)
{
    $result = ($y2 - $y1) / ($x2 - $x1);
    return $result;
}
$x = 4;
$y = 6;
$my_slope = slope(0, 0, $x, $y);
?>
<!-- 带缺省参数值的函数 -->
<?php
function print_separated($str, $separator = ",")
{
    if (strlen($str) > 0) {
        print $str[0];
        for ($i = 1; $i < strlen($str); $i++) {
            print $separator . $str[$i];
        }
    }
}
print_separated("hello");
print_separated("hello", ".");
?>
<!-- 值传递 -->
<?php
function make_bigger($num)
{
    $num = $num * 2;
}
$x = 5;
make_bigger($x);
print $x; //5
?>
<!-- 参数传递 -->
<?php
function make_bigger1($num)
{
    $num = $num * 2;
}
$x = 5;
make_bigger1($x);
print $x; //10
?>