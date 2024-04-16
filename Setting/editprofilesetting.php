<?php
include '../config/configDB.php';
include '../config/configURL.php';
include '../layout/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit Profile</h2>

<form action="update_profile.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo $admin_data['username']; ?>"><br><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo $admin_data['password']; ?>"><br><br>

    <input type="submit" value="Save Changes">
</form>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
<?php
include '../layout/footer.php';
?>