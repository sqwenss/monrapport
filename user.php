<?php

class user{
	public function setBdd(){
		$connect = new PDO("mysql: host=localhost;dbname=stage;",'root','');
		return $connect;
	}

	public function insert($pseudo){
		$connect = $this->setBdd();
		$request = $connect->prepare('INSERT INTO visiteurs(pseudo) VALUES (:pseudo)');
		$result = $request->execute(['pseudo'=>$pseudo]);
		
	}
}
