<!--Sessions-->
<?php
session_start();
$_SESSION['is_search']=false;
$_SESSION['let']=0;
$_SESSION['esm']="nobody";
$GLOBALS['state']=0; // 1:wrong pass 2:user don't exist
?>
<!--Login-->
<?php

	if($_SESSION['let']==1) 
	{
    header("Location: login.php");
    }
	if (isset($_POST['submit'])) 
    {
		
		$user=$_POST['username'];
		$pass=$_POST['pass'];
		$servername = "localhost";
		$username = "root";
		$password = "1234";
		$dbname = "store";
		 
		if(!empty($user))
	    {
     		$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			} 
			else
			{	
				$sql = "SELECT customer.pass,customer.first_name FROM customer where username=\"$user\"";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
				{
					
					$row = $result->fetch_assoc();
					//echo $row['pass'];
					//echo $pass;
					if ($row['pass']==$pass)
					{
						
						//login code here
						//echo "<hnazanins style=\"color:black\">&nbsp; </hnazanins>";
						
						$_SESSION['let']=1;
						$_SESSION['esm']=$row['first_name'];
						$_SESSION['manager']=$user;
						$conn->close();
						header("Location: login.php");
					}
					
					else
					{
				
						//Wrong username or password
						//echo "<hnazanins style=\"color:black\">&nbsp;رمز عبور اشتباه است. </hnazanins>";
						$GLOBALS['state']=1;
						$conn->close();
					}
					
				}
				else
				{
					//Username don't exist
					//echo "<hnazanins style=\"color:black\">&nbsp;چنین کاربری وجود ندارد </hnazanins>";
					$GLOBALS['state']=2;
				}
		
				
			}
			
			
	    }
		else
		{
			//fields are empty
			//echo "empty";
		}	
		
	}
?>	
<!--search-->
<?php
	
	if (isset($_POST['search'])) 
    {
	
		$_SESSION['is_search']=true;
		$product=$_POST['product_name'];
		$servername = "localhost";
		$username = "root";
		$password = "1234";
		$dbname = "store";
		if(!empty($product))
	    {
     		$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			} 
			else
			{	
				$sql = "SELECT product.title FROM product where title LIKE \"%$product%\"";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
				{
					$row = $result->fetch_assoc();
					//echo $row['title'];
					//echo "find";
					//Load search result page
					
					
					
				}
				else
				{
					//echo "Don't find";
					
				}
		
				
			}
			
			
	    }
		else
		{
			//fields are empty
			//echo "empty";
		}	
		
	}
	
	
	?>  

<html lang="en">
<head>
<title>hamed and amir(Home)</title>
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
<h3><span class="label label-default" style="position:relative; right:1070px;"><hnazanins style="color:#61c2ff">&nbsp;فروشگاه آنلاین حامد و امیر </hnazanins></span></h3>

<!--  style="font-family:'B Nazanin'" ----------------------------------------------------->
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
        <li class="active"><a href="#" class="glyphicon glyphicon-home"><hnazanins style="color:gray">&nbsp;&nbsp;خانه</hnazanins><span class="sr-only">(current)</span></a></li>
        <li><a href="register.php" class="glyphicon glyphicon-pencil"><hnazanins style="color:gray">&nbsp;&nbsp;ثبت نام</hnazanins></a></li>
		<li><a href="contact.php" class="glyphicon glyphicon-phone-alt"><hnazanins style="color:gray">&nbsp;&nbsp;تماس با ما</hnazanins></a></li>
		<li>
		
		<form method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>" class="navbar-form navbar-left" role="search">
		
		  <div class="form-group">
          <input type="text" name="product_name" class="form-control input-search" placeholder=" نام کالا و ..." >
          </div>
          <hnazanins style="color:gray"><input  type="submit" name="search" value="جستجو کن" type="button" class="btn btn-default"></hnazanins>
		
		
		
		<i class="fa fa-search"></i></a>
      </form>
	  

	  
	  
    <!--*************************************************************************************************-->
    <!--*************************************************************************************************-->
	<!--*************************************************************************************************-->
	<!--*************************************************************************************************-->
	<!--*************************************************************************************************-->
	
 
    <form method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>">
	
	  </li>
		<li class="dropdown" style="position: relative; right:250px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><hnazanins style="color:gray">&nbsp;&nbsp;ورود کاربر</hnazanins></b><span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu3" style="width:70px;">
			<li class="dropdown-header" style="position: relative; right:35px;">
			<hnazanins style="color:blue">نام كاربری</hnazanins>
			</li>
			<li>
			<input class="form-control"  name="username" value="" placeholder="Username" style="text-align: left; width: 85%; position: relative; right: 10px;" />
            </li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header" style="position: relative; right:35px;">
			<hnazanins style="color:blue">رمز عبور</hnazanins>
			</li>
			<li>
			<input class="form-control"  value="" name="pass" placeholder="Password" style="text-align: left; width: 85%; position: relative; right: 10px;" />
            </li>
			<li role="separator" class="divider"></li>
			<li>
			<div class="container">
			<!--&nbsp;	-->
			<hnazanins style="color:red"><input type="submit" name="submit" value="ورود" class="btn btn-primary" style="right:35px; position:relative; width:60px;"></hnazanins>	
			</div>
			</li>
		  </ul>
        </li>
	  </ul>
	  </form>
	<!--Login result-->  
	<?php
	if($GLOBALS['state']==1)
	{
	
	echo "رمز عبور اشتباه است";
	}
		else if($GLOBALS['state']==2)
		{
			
			echo "چنین کاربری وجود ندارد";
		}
		
		
		$servername = "localhost";
		$username = "root";
		$password = "1234";
		$dbname = "store";
     		$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			} 
			else
			{	
				$sql = "SELECT customer.pass,customer.first_name FROM customer where username=\"pp\"";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
				{
					
					$row = $result->fetch_assoc();
					
					//echo $row['pass'];
					
						
				}		
			}
	?>
	  
	  
      
	<!--*************************************************************************************************-->
    <!--*************************************************************************************************-->
	<!--*************************************************************************************************-->
	<!--*************************************************************************************************-->
	<!--*************************************************************************************************-->

	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--  cart --------------------------------------------------------------------------->
  <nav class="navbar navbar-default navbar-fixed-top" align="center" style="width:480px;">
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
    <!-- Collect the nav links, forms, and other content for toggling -->

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
		<li>
		<a class="glyphicon glyphicon-shopping-cart"><hnazanins>&nbsp;&nbsp;سبد خرید شما :</hnazanins></a>
		</li>
		<li>
		<a><hnazanins>تعداد </hnazanins><span class="badge">0</span>&nbsp;&nbsp;&nbsp;<hnazanins>قیمت </hnazanins><span class="badge">0</span></a>
		</li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><hnazanins style="color:gray">&nbsp;&nbsp;جزییات سبد خرید </hnazanins><span class="caret"></span></a>
          
		 
		  
		  
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu3" style="width:500px;">
			<li>
			<div class="panel panel-warning" style="position:relative; width:490px; right:5px;">
			<!-- Default panel contents -->
			<div class="panel-heading" align="center"><b><hnazanins style="color:green;">جزییات سبد خرید شما</hnazanins></b></div>
  <!-- Table -->
		<table class="table">
    <thead> 
      <tr>
        <th><hnazanins style="color:blue">کالا</hnazanins></th>
        <th><hnazanins style="color:blue">قیمت (ریال)</hnazanins></th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <!-- SABAAAAADE KHaaaaariiiid -->
	  <?php
	  echo "
        
      </tr>"
     ?>
    </tbody>
			</table>
			</div>
			</li>
			<li>
			<div class="container">
			<a href="" class="btn btn-primary" type="button" style="position:relative; right:200px; width:80px;"><hnazanins style="color:yellow">&nbsp;خرید</hnazanins></button></a>
			</div>
			</li>
		  </ul>
        </li>
	  </ul>
  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h3><span class="label label-default" style="position:relative; right:20px; font-size:20px;"><hnazanins style="color:red;">&nbsp;لیست محصولات</hnazanins></span></h3>

