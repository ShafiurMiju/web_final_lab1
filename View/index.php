<?php
  session_start();
  if(isset($_SESSION['email'])){
    header("location: profile.php");
    exit;
  }
	include '../Controller/login_validation.php';
?>
<html>
  <head>
    <title>Log in</title>
    <style>
      *{padding:0px;margin:0px;}

      #container{	}

      body{background-color:#ffffff;font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: bolder;border:none;}

      .webtitle{margin: 30px 0px 30px 0px;}

      .webtitle p{text-align: center;font-size: 29px;color: blue;font-family: fantasy;font-weight: 900;letter-spacing: 2px;}

      .loginarea{position: relative;margin: auto;width: 400px;background-color: rgb(207, 214, 219);border-radius: 10px;padding:10px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);text-align: center;}

      .avater img{width: 120px;height: 120px;display: block;margin: auto;}

      .loginbox{display: block;}

      .loginbox .box{margin-bottom: 20px;}

      .loginbox .inputbox{border-style: none;border-radius: 10px;padding: 15px;width: 350px;margin-bottom: 5px;}

      .loginbox .loginbtn{border-style: none;border-radius: 10px;padding: 12px;width: 350px;background-color: blue;color: white;font-size: 15px;
        font-weight: bolder;cursor: pointer;}

      .loginbtn:hover{background-color: #5074d9;}

      .loginothers a{text-decoration: none;font-size: 15px;font-family: Arial, Helvetica, sans-serif;}

      .forgetpass{margin: 25px 0px 12px 0px;}

      .newaccount{margin: 5px 0px 15px 0px;}

      .leftdesign{background-color: black;content: "";border: 5px solid rgb(207, 214, 219);;border-radius: 10px;width: 25%;float: left;margin-top: 7px;}

      .otherlogin{float: left;width: 45%;font-size: 18px;font-weight: 600;color: blue;}

      .rightdesign{background-color: black;content: "";border: 5px solid rgb(207, 214, 219);;border-radius: 10px;width: 25%;float: right;margin-top: 7px;}

      .otherloginavatar{position: relative;display: inline-block;margin: 15px;}

      .otherloginavatar a{margin: 10px;}

      .loginarea2{position: relative;margin: auto;width: 400px;padding-top:30px;text-align: center;}

      .box{overflow:hidden;}
	  </style>
  </head>
  <body>
    <section id="container">
      <div class="webtitle">
        <p>Plastic & Polythene Collector</p>
      </div>

      <div class="loginarea">
         <div class="avater">
           <img src="image/avatar.png" >
           <?php
            if($Email!="" && $Password!="" && $isLogin==false && $isLoginSuccess==false){
              echo "<p style='color:red;font-size:14px;text-align:center;padding-bottom:10px;'>Wrong password.Try again.</p>";
            }
           ?>
         </div>

         <div class="loginbox">
            <form action="" method="post" enctype="multipart/form-data">
            	<div class="box">
                	<input class="inputbox" type="email" name="email" placeholder="E-Mail Address" >
					<?php
						if($isPost==true && $Email=="")
							echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
					?>
              </div>

              <div class="box">
                	<input class="inputbox" type="password" name="password" placeholder="Password" >
					<?php
						if($isPost==true && $Password=="")
							echo "<span style='color:red;font-size:13px;text-align:left;padding-top:5px'>Required</span>";
					?>
              </div>

              <div class="box">
                	<input class="loginbtn" type="submit" name="loginbtn" value="Log in">
              </div>

            </form>
         </div>

         <div class="loginothers">
           <div class="forgetpass">
              <a href="ForgetPassword.php">Forgotten Account?</a>
           </div>

           <div class="newaccount">
              <a href="registration.php">New User? Create a new Account.</a>
           </div>

          </div>
      </div>

      <div class="loginarea2">
        <div class="leftdesign">
          
        </div>
        <div class="otherlogin">
          <p>or log in with</p>
        </div>
        <div class="rightdesign">
          
        </div>

        <div class="otherloginavatar">
          <a href="#"><img src="image/google.png" width="25px" height="25px"></a>
          <a href="#"><img src="image/facebook.png" width="25px" height="25px"></a>
          <a href="#"><img src="image/twitter.png" width="26px" height="26px"></a>
        </div>
      </div>

    </section>
    <footer id="container">
      
    </footer>
  </body>
  
</html>