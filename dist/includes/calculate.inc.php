<?php
  if(isset($_POST['smbCalculate'])) {
    $txtNumOne = $_POST['txtNumOne'];
    $txtNumTwo = $_POST['txtNumTwo'];
    $operator = $_POST['sltOperator'];
    $result = 0;
    if(empty($txtNumOne) || empty($txtNumTwo)) {
      header("Location: ../index.php?calculate=emptyfields");
    } else {
      switch ($operator) {
        case 'Add':
        $result = $txtNumOne + $txtNumTwo;
        header("Location: ../index.php?calculate=success&result=$result");
        break;
        case 'Subtract':
        $result = $txtNumOne - $txtNumTwo;
        header("Location: ../index.php?calculate=success&result=$result");
        break;
        case 'Multiply':
        $result = $txtNumOne * $txtNumTwo;
        header("Location: ../index.php?calculate=success&result=$result");
        break;
        case 'Divide':
        $result = $txtNumOne / $txtNumTwo;
        header("Location: ../index.php?calculate=success&result=$result");
        break;
      }
    }
  } else {
    header("Location: ../index.php?calculate=error");
  }
?>