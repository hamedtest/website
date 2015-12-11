<?php
session_start();
?>
<?php

	if (isset($_POST['exit'])) 
	{
		
		session_destroy(); 
		header("Location: index.php");
	}
	

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>bill</title>
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
        <li><a href="register.php" class="glyphicon glyphicon-pencil"><hnazanins style="color:gray">&nbsp;&nbsp;ثبت نام</hnazanins></a></li>
		<li><a href="contact.php" class="glyphicon glyphicon-phone-alt"><hnazanins style="color:gray">&nbsp;&nbsp;تماس با ما</hnazanins></a></li>
		<li><form class="navbar-form navbar-left" role="search">
		<div class="form-group">
          <input type="text" class="form-control input-search" placeholder=" نام کالا و ..." >
        </div>
        <a href="#" type="button" class="btn btn-default"><hnazanins style="color:gray">&nbsp;جستجو کن</hnazanins>
		<i class="fa fa-search"></i></a>
      </form></li>
		<li class="dropdown" style="position: relative; right:250px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><hnazanins style="color:gray">&nbsp;&nbsp;ورود کاربر</hnazanins></b><span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu3" style="width:70px;">
			<li class="dropdown-header" style="position: relative; right:35px;">
			<hnazanins style="color:blue">نام كاربری</hnazanins>
			</li>
			<li>
			<input class="form-control" id="" value="" placeholder="Username" style="text-align: left; width: 85%; position: relative; right: 10px;" />
            </li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header" style="position: relative; right:35px;">
			<hnazanins style="color:blue">رمز عبور</hnazanins>
			</li>
			<li>
			<input class="form-control" id="" value="" placeholder="Password" style="text-align: left; width: 85%; position: relative; right: 10px;" />
            </li>
			<li role="separator" class="divider"></li>
			<li>
			<div class="container">
			<a href="#" type="button" class="btn btn-primary" style="right:35px; position:relative; width:60px;"><hnazanins style="color:yellow">&nbsp;ورود</hnazanins></a>			
			</div>
			</li>
		  </ul>
        </li>
	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="panel panel-info" style="position:relative; right:35px; top:20px; width:1190px; height:800px;">
  <!-- Default panel contents -->
  <div class="panel-heading" align="center"><b><hnazanins style="color:blue;">فاکتور نهایی</hnazanins></b></div>
  <div class="panel-body">
    <p><hnazanins style="color:green;"></hnazanins></p>
	<table class="table">
    <thead> 
      <tr>
        <th><hnazanins style="color:blue">کالا</hnazanins></th>
        <th><hnazanins style="color:blue">تعداد</hnazanins></th>
        <th><hnazanins style="color:blue">قیمت (ریال)</hnazanins></th>
      </tr>
    </thead>
    <tbody>
      
 <?php
 
  foreach($_SESSION['cart'] as $value)
			{
			//echo "I am good $value <br>";
			
			$title=$_SESSION['t'];
			$cost=$_SESSION['c'];
			
			
	  echo "
        
		
		 <td><hnazanins>$title[$value]</hnazanins></td>
        <td><hnazanins>$cost[$value]</hnazanins></td>
		</tr>
		";
		
	  }
 ?>
	  
	 
    </tbody>
		</table>	
  </div>
	<div class="panel-footer">
	<?php
	$number=$_SESSION['number'];
	$total_cost=$_SESSION['total_cost'];
	echo "<b><hnazanins style=\"color:red;\">تعداد کل :&nbsp;&nbsp;&nbsp;</hnazanins></b><span class=\"badge\">$number</span>
		<br><br><b><hnazanins style=\"color:red;\">قیمت کل : &nbsp;&nbsp;&nbsp;</hnazanins></b><span class=\"badge\">$total_cost</span>&nbsp;&nbsp;<b><hnazanins style=\"color:red;\">ریال</hnazanins></b>";
	?>
	</div>
	<div class="container">
	<a href="sh.php" type="button" class="btn btn-primary" style="width:100px; position:relative; right:1050px; top:200px;"><b><hnazanins style="color:yellow">پرداخت</hnazanins></b></a>
	 <form method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>">
	<hnazanins style="color:yellow"><input type="submit" name="exit" value="خروج" style="padding-top:10px;" class="btn btn-primary" style="width:100px; position:relative; right:1050px; top:200px;"></hnazanins>
	</form>
	</div>
</div>





</body>
</html>