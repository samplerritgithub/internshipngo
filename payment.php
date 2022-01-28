<?php
include("db.php");
if(isset($_POST['payment_id'])  && isset($_POST['amt'])  && isset($_POST['name'])  && isset($_POST['phone number'])  && isset($_POST['email']))
{
    echo 'inside';
    $payment_id = $_POST['payment_id'];
    $amount =$_POST['name'];
    $amount =$_POST['amt']
    $email =$_POST['email'];
    $amount =$_POST['phone number'];
    $created_at =date('y-m-d h:i:s');
    mysqli_query($conn,"insert into payment_details(Razorpay_id,Email,Phone number,User_Name,Amount,Status,Created_at))"
}






?>