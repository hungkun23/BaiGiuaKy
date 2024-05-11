<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>

<h2>Đăng nhập</h2>

<form action="controller/checkLogin.php" method="post">
    <div class="container">
        <label for="username"><b>Tên người dùng</b></label>
        <input type="text" placeholder="Nhập tên người dùng" name="username" required>

        <label for="password"><b>Mật khẩu</b></label>
        <input type="password" placeholder="Nhập mật khẩu" name="password" required>

        <button type="submit">Đăng nhập</button>
    </div>
</form>

</body>
</html>