<!DOCTYPE html>
<html lang="en">
<head>
<title>register</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="fa">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style-responsive.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/video-default.css" rel="stylesheet" type="text/css" media="all"/>
<!--
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script> 
<!--
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script> 
-->
</head>
<body style="background-image:url(images/background.jpg); background-attachment:fixed" >

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- toggle get grouped for better mobile display -->  
	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

 <a href="index.php"><img alt="Brand" src="images/amir.png" width="160" height="54" align="left"></a> 
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li><a href="index.php" class="glyphicon glyphicon-home"><hnazanins style="color:gray">&nbsp;&nbsp;خانه</hnazanins><span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#" class="glyphicon glyphicon-pencil"><hnazanins style="color:gray">&nbsp;&nbsp;ثبت نام</hnazanins></a></li>
		<li><a href="contact.php" class="glyphicon glyphicon-phone-alt"><hnazanins style="color:gray">&nbsp;&nbsp;تماس با ما</hnazanins></a></li>
		<li><form class="navbar-form navbar-left" role="search">
		<div class="form-group">
          <input type="text" class="form-control input-search" placeholder=" نام کالا و ..." >
        </div>
        <a href="#" type="button" class="btn btn-default"><hnazanins style="color:gray">&nbsp;جستجو کن</hnazanins>
		<i class="fa fa-search"></i></a>
      </form></li>
	  </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="panel panel-success" style="position:relative; right:42px; top:20px; width:1250px; height:500px;">
  <!-- Default panel contents -->
  <div class="panel-heading" align="center"><b><hnazanins style="color:blue;">ثبت نام</hnazanins></b></div>
 
<!-- *********************************************************************-->
<!-- *********************************************************************-->
<!-- *********************************************************************-->
<!-- *********************************************************************-->
<!-- *********************************************************************-->

<!-- <?php //echo $_SERVER['PHP_SELF'];?> -->

 <form method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>">
  <div class="panel-body">
    <p><hnazanins style="color:green;">کاربر گرامی ، لطفا جهت ثبت نام ، موارد خواسته شده را با دقت پاسخ داده و سپس دکمه ثبت را کلیک کنید : </hnazanins></p>
	
	<div class="row" style="position:relative; top:40px; right:20px;">
    <div class="col-lg-6" style="width:400px;">
    <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">نام</hnazanins></b></span>
 
 <input type="text" name="first_name" class="form-control" placeholder="" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6" style="width:400px;">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">نام خانوادگی</hnazanins></b></span>
  
  <input type="text" name="last_name" class="form-control" placeholder="" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6" style="width:400px;">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1" ><b><hnazanins style="color:blue;">ایمیل</hnazanins></b></span>
 
 <input type="text" name="email" class="form-control" style="text-align:left;" placeholder="E-Mail" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div>
</div><!-- /.row -->

	<div class="row" style="position:relative; top:80px; right:20px;">
    <div class="col-lg-6" style="width:400px;">
    <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">تلفن</hnazanins></b></span>
 
 <input type="text" name="phone" class="form-control"style="text-align:left;" placeholder="Phone" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6" style="width:800px;">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">آدرس</hnazanins></b></span>
 
 <input type="text" name="address" class="form-control" placeholder="" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div>	
	
<div class="row" style="position:relative; top:120px; right:20px;">
    <div class="col-lg-6" style="width:400px;">
    <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">نام کاربری</hnazanins></b></span>
 
 <input type="text" name="username" class="form-control" style="text-align:left;" placeholder="Username" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6" style="width:400px;">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">رمز عبور</hnazanins></b></span>
  
  <input type="text" name="pass" class="form-control" style="text-align:left;" placeholder="Password" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6" style="width:400px;">
    <div class="input-group">
	  
      <span class="input-group-addon" id="basic-addon1"><b><b><hnazanins style="color:blue;">تکرار رمز عبور</hnazanins></b></span>
  <input type="text" name="pass2" class="form-control" style="text-align:left;" placeholder="Repeatation" aria-describedby="basic-addon1">
    </div><!-- /input-group -->
  </div>
</div>
	<div class="container">
	<hnazanins style="color:yellow"><input type="submit" name="submit"  value="ثبت" type="button" class="btn btn-primary" style="width:100px; position:relative; right:520px; top:170px;"><hnazanins>
	
	</div>
	 
	</form>
<?php
    $GLOBALS['passwordfail']=false;
	$GLOBALS['usernameexist']=false;
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "store";
	//echo "<h1 align=left>I am Here</h1>";
	//echo "<p align=left></P>";
	if (isset($_REQUEST['submit'])) 
	{
		//echo 'I am inside';
		
		$temppas1=$_REQUEST['pass'];
		$temppass2=$_REQUEST['pass2'];
		
		//CHECKING PASSWORD
		if(($temppas1!=$temppass2) || (empty($temppas1)))
		{
		//echo "<p align=left>password ERROR</p>";
		$GLOBALS['passwordfail']=true;
		}
	
	
		else
		{
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			} 
			
			$user=$_REQUEST['username'];
			$sql = "SELECT customer.username FROM customer;";
			$exist=false;
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) 
			{
				//echo $user;
				//echo $row["username"]."<br>";
				if($user == $row["username"])
					{
					$exist=true;
					$GLOBALS['usernameexist']=true;
					}
			}
	
	
			if (!$exist) 
			{
				//INSERT CUSTOMER IN TABLE
				$username=$_REQUEST['username'];
				$pass=$_REQUEST['pass'];
				$first_name=$_REQUEST['first_name'];
				$last_name=$_REQUEST['last_name'];
				$email=$_REQUEST['email'];
				$phone=$_REQUEST['phone'];
				$address=$_REQUEST['address'];

				$sql2 = "INSERT INTO customer (username,pass,first_name,last_name,email,phone,address)
				VALUES ('$username','$pass','$first_name','$last_name','$email','$phone','$address')";

				if ($conn->query($sql2) === TRUE) 
					{
					//echo "New record created successfully<br>";
					$conn->close();
					} 
				else 
				{
				echo "Error: " . $sql2 . "<br>" . $conn->error;
				}
	
			}
			else 
			{
	
				//echo "کاربر با این نام کاربری وجود دارد";
			}
		}
	}	
	
?>
 
	
	<!------------------------------------------------------------------------->
	<!------------------------------------------------------------------------>
	<!------------------------------------------------------------------------>
	<!------------------------------------------------------------------------>
	<!------------------------------------------------------------------------>
 
 </div>
 
 </div>
<?php
    
    if (isset($_REQUEST['submit'])) 
	{	
		if($GLOBALS['passwordfail']==true && isset($GLOBALS['passwordfail']))
		{
		echo"<p align=\"center\"><hnazanins style=\"color:white;\">رمز عبور را به شکل صحیح وارد نمایی.</hnazanins></p>";
		}
		
		else if($GLOBALS['usernameexist']==true)
		{
			echo "<p align=\"center\"><hnazanins style=\"color:white;\">کاربری با این شناسه وجود دارد.</hnazanins></p>";
		}
		
		else
		{
		    echo "<p align=\"center\"><hnazanins style=\"color:white;\">ثبت نام با موفقیت انجام شد.</hnazanins></p>";
		}
	}
 ?>









</body>
</html>