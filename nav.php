
<style>
    body{
        background-color: #dde8ff;
    }
    div.judul h1{
        text-align: center;
        margin:1%;
        font-weight: bold;  
    }
    div.box{
        margin: 2% 5% 1% 5%;
        background-color: #ffffff;
        border: 1px solid gray;
        border-radius: 10px;
        color: black;
    }
    div.login_form{
        padding: 2% 15% 2% 15%;;
        margin: 2% 20% 1% 20%;
        background-color: #ffffff;
        border: 1px solid gray;
        border-radius: 10px;
        color: black;
    }
    div.login_form h1{
        text-align: center;
        margin: 2%;
        font-weight: bold;  
    }
    div.box h1{
        text-align: center;
        margin: 2%;
        font-weight: bold;  
    }
    div.box a{
        margin: 2% 5% 1% 5%;
    }
     pre{
        font-size: 16px;
    }
    th{
        font-size: 30px;
        background-color: gray;
        color: white;
        font-family: monospace;
    }
    h5{
        font-size: 24px;
        font-family: monospace;   
    }
    nav{

        font-size: 16px;
        font-weight: bold;
        margin-left: 10%;
        background-color: black;

    }
    nav a{
        color: white;
    }
    nav li:hover {
        background-color: #dde8ff;
        font-size: 16px;
        font-weight: bold;
        font-style: oblique;
        line-height: 16px;
        padding: 1px 4px 1px 2px;
        border-radius: 5px;
        overflow: hidden;
    }
    .user:hover{
        background-color: #dde8ff;
        font-size: 17px;
        font-weight: bold;
        font-style: oblique;
        position: absolute margin-right;
        border-radius: 5px;
    }
    table, td, th{
        border: 1px solid black;
    } 
    table{
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding-top: 7px;
        padding-bottom: 4px;
        padding-left: 10px;
        padding-right: 5px;

    }
    td{
        font-size: 16px;
        font-weight: bold;
    }
    th{
        text-align: center;
        background-color: #00802b;
        font-size: 24px;
        color: white;
        font-weight: bold;
        border-color: #4d4d4d;
    }
    a.btn{
        background-color: #00802b;
        color: white;
        font-weight: bold;
    }
    a.btn:hover{
        background-color: white;
        color: black;
        font-weight: bold;
        position: absolute margin-right;
        border-radius: 5px;
        border-color: black;
    }
    div.modal{
        margin: 10%;
    }
    button.tombol{
        width: 40%;
        margin-left: 30%;
        margin-right: 30%;
        margin-bottom: 1%;
    }
    p.petunjuk{
        font-size: 20px;
        color: black;
        font-weight: bold;
        text-align: left;
    }
    a.edit{
        display: block;
    }
    .bigger{
        width: 20px; 
        height: 20px;
    }
    .tengah{
        display: flex;
        justify-content: center;
    }
    
    button.btn{
        background-color: #00802b;
        color: white;
        font-weight: bold;
    }
    button.btn:hover{
        background-color: white;
        color: black;
        font-weight: bold;
        position: absolute margin-right;
        border-radius: 5px;
        border-color: black;
    }
</style>
<?php 
include ('conf.php'); 
?>
<nav class="navbar ">
    <ul class="nav navbar-nav nav-col">
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
