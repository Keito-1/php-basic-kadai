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
  $user_score_1 = 80;
  $user_score_2 = 60;
  $user_score_3 = 55;
  $user_score_4 = 40;
  $user_score_5 = 100;
  $user_score_6 = 25;
  $user_score_7 = 80;
  $user_score_8 = 95;
  $user_score_9 = 30;
  $user_score_10 = 60;

  $total = $user_score_1 + $user_score_2 + $user_score_3 + $user_score_4 + $user_score_5 + $user_score_6 + $user_score_7 + $user_score_8 + $user_score_9 + $user_score_10;
   echo $total;
   echo '<br>';
   $average = $total / 10;
   echo $average;
  ?>
</p>  

</body>
</html>