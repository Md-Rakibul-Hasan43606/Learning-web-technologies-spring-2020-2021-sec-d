<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend><b>CHANGE PASSWORD</b></legend>

    <div class="pp">
    <label>Current Password : </label>
    <input type="password" id="currtpword" name="currtpword" ><br>
	<br>
    <label style="color: green;">New Password : </label>
    <input type="password" id="newpword" name="newpword" ><br>
	<br>
    <label style="color: red;">Retype New Password : </label>
    <input type="password" id="Rnewpword" name="Rnewpword" ><br>
    </div>

    <style>
        .pp label
        {
            width: 170px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
    </style>
    <hr>
	<br>
    <input type="submit" name="submit" id="submit" value="Submit"><br><br>
</fieldset>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if(isset($_POST['submit']))
        {
            $currtpword = $_POST['currtpword'];
            $newpword = $_POST['newpword'];
            $Rnewpword  = $_POST['Rnewpword'];
            if($currtpword == $newpword)
            {
                echo "Enter please use a New Password!";
            }
            if($Rnewpword != $newpword)
            {
                echo "Enter new Password doesn't match!";
            }
            else
            {
                echo "Enter password has been changed!";
            }
        }
    }   
?>
</body>
</html>