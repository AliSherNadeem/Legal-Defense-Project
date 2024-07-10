<?php 
session_start();
session_regenerate_id(true);
include('db.php');

    extract($_POST);
if(isset($_POST['lawyersignup'])){
//echo $userename;
//echo $useremail;
//echo $userpass;
//echo $userpbcno
//echo $usergender;
//echo $userphone;
//echo $userpro;
//echo $userdob;
      
    $query="SELECT * FROM users WHERE user_email='$useremail'";
    $run_query=mysqli_query($query);
    $row=mysqli_fetch_array($conn,$run_query);
          if(mysqli_num_rows($run_query)<1){
        mysqli_query($conn,"INSERT INTO users(user_name,user_email,user_password,user_pbcno,user_phone,user_position,user_city,user_dob,user_gender,user_type) VALUES('$lawyername','$lawyeremail','$lawyerpass','$lawyerpbc','$lawyerphone','$lawyerpro','$lawyercity','$lawyerdob','$lawyergender','L')");
       
        header("location:join.php");
        $_SESSION['useremail']=$useremail;


    }else{
        header("location:join.php?Exsit=Email");
    } 
}

 
if(isset($_POST['clientsignup'])){
//echo $clientename;
//echo $clientemail;
//echo $clientpass;
//echo $clientgender;
//echo $clientphone;

    $query="SELECT * FROM users WHERE user_email='$useremail'";
    $run_query=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($run_query);
    if(mysqli_num_rows($run_query)<1){
        mysqli_query($conn, "INSERT INTO users(user_name,user_email,user_password,user_phone,user_gender,user_type) VALUES('$clientname','$clientemail','$clientpass','$clientphone','$clientgender','C')");
        header("location:index.php");
        $_SESSION['useremail']=$useremail;
    }else{
        header("location:join.php?Exsit=Email");
    } 
}
?>