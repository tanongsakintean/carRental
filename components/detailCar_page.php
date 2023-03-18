<?php
require("../actions/detail_car.php");

$Path = "../assets/images/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
$image = "<img src=$Path$data[car_img] align=\"center\" width=\"750\" height=\"500\" class=\"mt-5 p-1 my-2 border\">";

?>

<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none"><?= $data['car_name'] ?></h3>
          <div class="col-12">
            <?= $image ?>
          </div>

        </div>
        <div class="col-12 col-sm-6">
          <p style="color:black;font-size:60px;"> <b><?= $data['car_name'] ?></b></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ครับ สำหรับท่านที่เดินผ่านไปผ่านมา วันนี้เฉาก๊วยชากังราวได้มาบริการท่านพ่อแม่พี่น้องกันอีกแล้วนะครับ อากาศร้อนๆอย่างนี้นะครับ เฉาก๊วยสักถ้วยชื่นใจ แม้อากาศไม่ร้อนก็ทานกันได้นะครับ
            เฉาก๊วยชากังราวนั้นทานได้ทุกฤดูกาลนะครับ </p>

          <hr>

          <!-- <p style="color:black;font-size:25px;"><b>Brand</b> : <?= $data['car_name'] ?></p> -->

          <p style="color:black;font-size:25px;"><b>ทะเบียนรถ</b> : <?= $data['car_reg'] ?></p>

          <p style="color:black;font-size:25px;"><b>สี</b> : <?= $data['car_color'] ?></p>

          <!-- <p style="color:black;font-size:25px;"><b>Car Type</b> : <?= $data['car_type'] ?></p> -->


          <?php
          echo '<span style="font-size: 25px"> <b>ประเภทรถ</b> : </span>';
          if ($data['car_type'] == "1") {
            echo '<span style="font-size: 25px;color:black">รถมอเตอร์ไซค์ </span>';
          }
          if ($data['car_type'] == "2") {
            echo '<span style="font-size: 25px;color:black">รถเก๋ง</span>';
          }
          if ($data['car_type'] == "3") {
            echo '<span style="font-size: 25px;color:black"> รถกระบะ </span>';
          }
          if ($data['car_type'] == "4") {
            echo '<span style="font-size: 25px;color:black"> รถตู้ </span>';
          }
          if ($data['car_type'] == "5") {
            echo '<span style="font-size: 25px;color:black"> รถบรรทุก </span>';
          }





          echo '<br><span style="font-size: 50px"> สถานะ : </span>';
          if ($data['car_status'] == "1") {
            echo '<span style="font-size: 50px;color:red"> อยู่ระหว่างการใช้งาน </span>';
          }
          if ($data['car_status'] == "2") {
            echo '<span style="font-size: 50px;color:blue"> ว่าง </span>';
          }
          if ($data['car_status'] == "3") {
            echo '<span style="font-size: 50px;color:red"> อยู่ระหว่างการซ่อมแซม </span>';
          }



          ?>



          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              $<?= $data['car_price'] ?> / day
            </h2>
            <h4 class="mt-0">
              <small>Ex Tax: $<?= $data['car_price'] ?> </small>
            </h4>
          </div>

          <?php
          echo "<div class=\"mt-4\">";
          if ($data['car_status'] == "2" && $_SESSION['ses_user']->user_status == 2) {

            // <!-- Button trigger modal -->
            echo "<button type=\"button\" class=\"btn btn-primary btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
                    <i class=\"fa-solid fa-check\">&nbsp;สามารถเช่ารถได้</i>
                    </button>";
          } else if ($data['car_status'] == "1" || $data['car_status'] == "3" && $_SESSION['ses_user']->user_status == 2) {
            echo "<button type=\"button\" class=\"btn btn-secondary btn-lg\" data-bs-toggle=\"\" data-bs-target=\"#staticBackdrop\">
                  <i class=\"fa-solid fa-xmark\">&nbsp;ไม่สามารถเช่ารถได้</i>
                  </button>";
          } else {
            echo "<a href='../pages/login.php' type=\"button\" class=\"btn btn-danger btn-lg\" data-bs-toggle=\"\" data-bs-target=\"#staticBackdrop\">
            <i class=\"fa-solid fa-xmark\">&nbsp;โปรดสมัครสมาชิกก่อนเช่ารถ</i>
            </a>";
          }
          echo "</div>";
          ?>



        </div>
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Choose a date to reserve a car.</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="../actions/rent_date.php?user_id=<?php echo $_SESSION['ses_user']->user_id; ?>" method="post">

          <div class="modal-body">
            <label for="date">Start Date:</label>
            <div>
              <input type="text" class="form-control" name="rent_start" placeholder="yyyy/mm/dd">
              <span class="input-group-addon">
              </span>
            </div>

            <br>

            <label for="date">End Date:</label>
            <div>
              <input type="text" class="form-control" name="rent_end" placeholder="yyyy/mm/dd">
              <span class="input-group-addon">
              </span>
            </div>

            <input type="hidden" name="car_id" value="<?= $_REQUEST['idcar'] ?>">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>


</section>
<!-- /.content -->