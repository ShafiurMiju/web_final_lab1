<?php
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="lab_1";

	$conn=new mysqli($servername,$username,$password,$dbname);

    $isPost=false;
    $isLogin=true;
    $isLoginSuccess=true;
    $Email=$Password="";
    $count=0;
    
    if(isset($_POST["loginbtn"])){
        $isLogin=false;
        $isPost=true;

        if($_POST["email"]!=""){
            $Email=$_POST["email"];
        }

        if($_POST["password"]!=""){
            $Password=$_POST["password"];
        }

        if($_POST["email"]!="" && $_POST["password"]!=""){
            $q="SELECT * FROM seller WHERE email='$Email' AND password = '$Password'";

            $result = mysqli_query($conn, $q);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count==1){  
                $_SESSION['email'] = $Email;
                header("location:profile.php");  
            }  
            else{  
                $isLoginSuccess=false;  
            }  
        }
        
    }
?>



	