<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */


 //mailing system open
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



//mailing system close

class Admin extends Main
{
	protected $id;

	public function __construct()
	{
		//$this->id = $_SESSION['admin'];
		parent::__construct();
	}

	public function loginAdmin($name,$message)
	{
		try{
			$stmnt=$this->conn->prepare("select name,password from tbl_admin where id=1");
			$stmnt->bindParam("name", $name,PDO::PARAM_STR) ;
			$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $res['id'];
			if($count){
				$_SESSION['admin']= $id;
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}
	public function loginUser($name,$message)
	{
		try{
			$stmnt=$this->conn->prepare("Query statement");
			$stmnt->bindParam("name", $name,PDO::PARAM_STR) ;
			$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $res['id'];
			if($count){
				$_SESSION['admin']= $id;
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}

		// Create Update Delete Code
	public function cud($res,$message){
		try {
			$stmt = $this->conn->prepare($res);
			$stmt->execute();

			$_SESSION['success_message'] = "Successfully ".$message;
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Sorry  still not ".$message;
			return false;
		}
	}

	public function Rcud($res){
		try {
			$stmt = $this->conn->prepare($res);
			$stmt->execute();
			$id = $this->conn->lastInsertId();
			//$_SESSION['success_message'] = "Successfully ".$message;
			return $id;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Sorry  still not ".$message;
			return false;
		}
	}

	public function ret($stmt){
		$stmt = $this->conn->prepare($stmt);
		$stmt->execute();
		return $stmt;	
	}
	public function retlogin($stmt,$email_id,$password){
		$stmt = $this->conn->prepare($stmt);
		$stmt->bindParam(':email',$email_id);
		$stmt->bindParam(':pass',$password);
		$stmt->execute();
		return $stmt;	
	}
	public function retregcheck($stmt,$email_id){
		$stmt = $this->conn->prepare($stmt);
		$stmt->bindParam(':email',$email_id);
		$stmt->execute();
		return $stmt;	
	}


	//mailing open
	public function mail_send($sub,$to,$message){
		try {     
			$mail = new PHPMailer(true);
           
			$mail->isSMTP();                                           
			$mail->Host       = 'smtp.gmail.com';                     
			$mail->SMTPAuth   = true;                                   
			$mail->Username   = 'xamppemailer@gmail.com';                    
			$mail->Password   = 'zxuwqnrpaszynbts';                             
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
			$mail->Port       = 465;                                    
		
		  
			$mail->setFrom('ritheshjaston22@gmail.com', $sub);
		
			$mail->addAddress($to);    //to         
		
		
			$mail->isHTML(true);                                 
			$mail->Subject = 'RICH | RIGHT CHOICE';
			$mail->Body    = $message;
			$mail->AltBody = '';
		
			$mail->send();
			// echo 'Message has been sent';
			return true;
		} catch (Exception $e) {
			// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			return false;
		}	
	}
	//mailing close

}
?>