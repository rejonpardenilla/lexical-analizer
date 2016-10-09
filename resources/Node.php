<?php

class Node{
	private $data;
	private $nextNode;

	function __construct($data) {
		$this->data = $data;
		$this->nextNode = null;
	}

	function getData() {
		return $this->data;
	}

	function setData($data) {
		$this->data = $data;
	}

	function getNextNode() {
		return $this->nextNode;
	}

	function setNextNode($nextNode) {
		$this->nextNode = $nextNode;
	}
}

 ?>