<?php
//node structure
class Node
{
	public $data;
	public $next;
}

class LinkedList
{
	public $head;

	//constructor to create an empty LinkedList
	public function __construct()
	{
		$this->head = null;
	}
};

$MyList = new LinkedList();
