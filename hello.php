<html>
 <head>
  <title>PHP Test</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
  body {
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    color: white;
    text-shadow: 2px 2px 2px rgba(255, 113, 218, 1);
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
$colors = array('red', 'blue', 'teal', 'salmon');
foreach ($colors as $color) {
    echo "Color is: $color.\n";
}
?>
 </div>
 </body>
</html>
