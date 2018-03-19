<html>
<body>

<?php
$username = $_POST["username"];
$post = $_POST["post"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "s216k248", 'ioJies9e', "s216k248");

//check connection
if ($mysqli->connect_error) {
    die("Could not establish a connection, " . $conn->connect_error);
}
$check_user_exists_query = "SELECT * FROM Users WHERE user_id='" . $username . "';";
$result = $mysqli->query($check_user_exists_query);
if(mysqli_num_rows($result) == 0)
{
  echo "User " . $username . " does not exist.";
}
else
{
  $add_post_query = "INSERT INTO Posts (content, user_id) VALUES ('{$post}','{$username}');";
  if($post_result = $mysqli->query($add_post_query))
  {
    echo "Post successfully created.";
  }
  else
  {
    echo "There was an error in creating the post, " . $mysqli->error . "<br>";
    echo "Here was the attempted query, " . $add_post_query;
  }
}
$mysqli->close();
?>

</body>
</html>
