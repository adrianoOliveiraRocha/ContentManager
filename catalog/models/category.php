<?php


class Category 
{
	private $id;
	private $name;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId() 
	{
		return $this->id;
	}
	public function setName($name) 
	{
		$this->name = $name;
	}
	public function getName() 
	{
		return $this->name;
	}

	public function save() 
	{
		if (CategoryDAO::save($this)) {
			return true;
		} else {
			return false;
		}
	}
	// public function update() {
	// 	$q = "update categoria set nome = '{$this->nome}' where id = {$this->id}";
	// 	if (CategoriaDAO::update($q)) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }
	// public static function delete($id) {
	// 	if (CategoriaDAO::deletar($id)) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }
}