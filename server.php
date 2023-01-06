<?php
if(!isset($_SESSION)){
    session_start() ;}
    $error=array() ;
    //connect to data base
    $db=mysqli_connect('localhost','root','','registration4');
    //if cilicked the button
    if(isset($_POST['register'])) {
        $fullname=mysqli_real_escape_string($db,$_POST['fn']);
        $username=mysqli_real_escape_string($db,$_POST['un']);
        $phonenumber=mysqli_real_escape_string($db,$_POST['pn']);
        $email=mysqli_real_escape_string($db,$_POST['em']);
        $password=mysqli_real_escape_string($db,$_POST['psw']);
        $confirmpassword=mysqli_real_escape_string($db,$_POST['con pws']);
        if(empty($username)){
            array_push($error,"username is required");
        }
        if(empty($email)){
            array_push($error,"Email is required");
        }
        if(empty($password)){
            array_push($error,"password is required");
        }
        if(empty($confirmpassword)){
            array_push($error,"confirmpassword is required ");
        }
        if($password!=$confirmpassword){
            array_push($error,"password do-not match");
        }
        if(count($error)==0){
    //insert into data base
$sql="INSERT INTO users(fullname,phonenamber,username,email,password,confirmpassword) values($fullname,$phonenamber,$username,$email,$password,$confirmpassword)";
mysqli_query($db;$sql);
}
}
?>