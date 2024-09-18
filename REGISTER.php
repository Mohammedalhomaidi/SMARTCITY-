<?php include("include/Connection.php");

if (isset($_POST['btn_save'])) {
	  
 		$name=$_POST["name"];$Email=$_POST["Email"];
        $password= md5($_POST["password"]);
        $CITY=$_POST["CITY"];
 		$query="Insert into Users(Name,Password,Email)values('$name','$password','$Email')";
 		$run=mysqli_query($conn, $query);
 		if ($run) {
 		         echo"<script>  alert('  Account has been added successfully    '); window.location.href='login.php'; </script> ";
           }else{	  echo"<script>  alert(' There was an error in the account addition process  ');window.location.href='REGISTER.php' </script> ";
		   }

 	}
?>
<!doctype html>
<html lang="en">
	<head>
		<title>REGISTER - Page </title>
	     <?php include("include/header.php")?>
        <style>

       

	.overlay{
		background-color: #000000ab;
		width: 100%;
		background-attachment: fixed;
		height: 100%;
		top: 0;
		left: 0;
		z-index: 1;
	}

	.login-div{
		background: #1021f285;;
		width: 400px;
		margin: auto;
		border-radius: 100px 5px !important;
		align-content: center;
	}
	
	
	.login-padding{
		padding-top: 15px;
		padding-left: 30px;
		padding-right: 30px;
		padding-bottom: 20px;
	}
	
	.logo-div{
		padding-top: 10px;
		padding-bottom: 5px;
		border-bottom: 1px solid rgba(182, 178, 178, 0.363);
	}

	.login-padding label{
		color: white;
	}
	.btn-white{ 
		margin-top: 3px;
    border: 1px solid var(--bs-red);
    color: black;
    background: white;
	}
	.btn-white:hover{
		background: rgba(218, 11, 166, 0.253);
		color: white;
	}
      body{
         background: url("./assets/img/4.jpg") top center;
          background-size: cover;
    }
 .form-group input{	    height: 32px;}
        </style>
	</head>
	<body class="login-background">
	

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
                 <div class="login-div mt-3 rounded" style="margin-top: 71px !important;">
            <div class="logo-div text-center">
                <img src="./assets/img/images.png" alt="" class="align-items-center" width="90" height="90" style=" border-radius: 50px;border: white solid 2px ;">
            </div>
            <div class="login-padding">
                <h2 class="text-center text-white">NEW REGISTER</h2>
                <form class="p-1" action="REGISTER.php" method="POST">
                    <div class="form-group">
                        <label><h6>NAME:</h6></label>
                        <input type="text" name="name" placeholder="Enter Your Name  " class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6>Email:</h6></label>
                        <input type="Email" name="Email" placeholder="Enter Your Eamil" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group">
                        <label><h6> PASSWORD:</h6></label>
                        <input type="Password" name="password" placeholder="Enter Password" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group">
                        <label><h6>CITY:</h6></label>
                        <input type="TEXT" name="CITY" placeholder="Enter CITY" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>

                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btn_save" value="REGISTER" class="btn btn-white pl-5 pr-5 ">
                    </div>
                </form>
            </div>
        </div>
          </div>
        </div>

      </div>
    </section> 
</main>
             <?php include("include/footer.php")?>

    </body>
</html>



