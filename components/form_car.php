<br><br>
<section class="content">
  <div class="container-sm">

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Car</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form enctype="multipart/form-data" action="../actions/insert_car.php" method="post">
        <div class="card-body">

          <div class="form-group">
            <label for="car_name">ชื่อรถ</label>
            <input type="text" class="form-control" id="car_name" name="car_name" placeholder="ชื่อรถ" required>
          </div>

          <div class="form-group">
            <label for="car_reg">ทะเบียนรถ</label>
            <input type="text" class="form-control" id="car_reg" name="car_reg" placeholder="ทะเบียนรถ" required>
          </div>

          <div class="form-group">
            <label for="car_color">สีของรถ</label>
            <input type="text" class="form-control" id="car_color" name="car_color" placeholder="สีของรถ" required>
          </div>

          <div class="form-group">
            <label for="car_price">ราคาเช่า/ต่อวัน</label>
            <input type="text" class="form-control" id="car_price" name="car_price" placeholder="ราคาเช่า/ต่อวัน"
              required>
          </div>

          <div class="form-group">
            <label>ประเภทของรถ</label>
            <select class="form-control" name="car_type" required>
              <option value="" selected>เลือกประเภทของรถ </option>"
              <option value="1">รถมอเตอร์ไซค์</option>
              <option value="2">รถเก๋ง</option>
              <option value="3">รถกระบะ</option>
              <option value="4">รถตู้</option>
              <option value="5">รถบรรทุก</option>
            </select>
          </div>

          <div class="form-group">
            <label>สถานะของรถ</label>
            <select class="form-control" name="car_status" required>
              <option value="" selected>เลือกสถานะของรถ </option>";
              <option value="1">อยู่ระหว่างการใช้งาน</option>
              <option value="2">ว่าง</option>
              <option value="3">อยู่ระหว่างการซ่อมแซม</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">รูปภาพรถ</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="car_img" size="100" required>
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>  -->
            </div>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>




<!-- <form enctype="multipart/form-data" action="../actions/insert_car.php" method="post">

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

<br><br><a href="list_car.php">แสดงผลหน้า list_car.php</a> -->