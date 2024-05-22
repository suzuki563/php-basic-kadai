<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
         if ($order) {
             sort($array); 
         } else {
             rsort($array); 
         }

         foreach ($array as $value) {
             echo $value . "<br>";
         }
     }

     $nums = [15, 4, 18, 23, 10];

     echo "昇順にソートします。<br>";
     sort_2way($nums, true);

     echo "<br>"; 

     echo "降順ソートします。<br>";
     sort_2way($nums, false);
     ?>
       
    </p>
</body>

</html>
