<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
            <input type="text" id="von" name="von">
            <input type="text" id="bis" name="bis">
            <input type="submit" >
        </form>
        
        <?php
                ?><table style="border: 1px solid black;"><?php
                var_dump($_GET);
                $counter1 = 1;
              for ($i = $_GET['von'];$i <= $_GET['bis']; $i++) {
                  
                  if ($counter1 == 1) {
                     ?><tr><td><?php echo $i; ?></td><?php
                    $counter1++;
                  } elseif ($counter1 == 10) {
                     ?><td><?php echo $i; ?></td><br><?php
                     $counter1 = 1;
                  } else {
                     ?><td><?php echo $i; ?></td><?php
                      $counter1++;
                  }
              }
              
        ?>
                  </table>
    </body>
</html>

