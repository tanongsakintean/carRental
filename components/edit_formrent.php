
<br><br>
<section class="content">
      <div class="container-sm">
        
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Car</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" action="../actions/edit_rent.php" method="post">
                <div class="card-body">

                
                    <div class="form-group">
                        <label>แก้ไขสถานะการเช่าของรหัสการเช่าที่ : <?= $_SESSION['idcar']?></label>
                        <select class="form-control" name="rent_status" required>
                            <option value="" selected>เลือกสถานะการเช่า </option>"
                            <option value="1" >กำลังเช่า</option>
                            <option value="2" >ยกเลิกการเช่า</option>
                            <option value="3" >เช่าเสร็จ</option>
                        </select>
                    </div>

                    <input type="hidden" name="rent_id" value="<?= $_SESSION['idcar']?>" required>

                  </div>

                  <div class="card-footer">
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
            <!-- /.card -->
           
        <!-- /.row -->
      </div>
    </section>