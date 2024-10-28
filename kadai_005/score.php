<!DOCTYPE html>
 <html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHPの基礎編</title>
  </head>

  <body>
    <p>
      <?php
       // 変数に値を代入する
       $score1 = 80;

       // 変数に値を代入する
       $score2 = 60;

       // 変数に値を代入する
       $score3 = 55;

       // 変数に値を代入する
       $score4 = 40;

       // 変数に値を代入する
       $score5 = 100;

       // 変数に値を代入する
       $score6 = 25;

       // 変数に値を代入する
       $score7 = 80;

       // 変数に値を代入する
       $score8 = 95;

       // 変数に値を代入する
       $score9 = 30;

       // 変数に値を代入する
       $score10 = 60;
       ?>
    </p>   
      <p>
        <?php
        // 変数の平均
         echo ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;
        ?>
      </p>
    
  </body>
 </html>