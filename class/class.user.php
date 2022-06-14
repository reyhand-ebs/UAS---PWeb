<?php
include('../inc.koneksi.php');

class User extends Connection {
	private $userid='';
	private $email='';
	private $password='';
	private $fname='';
	private $lname='';
	private $nohp='';
	private $foto='';
	private $idrole='';
	
	private $hasil= false;
	private $message ='';
	
	public function __get($atribute) {
	if (property_exists($this, $atribute)) {
    	return $this->$atribute;
		}
	}

	public function __set($atribut, $value){
		if (property_exists($this, $atribut)) {
			$this->$atribut = $value;
		}
	}

	public function AddUser(){
		$sql = "INSERT INTO user(email, password, fname, lname, nohp, foto, idrole)
				VALUES ('$this->email', '$this->password', '$this->fname', '$this->lname', '$this->nohp', '$this->foto', '$this->idrole')";				
		$this->hasil = $this->connection->exec($sql);
				
		if($this->hasil)
			$this->message ='Data berhasil ditambahkan!';					
		else
			$this->message ='Data gagal ditambahkan!';	
	}
	
	public function UpdateUser(){
		$sql = "UPDATE user SET
			email = '$this->email',
            password='$this->password',
			fname='$this->fname', 
			lname='$this->lname', 
			nohp='$this->nohp', 
			foto='$this->foto', 
			WHERE userid = $this->userid";
		$this->hasil = $this->connection->exec($sql);
			
		if($this->hasil)
			$this->message ='Data berhasil diubah!';								
		else
			$this->message ='Data gagal diubah!';								
	}
		
		
	public function DeleteUser(){
		$sql = "DELETE FROM user WHERE userid=$this->userid";
		$this->hasil = $this->connection->exec($sql);

		if($this->hasil)
			$this->message ='Data berhasil dihapus!';								
		else
			$this->message ='Data gagal dihapus!';
	}

	public function ValidateEmail($inputemail){
		$sql = "SELECT * FROM user
				WHERE email = '$inputemail'";
		$resultOne = $this->connection->query($sql);

		if ($resultOne->rowCount() == 1){
			while ($data = $resultOne->fetch(PDO::FETCH_OBJ)) {
				$this->hasil = true;
				$this->userid = $data->userid;
				$this->email = $data->email;
				$this->password=$data->password;
				$this->fname=$data->fname;
				$this->lname=$data->lname;
				$this->nohp=$data->nohp;
				$this->idrole=$data->idrole;
			}
		}
	}
	
	public function SelectOneUser(){
		$sql = "SELECT * FROM user WHERE userid = $this->userid";
		$result = $this->connection->query($sql);
		
		if($result->rowCount() == 1){
			while ($data = $result->fetch(PDO::FETCH_OBJ))
			{
				$this->userid = $data->userid;
				$this->email = $data->email;
				$this->password = $data->password;
				$this->fname = $data->fname;
				$this->lname = $data->lname;
				$this->nohp = $data->nohp;
				$this->foto = $data->foto;
				$this->idrole = $data->idrole;
			}
		}		
	}
	
	public function SelectAllUser(){
		$sql = "SELECT * FROM user ORDER BY userid";
		$result = $this->connection->query($sql);
		
		$arrResult = Array();
		$i=0;
		if($result->rowCount() > 0){
			while($data= $result->fetch(PDO::FETCH_OBJ))
			{
				$objUser = new User();
				$this->userid = $data->userid;
				$this->email = $data->email;
				$this->password = $data->password;
				$this->fname=$data->fname;
				$this->lname=$data->lname;
				$this->nohp=$data->nohp;
				$this->foto=$data->foto;
				$this->idrole=$data->idrole;
				$arrResult[$i] = $objUser;
				$i++;
			}
		}
		return $arrResult;
	}
	
	public function SelectAllUserByUserid($currentuserid){
		if ($currentuserid == NULL)
			$sql = "SELECT * FROM user WHERE userid IS NULL";
		else
			$sql = "SELECT * FROM user WHERE userid = $currentuserid";				
		$result = $this->connection->query($sql);
			
		$arrResult = Array();
		$cnt=0;
		if($result->rowCount() > 0){				
			while ($data= $result->fetch(PDO::FETCH_OBJ))
			{
				$objUser = new User(); 
				$this->userid = $data->userid;
				$this->email = $data->email;
				$this->password = $data->password;
				$this->fname=$data->fname;
				$this->lname=$data->lname;
				$this->nohp=$data->nohp;
				$this->foto=$data->foto;
				$this->idrole=$data->idrole;
				$arrResult[$cnt] = $objUser;
				$cnt++;
			}
		}
		return $arrResult;
	}
}
?>