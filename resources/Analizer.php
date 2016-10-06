<?php 
require_once 'Stack.php';

class Analizer{
	public $expression;

	function __construct($expression) {
		$this->expression = $expression;
	}

	function isParenthesisValid() {
		$parenthesis = $this->expression;
		$stack = new Stack();

		if (strlen($parenthesis) <= 0) {
			return true;
		} else {
			for ($i=0; $i < strlen($parenthesis); $i++) {
				$char = $parenthesis[$i];
				if ($char == '(') {
					$stack->push($char);
				} elseif ($char == ')') {

					if ($stack->peek() != null) {
						$stack->pop();
					} else {
						return false;
					}
					
				}
			}
			if ($stack->peek() == null) {
				return true;
			} else {
				return false;
			}
		}

	}

}
 ?>