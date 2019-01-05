# Getting Started with PHP 🐘🌷

[Language Reference and Types](http://php.net/manual/en/langref.php)

```php
to run on localhost:8000/hello.php

php -S localhost:8000

<?php
  // Code will end here 
  ?> This is output as literal text.

  // Arrays
  <?php echo '<br /><br /> For each in an array: ';
    $colors = array('red', 'blue', 'teal', 'salmon');
      foreach ($colors as $color) {
        echo "Color is: $color.\n";
      }
  ?>

```