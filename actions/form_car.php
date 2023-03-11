<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Car</title>
</head>
<body>
<h1>แบบฟอร์มรับข้อมูลรถ</h1>
<form enctype="multipart/form-data" action="insert_car.php" method="post">

    <label for="car_name">ยี่ห้อรถ:</label>
    <input type="text" id="car_name" name="car_name" required><br>

    <label for="car_reg">ทะเบียนรถ:</label>
    <input type="text" id="car_reg" name="car_reg" required><br>

    <label for="car_type">ประเภทรถ:</label>
    <select id="car_type" name="car_type" required>
        <option value="" selected>เลือกประเภทของรถ </option>";
        <option value="1" >รถมอเตอร์ไซค์</option>
        <option value="2" >รถเก๋ง</option>
        <option value="3" >รถกระบะ</option>
        <option value="4" >รถตู้</option>
        <option value="5" >รถบรรทุก</option>
    </select><br>

    <label for="car_color">สีของรถ:</label>
    <input type="text" id="car_color" name="car_color" required><br>

    <label for="car_price">ราคาเช่ารถ/วัน:</label>
    <input type="text" id="car_price" name="car_price" required><br>

    <label for="car_status">สถานะของรถ:</label>
    <select id="car_status" name="car_status" required>
        <option value="" selected>เลือกสถานะของรถ </option>";
        <option value="1" >อยู่ระหว่างการใช้งาน</option>
        <option value="2" >ว่าง</option>
        <option value="3" >อยู่ระหว่างการซ่อมแซม</option>
    </select><br>


    <label for="car_img">รูปภาพรถ:</label>
    <input type="file" id="car_img" name="car_img" size="50" required><br><br>


    <div>
        <input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
        <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
    </div>

</form>

<br><br><a href="list_car.php">แสดงผลหน้า list_car.php</a>
    
</body>
</html>