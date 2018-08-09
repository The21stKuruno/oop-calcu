<?php
  if(isset($_POST['smbCalculate'])) {
    $txtNumOne = $_POST['txtNumOne'];
    $txtNumTwo = $_POST['txtNumTwo'];
    $operator = $_POST['sltOperator'];
    if(empty($txtNumOne) || empty($txtNumTwo)) {
      header("Location: ../index.php?calculate=emptyfields");
    } else {
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
    }
  } else {
    header("Location: ../index.php?calculate=error");
  }
?>