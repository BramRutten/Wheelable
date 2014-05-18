<?php



include_once("db.class.php");

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
	public function __set($property, $value){
		
		switch ($property) {

			case 'user_id':
				$this->user_id = $value;
				break;

			case 'name':
				$this->name = $value;
				break;

			case 'type':
				$this->type = $value;
				break;
			
			case 'email':
				$this->email = $value;
				break;

			case 'password':
				$salt = "(TH!5-8e-Th3-54lT)";
				$this->password = sha1($value.$salt);
				break;

			case 'age':
				$this->age = $value;
				break;

			case 'sex':
				$this->sex = $value;
				break;

			case 'image':
				$this->image = $value;
				break;

			case 'longitude':
				$this->longitude = $value;
				break;

			case 'latitude':
				$this->longitude = $value;
				break;

			case 'range':
				$this->range = $value;
				break;

			case 'hash':
				$this->hash = $value;
				break;
		}

	}


	//Setters
	public function __get($property){
		switch ($property) {

			case 'user_id':
				return $this->user_id;
				break;

			case 'name':
				return $this->name;
				break;
			
			case 'type':
				return $this->type;
				break;

			case 'email':
				return $this->email;
				break;

			case 'password':
				return $this->password;
				break;

			case 'age':
				return $this->age;
				break;

			case 'sex':
				return $this->sex;
				break;

			case 'image':
				return $this->image;
				break;

			case 'longitude':
				return $this->longitude;
				break;

			case 'latitude':
				return $this->latitude;
				break;

			case 'range':
				return $this->range;
				break;

			case 'hash':
				return $this->hash;

		}

	}


	function signup(){

		$db = new Db();
		$sql = "INSERT INTO tbl_user (name, email, password, type) 
			VALUES ('".$db->conn->real_escape_string($this->name)."',
					'".$db->conn->real_escape_string($this->email)."',
					'".$db->conn->real_escape_string($this->password)."',
					'".$db->conn->real_escape_string($this->type)."');";

		$db->conn->query($sql);
		header ('Location: index.php');
	}


	function login($email,$password){

		$db = new Db();
		$salt = "(TH!5-8e-Th3-54lT)";
		$sql = 'SELECT * from tbl_user WHERE email = "'.$db->conn->real_escape_string($email).'" AND password = "'.$db->conn->real_escape_string(sha1($password.$salt)).'";';

		

		$result = $db->conn->query($sql);
		$row = $result->fetch_assoc();

		if($result->num_rows ==1){

			$hash = sha1($row['user_id'].$salt);

			$sql='UPDATE tbl_user SET hash="'.$hash.'" WHERE email ="'.$db->conn->real_escape_string($email).'";';

			$db->conn->query($sql);

			$_SESSION['hash'] = $hash;

			$this->fillUser($row['user_id']);

			header('Location: base.php');

		}else{
			throw new Exception("Email and/or password incorrect.");	
		}
	}

	function fillUser($id){
		$db = new Db();
		
		$salt = "(TH!5-8e-Th3-54lT)";
		$sql = 'SELECT * from tbl_user WHERE user_id = "'.$db->conn->real_escape_string($id).'";';

		$result = $db->conn->query($sql);
		$row = $result->fetch_assoc();

		$this->user_id = $row['user_id'];
		$this->name = $row['name'];
		$this->type = $row['type'];
		$this->email = $row['email'];
		$this->age = $row['age'];
		$this->sex = $row['sex'];
		$this->image = $row['image'];
		$this->longitude = $row['longitude'];
		$this->range = $row['range'];
		$this->hash = $row['hash'];
	}

 
 	function isLoggedIn(){
		
		if($_SESSION['hash']){

			$db = new Db();
		
			$sql = 'SELECT * from tbl_user WHERE hash = "'.$_SESSION['hash'].'";';

			$result = $db->conn->query($sql);
			$row = $result->fetch_assoc();

			if($result->num_rows ==1){


				$this->fillUser($row['user_id']);

			}else{
				header ('Location: destroy.php');
			}
			

		}else{
			header ('Location: destroy.php');
		}
	}
//CheckType

//ShowMap




}
?>

