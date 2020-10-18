<!DOCTYPE html>
<html lang="en">
    <head>

    <?php include 'link_css.html'?>
    </head>
<body>
    <?php include 'navbar.php'?>
    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">ฟอร์มแก้ไขครุภัณฑ์</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="homepages.php">หน้าแรก</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">ฟอร์ม</a></li>
          <li class="breadcrumb-item active">ฟอร์มแก้ไขครุภัณฑ์</li>
        </ol>
        <!-- <div class="page-header-actions">
          <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
            target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span>
      </a>
        </div> -->
      </div>
      <?php
//1. เชื่อมต่อ database: 
             include('connect.php');  
            $durables_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
            $sql = "SELECT * FROM durables WHERE id=$durables_id";

            $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
            $row = mysqli_fetch_array($result);
            extract($row);
?>
      <div class="row justify-content-center">
          <div class="col-lg-6">
            <!-- Panel Standard Mode -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">ข้อมูลครุภัณฑ์</h3>
              </div>
              <div class="panel-body">
                <form method="POST" action="form_edit_db.php" class="form-horizontal" id="exampleStandardForm" autocomplete="off">
                <input type="hidden" name="ID" value="<?php echo $durables_id; ?>" />
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">ลำดับ</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" value="<?php echo $durables_id; ?>" disabled />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">เลขครุภัณฑ์</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="duID" value="<?php echo $duID; ?>" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">ชื่อครุภัณฑ์</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="du_name" value="<?php echo $du_name; ?>" />
                    </div>
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary" id="validateButton2">ยืนยันการแก้ไข</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Standard Mode -->
          </div>
        </div>
    <?php include 'script_js.html' ?>
  </body>
  </html>

