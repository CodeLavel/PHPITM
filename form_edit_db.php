<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
session_start();
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$ID = $_POST["ID"];
  $duID = $_POST["duID"];
  $du_name = $_POST["du_name"];
  
  $sql = "UPDATE durables SET duID='$duID',du_name='$du_name'
  WHERE id=$ID";

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