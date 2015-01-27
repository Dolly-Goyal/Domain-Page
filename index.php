<?php 

//connect to the server
$connect = mysql_connect("localhost","....","....");

//connect to the database
mysql_select_db("amoutinfo");

//query the database
$query = mysql_query("SELECT * FROM amountdata");

//fetch the results / convert results into an array

WHILE($rows = mysql_fetch_array($query)):

$month = $rows['month'];
$amount = $rows['amount'];
$total = $rows['total'];
endwhile;

echo "$month $amount $total";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hosting your website</title>
<link rel="stylesheet" type="text/css" href="css/table.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="main">
<div id="wrapper">
<div align="center"> <h1 class="h1">Welcome For <b>Hosting</b> your website</h1></div>


<div id="pannel">
		<div class="title">
			<h2>Our Hosting Packages</h2>
		</div>
		<div id="box_body">
		<div id="box_body_left">
		<div class="boxA">
				<div class="box"> <span> Orbit </span>
					<div>Host a single website</div>
					<div style="color:#930093">As you know</div> 
					<h1> Rs. 149.00/month</h1>
					
					<div class="table">
					<table>
					<tr>
					<td colspan="3">12 months</td>
					<td>Rs. 149/month</td>
					<td><img src="img/droparrow.png" /></td>
					</tr>
					</table>
					</div>
					
					<br />
					<br />
					<div><center><hr /> 5GB Storage</center><hr /></div>
					<br />
					<br />
					<br />
				</div>
			</div>
			<div class="boxB">
				<div class="box"> <span>Solar</span>
					<div>Host a single website </div>
					<div style="color:#930093">As you know</div>
					<h1> Rs. 299.00/month</h1>
					<div class="table">
					<table>
					<tr>
					<td colspan="3">12 months</td>
					<td>Rs. 299/month</td>
					<td><img src="img/droparrow.png" /></td>
					</tr>
					</table>
					</div>
					<br />
					<br />
					<div><center><hr /> 10GB Storage</center><hr /></div>
					<br />
					<br />
					<br />
				</div>
			</div>
			<div class="boxC">
				<div class="box"> <span>Galaxy</span>
					 <div>Host a single website </div>
					 <div style="color:#930093">As you know</div>
					 <h1> Rs. 449.00/month</h1>
					 <div class="table">
					<table>
					<tr>
					<td colspan="3">12 months</td>
					<td>Rs. 449/month</td>
					<td><img src="img/droparrow.png" /></td>
					</tr>
					</table>
					</div>
					<br />
					<br />
					<div><center><hr /> 100GB Storage</center><hr /></div>
					<br />
					<br />
					<br />
				</div>
			</div>
			<div class="boxD">
				<div class="box"> <span> Universe </span>
				<div>Host a single website</div>
				<div style="color:#930093">As you know</div>
				<h1> Rs. 559.00/month</h1>
				<div class="table">
					<table>
					<tr>
					<td colspan="3">12 months</td>
					<td>Rs. 559/month</td>
					<td><img src="img/droparrow.png" /></td>
					</tr>
					</table>
				</div>
					<br />
					<br />
				<div><center><hr /> Unlimited Storage</center><hr /></div>
				<br />
				<br />
				<br />
			</div>
			</div>
		</div>
		<!--	<div id="box_body_right"> -->
			<div id="news">
				<h1>Today News</h1>
				<a href="">Today what we want to new update</a>
				<br />
				<br />
				<a href="">Our Latest Packages for you</a>
				<br />
				<br />
				<a href="">Best bumper offer</a>
				<br />
				<br />
				<a href="">Best bumper offer</a>
				<br />
				<br />
				<a href="">Best bumper offer</a>
				<br />
				<br />
				<a href="">Best bumper offer</a>
				<br />
				<br />
				<a href="">Best bumper offer</a>
				<br />
				<br />
			</div>

		<!--	</div> -->
		</div>			
</div>		
</div>
</div>
</div>
</body>
</html>
