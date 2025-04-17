<?php
include 'db_connect.php';

// ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST หรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cm_id = $_POST['cm_id'];
    $cm_name = $_POST['cm_name'];
    $cm_tel = $_POST['cm_tel'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // สร้างคำสั่ง SQL เพื่อเพิ่มข้อมูลลูกค้า
    $sql = "INSERT INTO customer (cm_id, cm_name, cm_tel, address, password) VALUES ('$cm_id', '$cm_name', '$cm_tel', '$address', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // ทำการ redirect ไปยังหน้าหลัก
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
