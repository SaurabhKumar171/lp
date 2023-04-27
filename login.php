<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
        
    <title>Login</title>

    
    
</head>
<body>

    <?php

    //learn from w3schools.com
    //Unset all the server side variables

    session_start();

    $_SESSION["user"]="";
    $_SESSION["usertype"]="";
    
    // Set the new timezone
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');

    $_SESSION["date"]=$date;
    

    //import database
    include("connection.php");

    



    if($_POST['loginsubmit']){
         

        $email=$_POST['useremail'];
        $password=$_POST['userpassword'];
        
        $error='<label for="promter" class="form-label"></label>';

        $result= $database->query("select * from webuser where email='$email'");
        if($result->num_rows==1){
            $utype=$result->fetch_assoc()['usertype'];
            if ($utype=='p'){
                $checker = $database->query("select * from patient where pemail='$email' and ppassword='$password'");
                if ($checker->num_rows==1){


                    //   Patient dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='p';
                    
                    header('location: patient/index.php');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                }

            }elseif($utype=='a'){
                $checker = $database->query("select * from admin where aemail='$email' and apassword='$password'");
                if ($checker->num_rows==1){


                    //   Admin dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='a';
                    
                    header('location: admin/index.php');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                }


            }elseif($utype=='d'){
                $checker = $database->query("select * from doctor where docemail='$email' and docpassword='$password'");
                if ($checker->num_rows==1){


                    //   doctor dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='d';
                    header('location: doctor/index.php');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                }

            }
            
        }else{
            $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">We cant found any acount for this email.</label>';
        }






        
    }
    else if($_POST['signupsubmit']){
        $_SESSION["personal"]=array(
            'fname'=>$_POST['fname'],
            'lname'=>$_POST['lname'],
            'address'=>$_POST['address'],
            'nic'=>$_POST['nic'],
            'dob'=>$_POST['dob']
        );
    
    
        print_r($_SESSION["personal"]);
        header("location: create-account.php");
    
    
    }
    else{
        $error='<label for="promter" class="form-label">&nbsp;</label>';
    }

    ?>





    <center>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" method="POST" >
					<label for="chk" aria-hidden="true">Sign up</label>
					<!-- <input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button> -->

                    <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                    <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                    <input type="text" name="address" class="input-text" placeholder="Address" required>
                    <input type="text" name="nic" class="input-text" placeholder="NIC Number" required>
                    <input type="date" name="dob" class="input-text" required>
                    <!-- <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" > -->
                    <input type="submit" name="signupsubmit" value="Next" class="login-btn btn-primary btn">

				</form>
			</div>

			<div class="login">
				<form action="" method="POST" >
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="useremail" class="input-text" placeholder="Email Address" required>
                    <input type="Password" name="userpassword" class="input-text" placeholder="Password" required>
					<input type="submit" id="loginbtn" name="loginsubmit" value="Login"></input>
				</form>
			</div>
	</div>
</center>
</body>
</html>