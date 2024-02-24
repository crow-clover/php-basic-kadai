<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
<p>
    <?php

  $nums = [15, 4, 18, 23, 10];

  

  // 昇順の場合

  function sort_2way($order, $array) {
    if($order === TRUE) {
      echo '昇順にソートします。<br>';
      sort($array);
      foreach ($array as $array) {
        echo $array . '<br>';
      }

      // 違う場合
        } else {
      echo '降順にソートします。<br>'; 
      rsort($array);
      foreach ($array as $array) {
        echo $array . '<br>';
      }
     }
    }

  // 昇順関数呼び出し
  sort_2way(TRUE, $nums);

 
  // 降順関数呼び出し
  sort_2way(FALSE, $nums);
  
    ?>
</p>

</body>
</html>