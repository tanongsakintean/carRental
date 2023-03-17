<?php
require("../layouts/head.php");
?>
<head>
	<title>Bill Payment</title>
		<style type="text/css">
		body {
    font-size: 16px;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  table tr td {
    padding: 0;
  }
  
  table tr td:last-child {
    text-align: right;
  }
  
  .bold {
    font-weight: bold;
  }
  
  .right {
    text-align: right;
  }
  
  .large {
    font-size: 1.75em;
  }
  
  .total {
    font-weight: bold;
    color: #fb7578;
  }
  
  .logo-container {
    margin: 20px 0 70px 0;
  }
  
  .invoice-info-container {
    font-size: 0.875em;
  }
  .invoice-info-container td {
    padding: 4px 0;
  }
  
  .client-name {
    font-size: 1.5em;
    vertical-align: top;
  }
  
  .line-items-container {
    margin: 70px 0;
    font-size: 0.875em;
  }
  
  .line-items-container th {
    text-align: left;
    color: #999;
    border-bottom: 2px solid #ddd;
    padding: 10px 0 15px 0;
    font-size: 0.75em;
    text-transform: uppercase;
  }
  
  .line-items-container th:last-child {
    text-align: right;
  }
  
  .line-items-container td {
    padding: 15px 0;
  }
  
  .line-items-container tbody tr:first-child td {
    padding-top: 25px;
  }
  
  .line-items-container.has-bottom-border tbody tr:last-child td {
    padding-bottom: 25px;
    border-bottom: 2px solid #ddd;
  }
  
  .line-items-container.has-bottom-border {
    margin-bottom: 0;
  }

  .has-bottom-border th.header-startdate {
    width: 150px;
  }
  
  .has-bottom-border th.header-enddate {
    width: 200px;
  }
  
  .line-items-container th.heading-quantity {
    width: 50px;
  }
  .line-items-container th.heading-carid {
    width: 200px;
  }
  .line-items-container th.heading-brand {
    width: 100px;
  }
  .line-items-container th.heading-carcolor {
    width: 100px;
  }
  .line-items-container th.heading-price {
    text-align: right;
    width: 100px;
  }
  .payment-info {
    width: 38%;
    font-size: 0.75em;
    line-height: 1.5;
  }
  
  .footer {
    margin-top: 100px;
  }
  
  .footer-thanks {
    font-size: 1.125em;
  }
  
  .footer-thanks img {
    display: inline-block;
    position: relative;
    top: 1px;
    width: 16px;
    margin-right: 4px;
  }
  
  .footer-info {
    float: right;
    margin-top: 5px;
    font-size: 0.75em;
    color: #ccc;
  }
  
  .footer-info span {
    padding: 0 5px;
    color: black;
  }
  
  .footer-info span:last-child {
    padding-right: 0;
  }
  
  .page-container {
    display: none;
  }
		</style>
	</head>

<?php

    require('../connect.php');

    $idcar = $_REQUEST['id'];

    // function rent(){
        // require('../connect.php');
        // $idcar = $_REQUEST['id'];

        $sql_rent = "SELECT * FROM tb_rent WHERE car_id = '$idcar'";
        $result_rent = mysqli_query($conn, $sql_rent);

        // $data = array();

        // ดึงข้อมูลจากผลลัพธ์ใส่ลงใน array
        foreach ($result_rent as $data) { 
        }

        $sql_car = "SELECT * FROM tb_car WHERE car_id = '$idcar'";
        $result_car = mysqli_query($conn, $sql_car);

        foreach ($result_car as $data1) { 
        }


        $type = "";
            switch ($data1['car_type']) {
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


?>



	<body>
	<div class="page-container">
  Page
  <span class="page"></span>
  of
  <span class="pages"></span>
</div>

<table class="invoice-info-container">
  <tr>
    <td rowspan="2" class="client-name">
      Bill Payment 
    </td>
    <td>
    </td>
  </tr>
  <tr>
    <td>
    </td>
  </tr>
  <tr>
    <td>
      Invoice Date: <strong><?php
      date_default_timezone_set('asia/bangkok');
      $date = date('d/m/Y h:i:s');
      echo $date;?></strong>
    </td>
    <td>
      KMUTNB Prachinburi
    </td>
  </tr>
  <tr>
    <td>
      Invoice No: <strong><?php echo $data['rent_id'];?></strong>
    </td>
    <td>
    </td>
  </tr>
</table>


<table class="line-items-container">
  <thead>
    <tr>
      <th class="heading-quantity">Qty</th>
      <th class="heading-carid">Car ID</th>
      <th class="heading-brand">Brand</th>
      <th class="heading-carcolor">Color</th>
      <th class="heading-cartype">Type</th>
      <th class="heading-price">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><?php echo $data1['car_id'];?></td>
      <td><?php echo $data1['car_name'];?></td>
      <td><?php echo $data1['car_color'];?></td>
      <td><?php echo $type;?></td>
      <!-- <td>Sport</td> -->
      <td class="right"><?php echo $data1['car_price'];?>/day</td>
    </tr>
  </tbody>
</table>


<table class="line-items-container has-bottom-border">
  <thead>
    <tr>
      <th class="header-startdate">Start Date</th>
      <th class="header-enddate">End Date</th>
      <th class="header-priceper">Price Per Day</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="large"><?php echo $data['rent_start'];?></td>
      <td class="large"><?php echo $data['rent_end'];?></td>
      <td class="large total"><?php echo $data1['car_price'];?>/day</td>
    </tr>
  </tbody>
</table>

<div class="footer">
  <div class="footer-info">
    <img src="https://static.vecteezy.com/system/resources/previews/001/199/360/original/barcode-png.png" width="500px" height="80px">
    <center><p style="font-size:20px; color:black;">1023819237189201415132441651984919816219549452</p></center>
  </div>
  <div class="footer-thanks">
    <!-- <img src="https://github.com/anvilco/html-pdf-invoice-template/raw/main/img/heart.png" alt="heart"> -->
    <span> &nbsp;&nbsp;&nbsp;Thank you very much! &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary"><a href="../pages/admin.php" style="color:white;">Go Back</a></button></span>
  </div>
</div>

</body>