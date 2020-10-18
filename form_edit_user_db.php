<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
session_start();
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$id = $_POST["ID"];
  $emp_code = $_POST["emp_code"];
  $emp_name = $_POST["emp_name"];
  $userlevel = $_POST["userlevel"];
  
  $sql = "UPDATE users SET emp_code='$emp_code',emp_name='$emp_name',userlevel='$userlevel'
  WHERE id=$id";

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
mysqli_close($conn); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลเรียบร้อย');";
  echo "window.location = 'homepages.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('กรุณาลองใหม่อีกครั้ง');";
  echo "</script>";
}
?>