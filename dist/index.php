<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OOP Calculator</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
  <h1>Simple OOP Calculator</h1>
  <form action="includes/calculate.inc.php" method="POST">
    <input type="text" name="txtNumOne" placeholder="Num One">
    <input type="text" name="txtNumTwo" placeholder="Num Two">
    <select name="sltOperator">
      <option>Add</option>
      <option>Subtract</option>
      <option>Multiply</option>
      <option>Divide</option>
  </select> 
    <button type="submit" name="smbCalculate">Calculate</button>
  </form>
    <?php
      
    ?>
</div>
</body>
</html>