<?php
  include_once 'includes/calculateclass.inc.php';

  $txtNumOne = $_POST['txtNumOne'];
  $txtNumTwo = $_POST['txtNumTwo'];
  $sltOperator = $_POST['sltOperator'];

  $calculate = new CalculateClass ($txtNumOne, $txtNumTwo, $sltOperator);
  $result = $calculate->answer();
  header ("Location: index.php?calculate=success&result=$result");
?>