
<?php
    require('../actions/data_rent.php');
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
                    <th style="text-align:center;"><h5>รหัสการเช่า</h5></th>
                    <th style="text-align:center;"><h5>รหัสรถ</h5></th>
                    <th style="text-align:center;"><h5>รหัสผู้ใช้</h5></th>
                    <th style="text-align:center;"><h5>วันที่เริ่มเช่า</h5></th>
                    <th style="text-align:center;"><h5>วันสิ้นสุดการเช่า</h5></th>
                    <th style="text-align:center;"><h5>สถานะการเช่า</h5></th>
                    <th style="text-align:center;"><h5>แก้ไขสถานะการเช่า</h5></th>
                    <th style="text-align:center;"><h5>ลบ</h5></th>
                </tr>
                  </thead>

                  <?php
    foreach ($result as $data) { ?>
        <!-- ดึงข้อมูลจาก db เข้าตาราง -->
        <tr>
            <?php

            $status = "";
            switch ($data['rent_status']) {
                case "1":
                    $status = "กำลังเช่า";
                    break;
                case "2":
                    $status = "ยกเลิกการเช่า";
                    break;
                case "3":
                    $status = "เช่าเสร็จ";
                    break;
            }
            ?>
            <td style="text-align:center;"><?= $data['rent_id'] ?></td>
            <td style="text-align:center;"><?= $data['car_id'] ?></td>
            <td style="text-align:center;"><?= $data['user_id'] ?></td>
            <td style="text-align:center;"><?= $data['rent_start'] ?></td>
            <td style="text-align:center;"><?= $data['rent_end'] ?></td>
            <td style="text-align:center;"><?= $status ?></td>


            <!-- <td style="text-align:center;"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a style="color:black;">Edit data</a></button></td> -->
            <td style="text-align:center;"><button type="button" class="btn btn-warning"><a href="?p=edit_formrent&idcar=<?= $data['rent_id'] ?>" style="color:black;">Edit data</a></button></td>
            <td style="text-align:center;"><button type="button" class="btn btn-danger"><a href="../actions/delete_rent.php?id=<?= $data['rent_id'] ?>" onclick="return confirm(' ยืนยันการลบข้อมูลการเช่ารถ <?= $data['rent_id'] ?> ')" style="color:white;">delete data</a></button></td>
        </tr> 
    <?php }
    ?>

                  


        </tbody>

    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->


<!-- Modal
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Choose a date to reserve a car.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

<form action="../actions/edit_rent.php" method="post">




      <div class="modal-body">


      <div class="form-group">
            <label>แก้ไขสถานะการเช่า</label>
            <select class="form-control" name="rent_status" required>
                <option value="" selected>เลือกสถานะการเช่า </option>"
                <option value="1" >กำลังเช่า</option>
                <option value="2" >ยกเลิกการเช่า</option>
                <option value="3" >เช่าเสร็จ</option>
            </select>
        </div>

        <input type="hidden" name="rent_id" value="<?= $data['rent_id'] ?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form> -->

    </div>
  </div>
</div>


