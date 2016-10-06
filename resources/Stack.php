<?php 
require_once 'DoubleNode.php';

class Stack{
	private $first;
	private $top;

	function __construct() {
		$this->first = null;
		$this->top = null;
	}

	function push($data) {
		$newNode = new DoubleNode($data);
		if ($this->isEmpty()) {
			$this->top = $newNode;
			$this->first = $newNode;
		} else {
			$aux = $this->top;
			$this->top = $newNode;
			$aux->setNextNode($newNode);
			$newNode->setPreviousNode($aux);
		}
	}

	function pop() {
		if ($this->isEmpty()) {
			return null;
		} else {
			$aux = $this->top;
			if ($this->top == $this->first) {
				$this->first = null;
				$this->top = null;
			} else {
				$this->top = $aux->getPreviousNode();
				$this->top->setNextNode(null);
			}
			return $aux->getData();
		}
	}

	function peek() {
		if ($this->isEmpty()) {
			return null;
		} else {
			return $this->top->getData();
		}
	}

	function isEmpty() {
		return ($this->top == null);
	}

}

 ?>