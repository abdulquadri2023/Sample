<?php
session_start();
echo "</br>";
echo $_SESSION['log'];
if(isset($_SESSION['log'])){
$usernameph = $_SESSION['log'];
}
echo "</br>";
print_r($_SESSION);

echo "<br/>";

$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

echo $myXMLData;






echo "<br/>";
?>
<input type="text" id="fname" >

<script>
document.getElementById("fname").onkeyup = function() {myFunction()};

function myFunction() {
  let x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
</script>