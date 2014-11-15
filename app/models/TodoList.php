<?php

class TodoList extends Eloquent{

	public function listItem()
	{
		return $this->hasMany('TodoItem');
	}
}