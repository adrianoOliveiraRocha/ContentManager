<?php

class Post:
	private $id; 
	private $title;
	private $text;
	private $image;
	
	public function setTitle($title) {
		$this->title = $title;
	}
	public function getTitle () {
		return $this->title;
		
	}

	public function setText($text) {
		$this->title = $text;
	}
	public function getText() {
		return $this->text;
		
	}