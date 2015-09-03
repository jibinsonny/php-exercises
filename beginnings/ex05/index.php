<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $name = "Harry";
        $age = 28;
        
        var_dump( "Harry" );
        echo '<br>';
        print_r( $name );
        echo '<br>';
        var_dump(28);
        echo '<br>';
        
        $name = NULL;
        var_dump( $name );
        echo '<br>';
        
      ?>
    </p>
  </body>
</html>
