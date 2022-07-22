<?php
    include '../Controller/log_out.php';

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="lab_1";

    $email=$_SESSION['email'];

    $conn=new mysqli($servername,$username,$password,$dbname);

    $q="SELECT first_name, last_name FROM seller WHERE email='$email'";

    $result=$conn->query($q);        

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $first_name1=$row["first_name"];
            $last_name1=$row["last_name"];
        }
    }        
?>
<html>
    <head>
        <title></title>
        <style>
            *{padding:0px;margin:0px;}

            body{background-color:#ffffff;color: black;font-family: Arial, Helvetica, sans-serif;border:none;
                background-image: radial-gradient(circle, rgb(231 185 185) ,rgb(214 195 160),rgb(165 165 130),rgb(163 178 163),rgb(144 144 172),#b8abc2,#cebace);}

            .container{width: 1170px;margin: 15px auto 15px auto;}

            #navbar{background-color: rgb(255, 255, 255);width: 25%;float: left;position: sticky;background: transparent;}

            .sname{background-color: #D3E7F0;padding: 18px 20px;border-radius: 5px;margin-bottom: 8px;padding-top: 10px;}

            .menubar ul li{background-color: rgb(180, 202, 194);padding: 16px 20px;border-radius: 5px;margin-bottom: 5px;list-style-type: none;}

            .menubar ul li a{text-decoration: none;font-size: 16px;font-weight: 500;color: green;}

            .logoutbtn input{background-color: rgb(187, 43, 43);padding: 12px 20px;border-radius: 5px;margin-bottom: 5px;color: white;font-size: large;
                width: 100%;border: none;cursor: pointer;}

            #sectionbar{width: 75%;background-color: rgb(255, 255, 255);float: right;overflow: hidden;background: transparent;}

            .ssectionbody{width: 95%;margin: 0px auto;border: 1px solid black;border-radius: 2px;padding: 10px;overflow: hidden;min-height: 95vh;}
        </style>
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
                <div class="sname">
                    <?php echo $first_name1." ".$last_name1;?>
                </div>
                <div class="menubar">
                    <ul>
                        <li>
                            <a href="SDashboard.php">Sell Product</a>
                        </li>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="BuyerinMap.php">Buyer in Map</a>
                        </li>
                        <li>
                            <a href="Sellernotification.php">Notification</a>
                        </li>
                        <li>
                            <a href="SellerNotice.php">Notice</a>
                        </li>
                        <li>
                            <a href="SellerReport.php">Report</a>
                        </li>
                    </ul>
                </div>
                <div class="logoutbtn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="submit" name="logoutbtn" value="Log Out">
                    </form>
                </div>
            </nav>
        </div>
    </body>
</html>