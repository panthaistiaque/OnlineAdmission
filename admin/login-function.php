<?php

require_once('config/connection.php');
require_once('config/dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function otp($exam_roll,$bill_id)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM user_student WHERE exam_roll=:exam_roll AND bill_id=:bill_id AND password IS NULL");
			$stmt->execute(array(':exam_roll'=>$exam_roll,':bill_id'=>$bill_id));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				
				global $conn;
				$rand_no = rand(10000, 99999);
				$query = "UPDATE `user_student` SET 
				`otp` = '$rand_no' WHERE `exam_roll` =".$exam_roll;
				 if(!mysqli_query($conn, $query)){
					throw new Exception(  mysqli_error($conn) );
				}
				session_destroy();
				$_SESSION['user_otp'] =$userRow['exam_roll'];
				return true;
			}
			else
				{
					return false;
				}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}
	public function verify($code,$exam_roll)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM user_student WHERE otp=:otp AND exam_roll=:exam_roll");
			$stmt->execute(array(':otp'=>$code,':exam_roll'=>$exam_roll));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				$_SESSION['user_verify'] = $userRow['exam_roll'];
				return true;
			}
			else
				{
					return false;
				}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}
	public function changePass($id,$password)
	{
		try
		{
			global $conn;
			$new_password = password_hash($password, PASSWORD_DEFAULT);
			$query = "UPDATE `user_admin` SET 
			`password` = '$new_password' WHERE `id` =".$id;
				if(!mysqli_query($conn, $query)){
				throw new Exception(  mysqli_error($conn) );
				}
			//$_SESSION['welcome'] = $exam_roll;
			return [
				'success' => true,
				'message' => 'Info Updated Successfully.'
			];
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}
	public function doLogin($uname,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM user_admin WHERE username=:uname AND active=1");
			$stmt->execute(array(':uname'=>$uname));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['password']))
				{
					$_SESSION['admin_name'] = $userRow['name'];
					$_SESSION['admin_id'] = $userRow['id'];
					$_SESSION['admin_unit'] = $userRow['unit'];
					$_SESSION['admin_role'] = $userRow['role'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	public function is_otp()
	{
		if(isset($_SESSION['user_otp']))
		{
			return true;
		}
	}
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		
		unset($_SESSION['admin_name']);
		unset($_SESSION['admin_unit']);
		unset($_SESSION['admin_role']);
		unset($_SESSION['user_verify']);
		session_destroy();
		return true;
	}
	
}
 
?>