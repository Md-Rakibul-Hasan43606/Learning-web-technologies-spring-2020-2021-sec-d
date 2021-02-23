<html>
    <body>
        <fieldset>
        <legend><b>PROFILE PICTURE</b></legend>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            
            <input type="file" name="file">
            <hr>
            <input type="submit" name="submit" value="Submit"> <br>
            </form>
        
        </fieldset>
        
    </body>
</html>