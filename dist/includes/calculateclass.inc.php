<?php
  class CalculateClass {

    public $txtNumOne;
    public $txtNumTwo;
    public $sltOperator;

    public function __construct($txtNumOne, $txtNumTwo, $sltOperator) {
      $this->txtNumOne = $txtNumOne;
      $this->txtNumTwo = $txtNumTwo;
      $this->sltOperator = $sltOperator;
    }

    public function answer() {
      switch($this->sltOperator) {
        case 'Add';
          $result = $this->txtNumOne + $this->txtNumTwo;
          break;
        case 'Subtract';
          $result = $this->txtNumOne - $this->txtNumTwo;
          break;
        case 'Multiply';
          $result = $this->txtNumOne * $this->txtNumTwo;
          break;
        case 'Divide';
          $result = $this->txtNumOne / $this->txtNumTwo;
          break;
      }
      return $result;
    }
  }
?>