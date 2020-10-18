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
        <h1 class="page-title">ข้อมูลบุคลากร</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="homepages.php">หน้าแรก</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">ตาราง</a></li>
          <li class="breadcrumb-item active">ข้อมูลบุคลากร</li>
        </ol>
        <!-- <div class="page-header-actions">
          <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
            target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span>
      </a>
        </div> -->
      </div>
      
        <!-- Panel Table Add Row -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">บุคลากรทั้งหมด</h3>
          </header>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  
                    <a href="form_add_user.php"><button class="btn btn-outline btn-primary" type="button"><i class="icon wb-plus"></i>บุคลากร</button></a>
                  
                </div>
              </div>
            </div>
            <?php
          include 'connect.php';
          $user = "SELECT * FROM users WHERE id" or die("Error:" . mysqli_error($conn));
          $result = mysqli_query($conn, $user);
      ?>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>รหัสพนักงาน</th>
                  <th>ชื่อพนักงาน</th>
                  <th>แก้ไข-ลบ</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $i = 1;
              while ($row = mysqli_fetch_array($result)) {
                $k = $i++;
              ?>
                <tr class="gradeA">
               
                <td>
                    <center><?php echo $k; ?></center>
                  </td>
                  <td>
                    <center><?= $row["emp_code"]; ?></center>
                  </td>
                  <td>
                    <center><?= $row["emp_name"]; ?></center>
                  </td>
                  <?php echo
                  "<td class='actions'>
                    <a href='form_edit_user.php?ID=$row[0]' class='btn btn-sm btn-icon btn-pure btn-default on-editing' data-original-title='แก้ไข้'>
                    <i class='icon wb-edit' aria-hidden='true'></i></a>
                    <a href='form_del_users_db.php?ID=$row[0]' class='btn btn-sm btn-icon btn-pure btn-default on-editing' data-original-title='แก้ไข้'>
                    <i class='icon wb-trash' aria-hidden='true'></i></a>
                  </td>"
                  ?>
                </tr>
                <?php
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Table Add Row -->

      </div>
    </div>
    <!-- End Page -->
    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-right">
         CodeLavel Thailad
      </div>
    </footer>
    <?php include 'script_js.html' ?>
  </body>
  </html>

