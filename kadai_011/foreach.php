<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
$products_inf = ['name' => '玉ねぎ', 'price' => 200, 'district' => '北海道'];
foreach($products_inf as $index => $value){
  echo "{$index} : {$value}<br>";
}
    ?>
  </p>
</body>
</html>