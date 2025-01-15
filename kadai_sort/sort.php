<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
<?php
function sort_2way(array $array, bool $order){
    if ($order) {
        sort($array); // 昇順にソート
        echo '昇順にソートします <br>';
    } 
    else {
        rsort($array); // 降順にソート
        echo '降順にソートします <br>';
    }
    
    foreach($array as $num){
      echo $num . '<br>';
     }
    }

$nums = [15, 4, 18, 23, 10];

// 昇順ソート
sort_2way($nums, TRUE);

// 降順ソート
sort_2way($nums, FALSE);

?>
</p>
</body>

</html>