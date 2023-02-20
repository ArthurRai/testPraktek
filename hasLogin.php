<?php

if($_SESSION["status"] != "login"){
    header("location:logIndex.php");
}

?>