<?php
	session_start();

    if(isset($_POST['submit']))
    {
    	$currentPassword=$_POST['currentPass'];
    	$newPassword=$_POST['newPass'];
    	$retypePassword=$_POST['retypePass'];

    	if($currentPassword == "" || $newPassword == "" || $retypePassword == "")
    	{
    		echo "Null submission";
    	}
    	else{
    		$pass=$_SESSION['user'];

    		if ($currenttPass == $pass['password']) {
    			echo "current password and new password can't be match";
    		}
    		elseif($newPassword != $retypePassword)
    		{
    			echo "new password and retype Password are not match";
    		}else{
    			echo "Password change successfully and Update";
    		}
    	}
    }
    else
    {
    	echo "Invalid request";
    }

?>