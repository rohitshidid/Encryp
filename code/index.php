<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="encryption.php" method="POST">
  <label for="fname">encrypt</label><br>
  <input type="text" id="fname" name="encrypt"><br>
  <label for="lname">decrypt</label><br>
  <input type="text" id="lname" name="decrypt"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

