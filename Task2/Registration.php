<?php include "control/result.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
Full Name: <input type="text" name="fname"> <?php echo $validatename; ?>
<br><br>
E-mail: <input type="text" name="email"> <?php echo $validateemail; ?>
<br><br>
Comment: <input type="text" name="comment"> <?php echo $validatecomment; ?>
<br>
<p>Gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br>
  <?php echo $validateradio; ?>
  <br><br>

<p>Please Choose a hobby:</p>
<input type="checkbox" id="hobby1" name="hobby1" value="Singing">
 My hobby is singing<br>
<input type="checkbox" id="hobby2" name="hobby2" value="Dancing">
My hobby is dancing<br>
<input type="checkbox" id="hobby3" name="hobby3" value="Reading">
 My hobby is reading <br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $h1;?>

<?php echo $h2;?>

<?php echo $h3;?>
<br><br>

Please Choose a file:
<input type="submit" value="choose file">No file chosen
<br>
<input type="submit" value="Submit">
<input type="submit" value="Reset">
</form>
</body>
</html>

