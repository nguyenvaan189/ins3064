<?php
include("connect.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // mã hóa mật khẩu

    // Kiểm tra xem username đã tồn tại chưa
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "❌ Username already exists. Please choose another one.";
    } else {
        // Thêm user mới vào bảng
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($link, $insert_query)) {
            echo " Registration successful! You can now <a href='login.php'>login</a>.";
        } else {
            echo " Error: Could not register user. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post">
        <label for="username">User Name</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
