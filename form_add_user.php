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
        <h1 class="page-title">ฟอร์มเพิ่มบุคลากร</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="homepages.php">หน้าแรก</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">ฟอร์ม</a></li>
          <li class="breadcrumb-item active">ฟอร์มเพิ่มบุคลากร</li>
        </ol>
        <!-- <div class="page-header-actions">
          <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
            target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span>
      </a>
        </div> -->
      </div>
      <div class="row justify-content-center">
          <div class="col-lg-6">
            <!-- Panel Standard Mode -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">ข้อมูลบุคลากร</h3>
              </div>
              <div class="panel-body">
                <form method="POST" action="form_add_user_db.php" class="form-horizontal" id="exampleStandardForm" autocomplete="off" >
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">รหัสพนักงาน</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="emp_code" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">ชื่อ</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="emp_name" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">ตำแหน่ง</label>
                    <div class="col-md-9">
                      <select name="userlevel" class="form-control">
                          <option value="">-เลือกข้อมูล-</option>
                          <option value="Admin">หัวหน้า [Admin]</option>
                          <option value="User">พนักงาน [User]</option>
                      </select>
                    </div>
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary" id="validateButton2">เพิ่มข้อมูล</button>
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

