<?php
    session_start();
    include('db.php');


    extract($_POST);
    if(isset($_POST['lawyerlogin'])){
    
    //echo $useremail;
    //echo $userpass;
    $query="SELECT * FROM users WHERE user_email='$lawyeremail' AND user_password='$lawyerpass' AND user_type='L'" ;
    $run_query=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($run_query);
    if(mysqli_num_rows($run_query)>0){
        if(isset($_SESSION['RequstedURI'])){
        header("location:".$_SESSION['RequstedURI']);
        $_SESSION['useremail']=$row["user_email"];
    }else{
            header("location:index.php");
        $_SESSION['useremail']=$row["user_email"];
        }

    }else{
        header("location:login.php?login=failed");
    }
}
    if(isset($_POST['clientlogin'])){
    
    //echo $useremail;
    //echo $userpass;
    $query="SELECT * FROM users WHERE user_email='$clientemail' AND user_password='$clientpass' AND user_type='C'" ;
    $run_query=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($run_query);
    if(mysqli_num_rows($run_query)>0){
        if(isset($_SESSION['RequstedURI'])){
        header("location:".$_SESSION['RequstedURI']);
        $_SESSION['useremail']=$row["user_email"];
    }else{
            header("location:index.php");
        $_SESSION['useremail']=$row["user_email"];
        }

    }else{
        header("location:login.php?incorrect=data");
    }
}
?>