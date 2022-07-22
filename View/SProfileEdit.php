<?php
    session_start();
    include '../Controller/SellerProfileEdit.php';
	
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_SESSION['email']; ?></title>
        <style>
            .profilemenubar{overflow: hidden;}
            .aboutyou{margin-top: 25px;}

            .profilemenubar ul li{background-color: rgb(180, 202, 194);padding: 16px 20px;border-radius: 5px 0px 0px 0px;margin-bottom: 5px;list-style-type: none;
                width: 28.5%;float: left;text-align: center;}

            .profilemenubar ul li:last-child{border-radius: 0px 5px 0px 0px;}

            .profilemenubar ul li:nth-of-type(2){border-radius: 0px 0px 0px 0px;}

            .profilemenubar ul li a{text-decoration: none;font-size: 17px;font-weight: 600;color: green;cursor: pointer;}

            .profilepic{width: 150px;height: 150px;overflow: hidden;margin: 10px auto;}

            .profilepic img{width: 142px;height: 142px;border-radius: 50%;border: 4px solid rgba(84, 140, 0, 0.393);}

            .profileinfo{margin: 50px 10px 10px 20px;}

            .profileinfo table{width: 100%;}

            .profileinfo table th{text-align: left;padding: 15px 30px;background-color: rgb(121, 192, 255);color: rgb(9, 113, 26);border: none;
                border-radius: 5px 5px 0px 0px;width: 30%;}

            .profileinfo table td{background-color: rgb(93, 189, 236);color: rgb(9, 95, 36);border: none;font-weight: 500;border-radius: 5px 5px 0px 0px;
                padding-left: 15px;}

            input {background-color: #5CBBE9;border: 1px solid blue; width: 95%; border-radius: 5px; font-size: 15px;padding: 10px 5px;}

            .esave{color: green;font-size: 20px;font-weight: 900;border: none;cursor: pointer;}
        </style>
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
            <?php
                include 'navbar.php';
            ?>
            </nav>
            <section id="sectionbar">
                <div class="ssectionbody">
                    <div class="profilemenubar">
                        <ul>
                            <li>
                                <a href="profile.php">About You</a>
                            </li>
                            <li>
                                <a href="SProfileEdit.php">Edit Profile</a>
                            </li>
                            <li>
                                <a href="SPasswordChange.php">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aboutyou">
                        <div class="profilepic">
                            <img src="image/profilepic.jpg">
                        </div>
                        <div class="profileinfo">
                            <form action="" method="post" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <th>
                                            <p>First Name: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="efname" value="<?php echo $first_name; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Last Name: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="elname" value="<?php echo $last_name; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Phone Number: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="epnumber" value="<?php echo $phone_number; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Address: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="eaddress" value="<?php echo $address; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>District: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="edstrct" value="<?php echo $district; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Upzilla/Thana: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="eupzlla" value="<?php echo $upzilla; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Gender: </p>
                                        </th>
                                        <td>
                                        <input type="text" name="egender" value="<?php echo $gender ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Date of Birth: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="edob" value="<?php echo $dob; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input class="esave" type="submit" name="esavebtn" value="SAVE">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>