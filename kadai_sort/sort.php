<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
<?php
function sort_2way(array $nums, string $order = 'asc'): array {
    if ($order === 'asc') {
        sort($nums); // 昇順にソート
    } elseif ($order === 'desc') {
        rsort($nums); // 降順にソート
    }
    return $nums; // ソート済みの配列を返す
}

$nums = [15, 4, 18, 23, 10];

// 昇順ソート
$sorted_asc = sort_2way($nums, 'asc');
echo '昇順にソートします <br>';
 foreach($sorted_asc as $num){
  echo $num . '<br>';
 }

// 降順ソート
$sorted_desc = sort_2way($nums, 'desc');
echo '降順にソートします <br>';
 foreach($sorted_desc as $num){
  echo $num . '<br>';
 }
?>
</p>
</body>

</html>