<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$sql    = "SELECT * FROM pegawai WHERE email ='$email'";
$result = $conn->query($sql);

  while($row = $result->fetch_assoc()) {
    if ($password == $row['password'])
    {
    echo "sukses";
        $_SESSION['status'] = $row['status'];
        $_SESSION['email'] = $row['email'];
        header('location: index.php');
    }else 
    echo '<h1>Login gagal</h1>';
    }

  ?>