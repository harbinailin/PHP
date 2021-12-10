<?php
include("index.html");
$Word_filename="word.txt";

function read_word(){
    global $Word_filename;
    $lines=file($Word_filename);
    $random_index=rand(10,count($lines)-1);
    $random_line=$lines[$random_index];
    $word_all=explode("\t",$random_line);
    list($word)=$word_all;
?>
<p>
    <?=$word?>
</p>
<?php
}
?>
<p>今天的每日单词是:</p>
<?php
read_word();
?>
</body>
</html>