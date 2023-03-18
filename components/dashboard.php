  <?php
    require("../connect.php");
    $statement = $conn->query("SELECT * FROM tb_user WHERE user_status = 2 ");
    $countUser = $statement->num_rows;


    $statement = $conn->query("SELECT * FROM tb_rent ");
    $countRent = $statement->num_rows;


    $statement = $conn->query("SELECT * FROM tb_car WHERE car_status = 2");
    $countCar = $statement->num_rows;


    $statement = $conn->query("SELECT * FROM tb_car WHERE car_status = 3");
    $countCarNotReady = $statement->num_rows;


    $sql = "SELECT * FROM tb_user WHERE user_status = 2";
    $result = mysqli_query($conn, $sql);

    ?>
  <!-- Small boxes (Stat box) -->
  <div class="row mx-1">
      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
              <div class="inner">
                  <h3><?php echo $countUser ?></h3>

                  <p>สมาชิกทั้งหมด</p>
              </div>
              <div class="icon">
                  <i class="fas fa-person"></i>
              </div>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
              <div class="inner">
                  <h3><?php echo $countRent; ?></h3>

                  <p>รายการเช่าทั้งหมด</p>
              </div>
              <div class="icon">
                  <i class="ion ion-stats-bars"></i>
              </div>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
              <div class="inner">
                  <h3><?php echo $countCar; ?></h3>

                  <p>รถเช่าพร้อมใช้งาน</p>
              </div>
              <div class="icon">
                  <i class="fas fa-car"></i>
              </div>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
              <div class="inner">
                  <h3><?php echo $countCarNotReady; ?> </h3>

                  <p>รถเช่ากำลังซ่อม</p>
              </div>
              <div class="icon">
                  <i class="fas fa-edit"></i>
              </div>
          </div>
      </div>
      <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-6">
                      <!-- AREA CHART -->
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">ข้อมูลรายได้เช่ารถทั้งปี</h3>

                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="chart">
                                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                              </div>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->





                  </div>
                  <!-- /.col (LEFT) -->
                  <div class="col-md-6">
                      <!-- LINE CHART -->
                      <div class="card card-info">
                          <div class="card-header">
                              <h3 class="card-title">ข้อมูลรายได้เช่ารถทั้งปี </h3>

                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="chart">
                                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                              </div>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->




                  </div>
                  <!-- /.col (RIGHT) -->
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">จัดการสมาชิก</h3>
              </div>

              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th style="text-align:center;">
                                  <h5>ลำดับ</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>รูปภาพ</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>อีเมล</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>รหัสผ่าน</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>คำนำหน้าชื่อ</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>ชื่อ</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>นามสกุล</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>เพศ</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>เบอร์โทรศัพท์</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>ที่อยู่</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>อายุ</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>สถานะ</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>แก้ไขข้อมูล</h5>
                              </th>
                              <th style="text-align:center;">
                                  <h5>ลบข้อมูล</h5>
                              </th>
                          </tr>
                      </thead>
                      <?php
                        foreach ($result as $data) { ?>
                          <tr>
                              <?php
                                $type = "";
                                switch ($data['user_title']) {
                                    case "1":
                                        $type = "นาย";
                                        break;
                                    case "2":
                                        $type = "นางสาว";
                                        break;
                                    case "3":
                                        $type = "นาง";
                                        break;
                                }

                                $status = "";
                                switch ($data['user_status']) {
                                    case "1":
                                        $status = "บุคคลทั่วไป";
                                        break;
                                    case "2":
                                        $status = "สมาชิก";
                                        break;
                                    case "3":
                                        $status = "แอดมิน";
                                        break;
                                }
                                ?>
                              <?php
                                $Path = "../assets/images/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
                                $image = "<img src=$Path$data[profile_img] valign=middle align = center width=\"150\" height = \"100\">";
                                ?>

                              <td style="text-align:center;"><?= $data['user_id'] ?></td>
                              <td style="text-align:center;"><?= $image ?></td>
                              <td style="text-align:center;"><?= $data['user_email'] ?></td>
                              <td style="text-align:center;"><?= $data['user_password'] ?></td>
                              <td style="text-align:center;"><?= $type ?></td>
                              <td style="text-align:center;"><?= $data['user_fname'] ?></td>
                              <td style="text-align:center;"><?= $data['user_lname'] ?></td>
                              <td style="text-align:center;"><?= $data['user_gender'] ?></td>
                              <td style="text-align:center;"><?= $data['user_tel'] ?></td>
                              <td style="text-align:center;"><?= $data['user_address'] ?></td>
                              <td style="text-align:center;"><?= $data['user_age'] ?></td>
                              <td style="text-align:center;"><?= $status ?></td>
                              <td style="text-align:center;"><button type="button" class="btn btn-warning"><a href="?p=edit_member&id=<?php echo $data['user_id'] ?>" style="color:black;">Edit</a></button></td>
                              <td style="text-align:center;"><button type="button" class="btn btn-danger"><a href="../actions/delete_member?id=<?= $data['user_id'] ?>" onclick="return confirm(' ยืนยันการลบข้อมูลสมาชิก <?= $data['user_id'] ?> ')" style="color:white;">delete</a></td>
                          </tr>
                      <?php } ?>
                      </tbody>

                  </table>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->

      <!-- right col -->
  </div>
  <!-- /.row (main row) -->