<html>
<body>
  <table>

<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s216k248", 'ioJies9e', "s216k248");
// check connection
if ($mysqli->connect_error) {
    die("Could not establish a connection, " . $conn->connect_error);
}
$get_all_users_query = "SELECT * FROM Users;";
$users = $mysqli->query($get_all_users_query);
while($user = $users->fetch_assoc()) {
  $user_id = $user['user_id'];
  echo "<tr><td>{$user_id}</td></tr>";
}
?>

  </table>
</body>
</html>
