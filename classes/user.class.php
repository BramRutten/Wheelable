<?php

class user {

	private $username;
	private $type;

	function login(){
		// Als juist
		$_SESSION['hash'] = sha1(userid.$salt);
		$this->fillResults($id);
		//Ook in de db steken natuurlijk
	}

	function fillUser($id){
		// Db connectie zetten
		// User zoeken op basis van $id

		$this->type = $query['type'];
	}

	function getType(){
		return $this->type;
	}

	function isLoggedIn(){
		// Is er een sessie
		// IS er een hash gevonden?
		//filluser
		return true;

	}

}

$user = new User();

$user->isLoggedIn();

$user->username;

?>

class user{
	
}


<?php

class user{

	//Privates
	private $name;
	private $type;
	private $email;
	private $password;
	private $age;
	private $sex;
	private $image;
	private $longitude;
	private $latitude;
	private $range;

	//Getters
	public function __GET($property, $value){
		
		switch ($property) {
			case 'name':
				$this->$name = $value;
				break;

		switch ($property) {
			case 'type':
				$this->$type = $value;
				break;
			
			case 'email':
				$this->$email = $value;
				break;

			case 'password':
				$salt = "(TH!5-8e-Th3-54lT)";
				$this->$password = sha1($value.$salt);
				break;

			case 'age':
				$this->$age = $value;
				break;

			case 'sex':
				$this->$sex = $value;
				break;

			case 'image':
				$this->$image = $value;
				break;

			case 'longitude':
				$this->$longitude = $value;
				break;

			case 'latitude':
				$this->$longitude = $value;
				break;

			case 'range':
				$this->$range = $value;
				break;
		}

	}


	//Setters
	public function __SET($property){
		switch ($property) {
			case 'name':
				return $this->$name;
				break;
			
			case 'type':
				return $this->$type;
				break;

			case 'email':
				return $this->$email;
				break;

			case 'password':
				return $this->$password;
				break;

			case 'age':
				return $this->$age;
				break;

			case 'sex':
				return $this->$sex;
				break;

			case 'image':
				return $this->$image;
				break;

			case 'longitude':
				return $this->$longitude;
				break;

			case 'latitude':
				return $this->$latitude;
				break;

			case 'range':
				return $this->$range;
				break;


		}

	}




}

//getters

//setters

//functie registreren

//functie inloggen -> sessie:user_id+salt(sha1)

//CheckType

//ShowMap

?>