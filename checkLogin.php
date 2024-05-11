<?php
require_once '../model/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    try {
        $stmt = $db->prepare("SELECT * FROM User WHERE TenUser = :username AND MatKhau = :password");
        $stmt->bindParam(':username', $input_username);
        $stmt->bindParam(':password', $input_password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: ../view/sach.php");
            exit;
        } else {
            echo "Tên người dùng hoặc mật khẩu không đúng.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
