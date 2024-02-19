<!--
## License and Copyright
### This file is port of the "ngphp" project, copyright 2024 by Maik Tizziani
### The project is published under let LGPL3 License
-->

<?php
  function multiplyRandomWithThree(): int {
      $rand = rand(10, 100);

      // set the debug point to debug what is in $random
      $result = $rand * 3;
      return $result;
  }
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Testing with PHP <?php echo phpversion(); ?></h1>
    <div>
        Random Wert * 3 = <?php echo multiplyRandomWithThree(); ?>
    </div>
</body>
</html>


<?php

//phpinfo();
xdebug_info();