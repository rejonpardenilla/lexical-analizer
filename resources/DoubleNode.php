<?php 
require_once 'Node.php';

class DoubleNode extends Node{
	private $previousNode;

	function __construct($data) {
		parent::__construct($data);
		$this->previousNode = null;
	}

	function getPreviousNode() {
		return $this->previousNode;
	}

	function setPreviousNode($previousNode) {
		$this->previousNode = $previousNode;
	} 
}

 ?>