<!-- PHP Starts Here -->
<?php 
    require_once "include/Connection.php"; 
    if(isset($_POST["btnlogin"]))
    {
        $Email=$_POST["email"];
        $password=md5($_POST["password"]);
        $query="select * from Admin  where Email='$Email' and Password='$password' ";
        $result=mysqli_query($conn,$query);
        $query1="select * from Users where Email='$Email' and Password='$password' ";
        $result1=mysqli_query($conn,$query1);
        if (mysqli_num_rows($result)>0) {
             while ($row=mysqli_fetch_array($result)) {
                $_SESSION['LoginAdmin']=$row["Email"];
                 echo"<script>  alert('  Login has been  successfully    '); window.location.href='index.php'; </script> ";
            }
        }elseif (mysqli_num_rows($result1)>0) {
               while ($row=mysqli_fetch_array($result1)) {
                   $_SESSION['LoginUser']=$row["Email"];
                 echo"<script>  alert('  Login has been  successfully    '); window.location.href='index.php'; </script> ";
                    }  
             } else {
       	  echo"<script>  alert(' There was an error in the account addition process  ');window.location.href='login.php' </script> ";
        }
        
    }
?>
<!doctype html>
<html >
	<head>
		<title> Login page </title>
        <style>/* login page style goes here */


input{
        border-radius: 30px;

}

	.login-div{
            width: 100%;
              align-content: center;
	}
	
	
	.logo-div{
		padding-top: 15px;
		padding-bottom: 10px;
	}
	.login-padding h2{
		margin-top: 5px;
		margin-bottom: 30px;
	}
	.form-group input{
    border-radius: 30px;
    margin-bottom: 10px;
        text-align: center;
}
    .form-group	.btn{ 
		margin-top: 10px;
		color: white;
        border-radius: 25px;
            background-color: var(--bs-pink);
          width: 297px;

	}
	 .form-group	.btn:hover{
		background: rgba(218, 11, 166, 0.253);
		color: white;
	}

  
.p-1{
  align-content: center;
    margin-left: 400px;
        width: 300px;
         text-align: right;

}

   body{
         background: url("./assets/img/4.jpg") top center;
          background-size: cover;
    }

</style>

     <?php include("include/header.php")?>

   <main id="main">
      <div class="container" style="  margin-top: 10%;   margin-bottom: 10%;">
          <div class="login-div mt-3 rounded" style="background: #321d6c7a;border-radius: 40px;padding-bottom: 30px;" >
            <Br>
              <h1 class="text-center " style=" color: #e9e1e1;">WELCOME</h1>
              <h3 class="text-center " style=" color: #e9e1e1;">To Your Account </h3>
                <div class="logo-div text-center">
                    <img src="./assets/img/images.png" alt="" class="align-items-center" width="85" height="85" style="     border: white solid 2px;   border-radius:50px ;">
                 </div>
                <form class="p-1" action="login.php" method="POST" >
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Enter Your Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="Password" name="password" placeholder="  Enter Your Password" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group text-center mb-12 mt-12">
                        <input type="submit" name="btnlogin" value=" LOG IN  " class="btn">
                              <h6 class="text-center " style=" color: #e9e1e1;">YOU DON'T HAVE AN ACCOUNT ?</h6>
                              </a>

                              <h5 class="text-center "><a href="REGISTER.php" class="btn-get-started scrollto"  style=" color: #e9e1e1;text-decoration: underline;"> NEW REGISTER </a></h5>

                    </div>
                </form>
           
            </div>

        </div>
   
    </main>
     <?php include("include/footer.php")?>




