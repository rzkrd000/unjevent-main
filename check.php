<?php
include('koneksi.php');
session_start();

$loginst = 0;
if ($_SESSION['username']){ 

$cek_user = $_SESSION['username'];

$ses_sql = mysqli_query($conn,"SELECT username FROM login WHERE username='$cek_user' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['username'];

if(!empty($login_user))
{
   $loginst = 1;
}

}

?>