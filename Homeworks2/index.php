
<!-- Xây dựng hệ thống đăng nhập đơn giản bằng PHP sử dụng session và cookie.
Giải pháp: 
	1. Xử lý đăng nhập: index.php
	2. Trang chủ: home.php
	3. Xử lý đăng xuất: logout.php
Giải thích: 
index.php: Xử lý thông tin đăng nhập, kiểm tra tính hợp lệ và lưu trữ thông tin vào session và cookie.
home.php: Kiểm tra session để đảm bảo người dùng đã đăng nhập, hiển thị thông tin chào mừng và thông tin cookie.
logout.php: Xóa session và cookie, chuyển hướng đến trang đăng nhập. -->


// index.php
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "your_username";
    $password = "your_password";

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        $_SESSION["username"] = $username;
        setcookie("user", $username, time() + 3600, "/");
        header("Location: home.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
