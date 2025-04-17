<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มข้อมูลลูกค้า</title>
</head>
<body>
    <h2>เพิ่มข้อมูลลูกค้า</h2>
    <form method="post" action="insert_customer.php">
        เลขบัตรประชาชน: <input type="text" name="cm_id"><br>
        ชื่อนามสกุล: <input type="text" name="cm_name"><br>
        เบอร์โทร: <input type="text" name="cm_tel"><br>
        ที่อยู่: <input type="text" name="address"><br>
        รหัสผ่าน: <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