<!--------Prooooduuuucts-------->
 <?php
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "store";
     $conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{	if(!$_SESSION['is_search'])
		{
			$sql = "SELECT * FROM product";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{	
		
				while($row = $result->fetch_assoc()) 
				{
				$product_id[]=$row['product_id'];
				$title[]=$row['title'];
				$cost[]=$row['cost'];
				$description[]=$row['description'];
				
		    }
			$GLOBALS['pi']=$product_id;
			
			
			
		
			}	
		}
		else if($_SESSION['is_search'])
		{
			$product=$_POST['product_name'];
			$sql = "SELECT * FROM product where product.title LIKE \"%$product%\"";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{	
		
				while($row = $result->fetch_assoc()) 
				{
				$product_id[]=$row['product_id'];
				$title[]=$row['title'];
				$cost[]=$row['cost'];
				$description[]=$row['description'];
				
		    }
			$GLOBALS['pi']=$product_id;
			
			
			
		
			}	
		}		
	}

	$button_name=-1;
	//echo "<div class=\"row\" style=\"padding-top:10px; background-image:url(images/backthumb.jpg); background-attachment:fixed\">";
	if(isset($product_id))
	{
	foreach ($product_id as $key=>$value) 
	{
		$button_name++;
		if($key%3 == 2)
		{
		echo "<div class=\"row\" style=\"padding-top:5px; background-image:url(images/backthumb.jpg); background-attachment:fixed\">";
		}
		echo

		" 	<form method=\"post\" action=\"\" >
			<div class=\"col-sm-6 col-md-4\" style=\"position:relative; right:10px; padding-top:5px;\" >
			<div class=\"thumbnail\">
				<img src=\"images/tv.jpg\" alt=\"tv\" width=\"275\">
				<div class=\"caption\">
	  
	  
	  
					<h1 align=\"center\" style=\"font-size:40px;\"><hnazanins style=\"color:red;\">&nbsp;$title[$key]</hnazanins></h1>
					<p align=\"center\" ><hnazanins>قیمت: <span> $cost[$key] </span> ریال</hnazanins></p>
					<p><hnazanins>$description[$key]</hnazanins></p>
					<p align=\"center\">&emsp;&emsp;
					<hnazanins style=\"color:yellow;\"><input type=\"submit\" name=\"$button_name\" value=\"افزودن به سبد خرید\"  class=\"btn btn-primary\" role=\"button\">&nbsp;</hnazanins>
					</p>
				</div>
			</div>
        </div>
		</form>

   
    </div>";
	
	}
	}
	else
	{
	echo "<p align=\"center\"> <font size=\"18\" color=\"white\">چنین محصولی موجود نیست</font></p>";
	}
	
	
	$b=0;
	foreach($_POST as $key=>$p)
		{
			echo $key;
			$b=$key;
			
		}
	$GLOBALS['b']=$b;
	if(!isset($_SESSION['cart']))
	{
	
	$_SESSION['cart']=array();
	}
	
	
	if (isset($_POST[$b]) && $_POST[$b]!="ورود"  && $_POST[$b]!="جستجو کن")
	
	{	
		echo "<script>
		confirm(\"برای استفاده از امکانات سایت باید وارد شوید\");
		</script>";
	
		
	}
		
  ?>
</body>
</html>




