<?php
	if (isset($_POST['buy']))
	{
		
		header("Refresh:0");
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

	  
  <!-- Table -->
		<table class="table">
    <thead> 
      <tr>
        <th><hnazanins style="color:blue">کالا</hnazanins></th>
        <th><hnazanins style="color:blue">تعداد</hnazanins></th>
        <th><hnazanins style="color:blue">قیمت (ریال)</hnazanins></th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <!-- SABAAAAADE KHaaaaariiiid -->
	  <?php
	  $GLOBALS['i']=0;
	  for ($x = 0; $x <= 10; $x++) {
	  echo "
        <td><hnazanins>$x</hnazanins></td>
        <td><hnazanins>5</hnazanins></td>
        <td><hnazanins>20000</hnazanins></td>
      </tr>";
	  }
     ?>
    </tbody>
			</table>
			</div>
			</li>
			<li>
			<div class="container">
			 <form method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>">
			<hnazanins style="color:yellow"><input  type="submit" name="buy" value="خرید" class="btn btn-primary" type="button" style="position:relative; right:200px; width:80px;"></hnazanins>
			 </form>
			</div>
			</li>
		  </ul>
        </li>
	  </ul>
	  
	  
	  
	  
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
	{	
		$sql = "SELECT * FROM product";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{	
		$_SESSION['i']=0;
			$p0=0+$_SESSION['i'];
			$p1=1+$_SESSION['i'];
			$p2=2+$_SESSION['i'];
			$p3=3+$_SESSION['i'];
			$p4=4+$_SESSION['i'];
			$p5=5+$_SESSION['i'];
			
			
			while($row = $result->fetch_assoc()) 
		    {
			$product_id[]=$row['product_id'];
			$title[]=$row['title'];
			$cost[]=$row['cost'];
			$description[]=$row['description'];
				
		    }
		
			
		}		
	}



	
    

	$button_name=-1;
	//echo "<div class=\"row\" style=\"padding-top:10px; background-image:url(images/backthumb.jpg); background-attachment:fixed\">";
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
	
	$j=0;
	$b=0;
	foreach($_POST as $key=>$p)
		{
			echo $key;
			if ($key==$j)
			{
			$b=$key;	
			break;
			}
			else 
			{
			$j++;
			}
		}
		
	if (isset($_POST[$b]))
	
	{
			//echo "$button_name";
	}
		
	
  ?>
</div>

</div>
</form>


