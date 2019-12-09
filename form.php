<form method="post" action="form.php">
    <p>Name:<input type="text" name="Name"></p>
    <p>Login:<input type="text" name="Login"></p>
    <p>Password:<input type="password" name="Password"></p>
    <input type="submit" id="submit"  data-dismiss="alert" name="submit" class="btn btn-default">
</form>
<?php
require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("Помилка! " . mysqli_error($link));
$name = $_POST[Name];
$login = $_POST[Login];
$pass = $_POST[Password];
$p=hash('sha256',$pass);
$result = mysqli_query($link,"INSERT INTO `Users`(`Name`, `Login`, `Password`) VALUES ('$name','$login','$p')");
mysqli_close($link);
?>