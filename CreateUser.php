<html>
<body>

<?php
$username = $_POST["username"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "s216k248", 'ioJies9e', "s216k248");

//check connection
if ($mysqli->connect_error) {
    die("Could not establish a connection, " . $conn->connect_error);
}
$check_user_exists_query = "SELECT * FROM Users WHERE user_id='" . $username . "';";
$result = $mysqli->query($check_user_exists_query);
if(mysqli_num_rows($result) > 0)
{
  echo "This username already exists, please pick a different username.";
}
else
{
  $add_user_query = "INSERT INTO Users (user_id) VALUES ('" . $username . "');";
  if($user_result = $mysqli->query($add_user_query))
  {
    echo "New user was created successfully and stored in the database.";
  }
  else
  {
    echo "Could not create a new user, " . $mysqli->error;
  }
}
$mysqli->close();
?>

</body>
</html>
