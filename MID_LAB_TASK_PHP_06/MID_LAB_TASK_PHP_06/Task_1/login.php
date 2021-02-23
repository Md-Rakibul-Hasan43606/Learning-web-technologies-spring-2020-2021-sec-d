<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend><b>LOGIN</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="name" ><br><br>

    <label>Password : </label>
    <input type="password" id="password" name="password"> <br>
    
    </div>

    <style>
        .pp label
        {
            width: 200px;
            display: inline-block;
            text-align: left;
            margin: 5px;
        }
    </style>

    <hr>
	<br>
    <input type="checkbox" id="checkbox" name="checkbox" value="remember me"><br>
    <label>Remember Me</label><br>
	<br>

    <input type="submit" name="submit" id="submit" value="Submit">
    <a href="">Forgot Password?</a>
<br>
<br>
</fieldset>
</form>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if(isset($_POST['submit']))
            {
              $name = $_POST['name'];
              $password = $_POST['password'];
              if (empty($name || $password)) 
              {
                echo "User Name or Password is empty";
              } 
                else 
              {
                echo "User name is $name and password is $password";
              }
            }
        }
?>

</body>

</html>