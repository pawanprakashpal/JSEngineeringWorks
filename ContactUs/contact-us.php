<!--
You can use this form anywhere. Follow the steps below -

1) Paste 'BLOCK1' at the top of file in which you want to use this form
2) Paste 'BLOCK2' in HEAD of HTML of your page.
2) Paste 'BLOCK3' in HTML of BODY of your page.
3) Enjoy!! :)
-->

<!-- BLOCK1 Starts-->
<?php
$check="";
if(!empty($_POST) && isset($_POST["send"]) && $_POST["send"]=="Send"){
	
	require('class.php');

	$contact=new contactForm($_POST);

	// Function definition - 
	// sendEmail(SMTP,From,To,Cc,BCc,Subject);
	$check=$contact->sendEmail("<SMTP>","<From>","<To>","","","Test Contact Form");
}
?>
<!-- BLOCK1 Ends-->

<!-- BLOCK2 Starts -->
<style>
	
table{
	font-family:Verdana, Geneva, sans-serif;
	font-size:13px;
}

.mandatory{
	color:#FF0000;
}

#msg{
	color:#FF0000;
}
</style>

<script language="javascript" type="text/javascript">
	function frmcheck(frm){
		
		var textBoxes=frm.getElementsByTagName('input');
		
		for(var i=0;i<=textBoxes.length-1;i++){
			if(textBoxes[i].name!="mname" && textBoxes[i].value==""){
				alert("Please complete the Form");
				return false;
				break;
			}
		}

	  var textarea=frm.getElementsByTagName('textarea');
	  
		  if(textarea[0].value==""){
			  alert("Please complete the Form");
			  return false;
		  }
	}
</script>
<!-- BLOCK2 Ends -->

<!-- BLOCK3 Starts-->
<form name="frm" action="" method="post" onSubmit="return frmcheck(this)">
<table>
	<tr>
    	<td colspan="2" align="center" id="msg">
        <?php echo $check;?>
        </td>
    </tr>
	<tr>
    	<td>First Name<span class="mandatory">*</span></td>
        <td><input type="text" name="fname" value=""></td>
    </tr>
	<tr>
    	<td>Middle Name</td>
        <td><input type="text" name="mname" value=""></td>
    </tr>
	<tr>
    	<td>Last Name<span class="mandatory">*</span></td>
        <td><input type="text" name="lname" value=""></td>
    </tr>
	<tr>
    	<td>Email ID<span class="mandatory">*</span></td>
        <td><input type="text" name="email" value=""></td>
    </tr>
	<tr>
    	<td>Phone No.<span class="mandatory">*</span></td>
        <td><input type="text" name="phone" value=""></td>
    </tr>
	<tr>
    	<td>Message<span class="mandatory">*</span></td>
        <td>
        	<textarea name="msg"></textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="submit" name="send" value="Send">
        </td>
    </tr>
</table>
</form>
<!-- BLOCK3 Ends-->