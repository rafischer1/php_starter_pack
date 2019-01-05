<html>
 <head>
  <title>PHP Test</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
  body {
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    color: white;
    text-shadow: 2px 4px 4px pink;
    background-color: darkgrey;
  }
  .blockDiv {
    text-shadow: none;
    border: 6px double pink;
    border-radius: 30px;
    color: black;
    background-color: white;
    height: auto;
    padding: 2%;
    margin: 0 1%;
  }

  hr {
    height: 2px;
    color: pink;
    background-color: pink;
    width: 50%;
    border-radius: 10px;
  }
  </style>
 </head>
 <body>
 <?php echo '<h1>Learning PHP</h1>'; ?> 
 <div class="blockDiv">
 <?php echo '<p>PHP Playground</p>'; ?>
 <?php $sentence = 'I am a string! followed by an int:'; $num = 37; echo $sentence, $num ?>
 <br />
 <br />
 <?php echo "Arrays: <br />";
  var_dump($array = array(
     "foo" => "bar",
      "Artie" => "Fischer",
      100   => -100,
      -100  => 100,
 ));
echo '<br /> Accessing by key ["Artie"]: ';
 var_dump($array["Artie"]);

 echo '<br /> Two item array - no keys: ';
 $array2 = array("hello", "world");
   var_dump($array2);  

   // methods on arrays forEach
echo '<br /><br /> For each in an array: ';
$colors = array('pink', 'blue', 'teal', 'salmon');
foreach ($colors as $color) {
    echo "Color is: $color.\n";
};
?>
<hr />
<?php   
echo 'PHP code recursive Fibonacci series: <br />'; 
// Recursive function for fibonacci series. 
function Fibonacci($number){ 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
};

$number = 20; 
for ($i = 0; $i <= $number; $i++){  
    echo Fibonacci($i),'=>'; 
};
?>
<hr />
 </div>
 </body>
</html>
