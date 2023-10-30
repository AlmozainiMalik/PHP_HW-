<form action="form.php" method = "GET">

Name: <input type="text" name ="name">
<br>
Password: <input type="password" name="pass">
<br>
<input type="submit">
</form>

<?php 

echo $_REQUEST["name"];
echo $_POST["pass"];


?>
