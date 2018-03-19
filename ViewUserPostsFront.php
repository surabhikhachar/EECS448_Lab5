<html>
<body>
  <h1>View Posts by User</h1>
  <form action="ViewUserPostsBack.php" method="post">
    Username:
    <select name="username">

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
  echo "<option value={$user_id}>{$user_id}</option>";
}
?>

    </select>

    <input type="submit">
  </form>
</body>
</html>
