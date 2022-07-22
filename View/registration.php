<?php
    session_start();
	include '../Controller/registration_validation.php';
?>

<html>
    <head>
        <title>Create an account</title>
        <style>
			*{padding:0px; margin:0px;}

			#container{margin-top: 50px;}

			body{background-color:#ffffff; color: black; font-family: Arial, Helvetica, sans-serif; border:none;}

			form{overflow: hidden;}

			.boxarea{position: relative; margin: auto; width: 400px; background-color: rgb(207, 214, 219); border-radius: 10px; text-align: center;
				padding:15px; box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);}

			.boxtext{margin: 20px 0px 15px 0px; font-size: 18px;}

			.underline{border: 1px solid #ffffff; margin-bottom: 20px;}

			.username{position: relative;}

			.fname {width: 45%;float: left;}

			.formbox input {padding: 10px; border: none;border-radius: 10px;margin: 10px 0px 10px 0px;}

			.lname {width: 45%; float: right;}

			.email {width: 100%;display: inline-block;}

			.email input {width: 400px;}

			.phonenumber input {width: 400px;}

			.password input {width: 400px;}

			.address input {width: 400px;}

			.district {width: 45%;float: left;}

			.formbox select {padding: 10px;border: none;border-radius: 10px;margin: 10px 0px 10px 0px;width: 100%;}

			.upzilla {width: 45%;float: right;}

			.gender {width: 45%;float: left;}

			.dob {width: 45%;float: right;}

			.dob input{width: 160px;}

			.termcon{display: inline-block;font-size: 10px;}

			.sellerbtn {width: 45%;float: left;}

			.buyerbtn {width: 45%;float: right;}

			.sellerbtn input{padding: 10px;border: none;border-radius: 10px;margin: 20px 0px 20px 0px;width: 100%;
							background-color: blue;color: #ffffff;font-weight: bold;cursor: pointer;color: whitesmoke;}

			.buyerbtn input{padding: 10px;border: none;border-radius: 10px;margin: 20px 0px 20px 0px;width: 100%;
							background-color: blue;color: #ffffff;font-weight: bold;cursor: pointer;color: whitesmoke;}

			.sellerbtn input:hover{background-color: #5074d9;}

			.buyerbtn input:hover{background-color: #5074d9;}

			.backindex a{text-decoration: none;font-weight: bold;}
		</style>
    </head>
    <body>
        <section id="container">
            <div class="boxarea">
                <div class="boxtext">
                    <h3>Create a new account.</h3>
                </div>

                <div class="underline">

                </div>

                <div class="formbox">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="username">
                            <div class="fname">
                                <input type="text" id="fname" name="fname" placeholder="First Name">
								<?php
									if($isPost==true && $firstName=="")
									echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
								?>
                            </div>

                            <div class="lname">
                                <input type="text" id="lname" name="lname" placeholder="Last Name">
								<?php
									if($isPost==true && $lastName=="")
									echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
								?>
                            </div>

                        </div>

                        <div class="email">
                            <input type="email" id="email" name="email" placeholder="E-mail Address">
							<?php
								if($isPost==true && $email=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="phonenumber">
                            <input type="number" id="pnumber" name="pnumber" placeholder="Phone Number">
							<?php
								if($isPost==true && $pnumber=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="password">
                            <input type="password" id="passwrd" name="passwrd" placeholder="Password">
							<?php
								if($isPost==true && $passwrd=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="district">
                            <select name="dstrct">
                                <option value="Select a district">Select a district</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Mymensingh">Mymensingh</option>
                            </select>
							<?php
								if($isPost==true && $dstrct=="Select a district")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="upzilla" >
                            <select name="upzlla">
                                <option value="Select an Upzilla">Select an Upzilla</option>
                                <option value="Nandail">Nandail</option>
                                <option value="Fatikchhari">Fatikchhari</option>
                                <option value="Boalkhali">Boalkhali</option>
                                <option value="Karnaphuli">Karnaphuli </option>
                                <option value="Anwara">Anwara </option>
                                <option value="Lohagara">Lohagara</option>
                            </select>
							<?php
								if($isPost==true && $upzla=="Select an Upzilla")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="address">
                            <input type="text" id="address" name="address" placeholder="Road & House No.">
							<?php
								if($isPost==true && $address=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="gender">
                            <select name="gender">
                                <option value="Select Gender">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Custom">Custom</option>
                            </select>
							<?php
								if($isPost==true && $gender=="Select Gender")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="dob">
                            <input type="date"  id="dob" name="dob">
							<?php
								if($isPost==true && $dob=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="termcon">
                            <p>
                                By clicking Sign Up, you agree to our Terms, Data Policy and 
                                Cookie Policy. You may receive SMS notifications from us 
                                and can opt out at any time.
                            </p>
                        </div>

                        <div class="sellerbtn">
                            <input type="submit" name="sellerbtn" value="Sign up as Seller">
                        </div>

                        <div class="buyerbtn">
                            <input type="submit" name="buyerbtn" value="Sign up as Buyer">
                        </div>

                    </form>

                    <div class="backindex">
                        <a href="Index.php">Already have an account?</a>
                    </div>

                    <?php
                        if($accountC==true){
                            echo "<p style='color:green;text-decoration: none;font-weight: bold;font-size:14px;text-align:center;padding-bottom:10px;padding-top:10px;'>Account Create successfully done!<a href='Index.php' style='color:green;text-decoration: none;font-weight: bold;'> GO Back Log in Page!</a></p>";
                        }
                    ?>

                </div>

            </div>

        </section>

    </body>
    
</html>