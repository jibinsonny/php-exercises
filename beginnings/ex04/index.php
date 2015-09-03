<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $a = 8;
        $b = "Value is now $a <br>";
        echo $b;
        $a += 2;
        $b = "Add 2. Value is now $a <br>";
        echo $b;
        $a -= 4;
        $b = "Subtract 4. Value is now $a <br>";
        echo $b;
        $a *= 5;
        $b = "Multiply by 5. Value is now $a <br>";
        echo $b;
        $a /= 3;
        $b = "Divide by 3. Value is now $a <br>";
        echo $b;
        $a ++;
        $b = "Increment value by one. Value is now $a <br>";
        echo $b;
        $a --;
        $b = "Decrement value by one. Value is now $a <br>";
        echo $b;
        
      ?>
    </p>
  </body>
</html>
