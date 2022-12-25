<?php

class contactForm{
	
	var $post='';
	var $msg='';
	
	function contactForm($post){
		$this->post=$post;		
	}
	
	function prepareEmail(){
		
		$this->msg="
		<table>
			<tr>
				<td>Name</td>
				<td>".$this->post["name"]."</td>
			</tr>
			<tr>
				<td>Email ID</td>
				<td>".$this->post["email"]."</td>
			</tr>
			<tr>
				<td>Phone No.</td>
				<td>".$this->post["phone"]."</td>
			</tr>
			<tr>
				<td>Message</td>
				<td>".$this->post["message"]."</td>
			</tr>";
					
	}
	
	function sendEmail($smtp,$from,$to,$cc,$bcc,$subject){
		
		$headers='';
		
		ini_set("SMTP","$smtp");
		//ini_set('smtp_port','465');
		ini_set('sendmail_from',$from);

		$this->prepareEmail();
		
		$headers="MIME-Version: 1.0"."\r\n";
		$headers.='Content-type: text/html; charset=iso-8859-1'."\r\n";
		$headers.="From:".$from."\r\n";
		
/*		if($cc!=""){
			$headers.="Cc:".$cc."\r\n";
		}
		
		if($bcc!=""){
			$headers.="BCc:".$bcc."\r\n";
		}*/
		try {
			if(mail($to,$subject,$this->msg,$headers)){
				return "Thank you for contacting us. We will be in touch with you very soon.";
			}
			else{
				error_log($this->msg);
				return "Some problem in sending details. Please try again later.";
			}
		} catch (Exception $e) {		
			error_log("Caught $e");
			return "Caught $e";
		}		
	}
}
?>