<?php
require("../actions/list_car.php");
?>


<div id="carouselExampleControls" class="carousel slide m-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/images/benz.jpg" style="height: 32rem;object-fit:fill;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/BMW.jpg" style="height: 32rem;object-fit:fill;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/honda.jpg" style="height: 32rem;object-fit:fill;" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<div class="col-12 p-5">
  <div class="card card-primary">
    <div class="card-header">
      <h4 class="card-title">รายการรถเช่า</h4>
    </div>
    <div class="container">
      <div class="row py-4">
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
            <?php
            $Path = "../assets/images/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
            $image = "<img src=$Path$data[car_img] width=\"250\" height=\"200\" class=\"mt-5 p-1 my-2 border\">";
            ?>

            <div class="col-md-3" style="box-shadow: 3px 5px 5px 0px rgba(0,0,0,0.17);border:1px solid rgba(0,0,0,0.17);">
              <div class="text-center p-2">
                <?= $image ?><br>
                ID : <?= $data['car_id'] ?><br>
                BRAND : <?= $data['car_name'] ?><br>
                Car Type : <?= $type ?><br>
                Status : <?= $status ?><br>
                <a class="btn btn-outline-success mt-3" href="?p=detailCar_page&idcar=<?= $data['car_id'] ?>"> See More Detail </a>
                <!-- <a class="btn btn-outline-success mt-3" href="../components/detailCar_page.php?idcar=<?= $data['car_id'] ?>"> See More Detail </a> -->
              </div>
            </div>
          <?php }
          ?>
      </div>
    </div>

    <!-- <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                </div>
              </div> -->
  </div>
</div>