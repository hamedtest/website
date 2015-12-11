<!DOCTYPE html>
<html lang="en">
<head>
<title>Manage Panel</title>
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
<h3><span class="label label-default" style="position:relative; right:1150px;"><hnazanins style="color:#61c2ff">&nbsp;فروشگاه آنلاین حامد و امیر </hnazanins></span></h3>
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
        <li><a href="login.php" class="glyphicon glyphicon-home"><hnazanins style="color:gray">&nbsp;&nbsp;خانه</hnazanins><span class="sr-only">(current)</span></a></li>
        <li><a href="register.php" class="glyphicon glyphicon-pencil"><hnazanins style="color:gray">&nbsp;&nbsp;ثبت نام</hnazanins></a></li>
	
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



<form method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>">
<div class="panel panel-success" style="position:relative; right:10px; top:20px; width:1250px; height:480px;">
  <!-- Default panel contents -->
  <div class="panel-heading" align="center"><b><hnazanins style="color:blue;">پنل مدیریت</hnazanins></b></div>
  
  
 

   <div class="panel-body">
     <p><hnazanins style="color:green;"></hnazanins></p>
 	<div class="row" style="position:relative; top:60px; right:20px;">
     <div class="col-lg-6" style="width:300px;">
     <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">نام کالا</hnazanins></b></span>
   <input type="text" name="title" class="form-control" style="text-align:right;" placeholder="کالا" aria-describedby="basic-addon1">
     </div><!-- /input-group -->
   </div><!-- /.col-lg-6 -->
   <div class="col-lg-6" style="width:250px;">
     <div class="input-group">
       <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">قیمت (ریال)</hnazanins></b></span>
   <input type="text" name="cost" class="form-control" style="text-align:left;" placeholder="" aria-describedby="basic-addon1">
     </div><!-- /input-group -->
   </div><!-- /.col-lg-6 -->
   <div class="col-lg-6" style="width:650px;">
     <div class="input-group">
       <span class="input-group-addon" id="basic-addon1"><b><hnazanins style="color:blue;">توضیحات</hnazanins></b></span>
   <input type="text" name="description" class="form-control" style="text-align:right;" placeholder="" aria-describedby="basic-addon1">
     </div><!-- /input-group -->
   </div>
 </div>	
   </div>

  
  
  
  
  <!--
	<div class="panel-footer">
	<b><hnazanins style="color:red;">تعداد کل :&nbsp;&nbsp;&nbsp;</hnazanins></b><span class="badge">3</span>
	<br><br><b><hnazanins style="color:red;">قیمت کل : &nbsp;&nbsp;&nbsp;</hnazanins></b><span class="badge">20000</span>&nbsp;&nbsp;<b><hnazanins style="color:red;">ریال</hnazanins></b>
	</div>
	-->
	<div class="container">
	<hnazanins style="color:red"><input type="submit" name="add" value="اضافه کن"  class="btn btn-info" style="width:100px; position:relative; right:1000px; top:100px;"></hnazanins>
	</div>
</div>
</form>

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
		$title=$_POST['title'];
		$cost=$_POST['cost'];
		$description=$_POST['description'];
	
		if (isset($_POST['add']))
		{
		
			if(!empty($title) && !empty($cost))
			{
				$sql = "INSERT INTO product (title,cost,description)
				VALUES ('$title','$cost','$description')";
				if ($conn->query($sql) === TRUE) 
				{
					echo "New item added successfully<br>";
					$conn->close();
				} 
			}
			else
			{
			echo "empty";
			}
		}
	


?>




</body>
</html>