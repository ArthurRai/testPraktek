<?php 
if(isset($_GET['LogConf'])){
  if($_GET['LogConf'] == "logout"){
            echo "<script>alert(\"Anda berhasil Logout\" );</script>";   
  } else if($_GET['LogConf'] == "logFail"){
            echo "<script>alert(\"Password atau username yang anda masukkan salah!\" );</script>";  
  } else if($_GET['LogConf'] == "logErr"){
            echo "<script>alert(\"Password atau username yang anda masukkan salah!\" );</script>";  
  }
} else {
    header("location:index.php");
}
?>