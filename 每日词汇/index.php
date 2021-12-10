<?php
include("index.html");
$Hit_Counter_Filename = "count.txt";

function hit_count()
{
    global $Hit_Counter_Filename;
    $hit = 0;
    if (file_exists($Hit_Counter_Filename)) {
        $hit = file_get_contents($Hit_Counter_Filename);
    }
    $hit++;
    file_put_contents($Hit_Counter_Filename, $hit);
    return $hit;
}

?>
<p>
    你好，欢迎进入每日词汇页面。
    在这里，你每次访问我们每日词汇页面，都会随机产生10个单词，方便您备考背诵。
</p>
<p><a href="word.php">点此处查看今天的每日单词</a></p>
<p>该页面已经被访问<?= hit_count() ?>次</p>
</body>

</html>