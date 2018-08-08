<?php
  if(isset($_GET['smbCalculate'])) {
    $txtNumOne = $_GET['txtNumOne'];
    $txtNumTwo = $_GET['txtNumTwo'];
    $operator = $_GET['sltOperator'];

    switch ($operator) {
      case 'Add':
      echo $txtNumOne + $txtNumTwo;
      break;
      case 'Subtract':
      echo $txtNumOne - $txtNumTwo;
      break;
      case 'Multiply':
      echo $txtNumOne * $txtNumTwo;
      break;
      case 'Divide':
      echo $txtNumOne / $txtNumTwo;
      break;
    }
  } else {
    header("Location: ../index.php?calculate=error");
  }
?>