<!DOCTYPE html>
<html>
<head>
    <title>ข้อมูลห้อง</title>
</head>
<body>
    <h1>ข้อมูลห้อง</h1>
<?php
include 'db_connect.php';

$sql = "SELECT rm_id, tr_id, rm_status, rm_details, rm_floors, rm_monthprice, rm_dayprice, date_in, date_out, rm_deposit FROM rooms";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
        <th>เลขห้อง</th>
        <th>ประเภทห้อง</th>
        <th>สถานะห้อง</th>
        <th>รายละเอียดห้อง</th>
        <th>ชั้น</th>
        <th>ราคาต่อเดือน</th>
        <th>ราคาต่อวัน</th>
        <th>วันที่เข้า</th>
        <th>วันที่ออก</th>
        <th>ค่ามัดจำ</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        if ($row["rm_status"] != "ไม่ว่าง") {
            echo "<tr>
            <td>" . $row["rm_id"]. "</td>
            <td>" . $row["tr_id"]. "</td>
            <td>" . $row["rm_status"]. "</td>
            <td>" . $row["rm_details"]. "</td>
            <td>" . $row["rm_floors"]. "</td>
            <td>" . $row["rm_monthprice"]. "</td>
            <td>" . $row["rm_dayprice"]. "</td>
            <td>" . $row["date_in"]. "</td>
            <td>" . $row["date_out"]. "</td>
            <td>" . $row["rm_deposit"]. "</td>
            </tr>";
        }
    }
    
    echo "</table>";
    echo "<br>";
    echo "<a href='index.php'>กลับไปที่หน้าหลัก</a>";
} else {
    echo "no room";
}

$conn->close();
?>

</body>
</html>