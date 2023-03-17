<?php
//เชื่อมต่อฐานข้อมูล
require('../connect.php');

$sql = "SELECT * FROM tb_car";
$result = mysqli_query($conn, $sql);

?>

<?php
require("../layouts/head.php");
?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="text-align:center;"><h5>รหัสรถ</h5></th>
                    <th style="text-align:center;"><h5>ชื่อรถ</h5></th>
                    <th style="text-align:center;"><h5>ทะบียนรถ</h5></th>
                    <th style="text-align:center;"><h5>สีของรถ</h5></th>
                    <th style="text-align:center;"><h5>ราคาเช่ารถ</h5></th>
                    <th style="text-align:center;"><h5>ประเภทรถ</h5></th>
                    <th style="text-align:center;"><h5>สถานะรถ</h5></th>
                    <th style="text-align:center;"><h5>รูป</h5></th>
                    <th style="text-align:center;"><h5>แก้ไข</h5></th>
                    <th style="text-align:center;"><h5>ลบ</h5></th>
                </tr>
                  </thead>

                  <?php
    foreach ($result as $data) { ?>
        <!-- ดึงข้อมูลจาก db เข้าตาราง -->
        <tr>
            <?php
            $type = "";
            switch ($data['car_type']) {
                case "1":
                    $type = "รถมอเตอร์ไซค์";
                    break;
                case "2":
                    $type = "รถเก๋ง";
                    break;
                case "3":
                    $type = "รถกระบะ";
                    break;
                case "4":
                    $type = "รถตู้";
                    break;
                case "5":
                    $type = "รถบรรทุก";
                    break;
            }

            $status = "";
            switch ($data['car_status']) {
                case "1":
                    $status = "อยู่ระหว่างการใช้งาน";
                    break;
                case "2":
                    $status = "ว่าง";
                    break;
                case "3":
                    $status = "อยู่ระหว่างการซ่อมแซม";
                    break;
            }
            ?>

            <td style="text-align:center;"><?= $data['car_id'] ?></td>
            <td style="text-align:center;"><?= $data['car_name'] ?></td>
            <td style="text-align:center;"><?= $data['car_reg'] ?></td>
            <td style="text-align:center;"><?= $data['car_color'] ?></td>
            <td style="text-align:center;"><?= $data['car_price'] ?></td>
            <td style="text-align:center;"><?= $type ?></td>
            <td style="text-align:center;"><?= $status ?></td>

            <!-- ค้นหารูป -->
            <?php
            $Path = "../assets/images/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
            $image = "<img src=$Path$data[car_img] valign=middle align = center width=\"150\" height = \"100\">";
            ?>
            <!-- ใส่รูปในตาราง -->
            <td><center><?= $image ?></center></td>

            <td style="text-align:center;"><button type="button" class="btn btn-warning"><a href="?p=edit_form&idcar=<?= $data['car_id'] ?>" style="color:black;">Edit data</a></button></td>

            <!-- <td style="text-align:center;"><button type="button" class="btn btn-warning"><a href="../actions/edit_car.php?id=<?= $data['car_id'] ?>" style="color:black;">Edit data</a></button></td> -->
            <td style="text-align:center;"><button type="button" class="btn btn-danger"><a href="../actions/delete_car.php?id=<?= $data['car_id'] ?>" onclick="return confirm(' ยืนยันการลบข้อมูลรถ <?= $data['car_id'] ?> ')" style="color:white;">delete data</a></button></td>
        </tr> 
    <?php }
    ?>

                  


                  </tbody>
    
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


<?php
    require("../layouts/js.php");
?>








<!-- <center>
    <h1>แสดงผลข้อมูลรถ</h1>
</center> -->

<!-- <table border=1 style="width:100%"> -->
    <!-- <tr>
        <th>
            <h3>car_id</h3>
        </th>
        <th>
            <h3>car_name</h3>
        </th>
        <th>
            <h3>car_reg</h3>
        </th>
        <th>
            <h3>car_color</h3>
        </th>
        <th>
            <h3>car_price</h3>
        </th>
        <th>
            <h3>car_type</h3>
        </th>
        <th>
            <h3>car_status</h3>
        </th>
        <th>
            <h3>car_img</h3>
        </th>
        <th>
            <h3>EDIT</h3>
        </th>
        <th>
            <h3>DELETE</h3>
        </th>
    </tr> -->
    <?php
    foreach ($result as $data) { ?>
        <!-- ดึงข้อมูลจาก db เข้าตาราง -->
        <tr>
            <?php
            $type = "";
            switch ($data['car_type']) {
                case "1":
                    $type = "รถมอเตอร์ไซค์";
                    break;
                case "2":
                    $type = "รถเก๋ง";
                    break;
                case "3":
                    $type = "รถกระบะ";
                    break;
                case "4":
                    $type = "รถตู้";
                    break;
                case "5":
                    $type = "รถบรรทุก";
                    break;
            }

            $status = "";
            switch ($data['car_status']) {
                case "1":
                    $status = "อยู่ระหว่างการใช้งาน";
                    break;
                case "2":
                    $status = "ว่าง";
                    break;
                case "3":
                    $status = "อยู่ระหว่างการซ่อมแซม";
                    break;
            }
            ?>

            <!-- <th><?= $data['car_id'] ?></th>
            <th><?= $data['car_name'] ?></th>
            <th><?= $data['car_reg'] ?></th>
            <th><?= $data['car_color'] ?></th>
            <th><?= $data['car_price'] ?></th>
            <th><?= $type ?></th>
            <th><?= $status ?></th> -->

            <!-- ค้นหารูป -->
            <?php
            $Path = "../assets/images/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
            $image = "<img src=$Path$data[car_img] valign=middle align = center width=\"120\" height = \"100\">";
            ?>
            <!-- ใส่รูปในตาราง -->
            <!-- <th><?= $image ?></th>

            <th><a href="edit_car.php?id=<?= $data['car_id'] ?>">Edit data</a></th>
            <th><a href="delete_car.php?id=<?= $data['car_id'] ?>" onclick="return confirm(' ยืนยันการลบข้อมูลรถ <?= $data['car_id'] ?> ')">delete data</a></th>
        </tr> -->
    <?php }
    ?>
<!-- </table>
<center><a href="form_car.php">กลับหน้า form_car.php</a></center> -->