<?php require_once('Backend/taxisession.php'); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Taxi Reservation</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
		<style>
		/* reset */

*
{
	border: 2;
	box-sizing: content-box;
	color: 090016;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h2 { font: bold 100% ; color:1A003C; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #787CB5; border-color: #05000B; }
td { background: #C1DCFF; border-color: #05000B; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h2 { background: #1E0046; border-radius: 0.5em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; font:monospace; }
header address { float: left; font-size: 50%; font-style:italic; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h2 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; font-style:oblique; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.taxitable { clear: both; width: 100%; }
table.taxitable th { font-weight: bold; text-align: center; }

table.taxitable td:nth-child(1) { width: 26%; }
table.taxitable td:nth-child(2) { width: 38%; }
table.taxitable td:nth-child(3) { text-align: right; width: 12%; }
table.taxitable td:nth-child(4) { text-align: right; width: 12%; }
table.taxitable td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h2 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h2 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{

	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
		
	</head>
	<body>
	<img src="assets/img/logo/logo-img.png" alt=""></a>
	
	
	
	


	<?php
	ob_start();	
	/*database connection*/
	include ('Backend/dbconnection.php');
	
	$user_id = $_GET['user_id'];
	
	/*getting taxi reservation information*/
	$sql = "SELECT * FROM taxicustomer WHERE user_id='$user_id'";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result))
	{
		
		$user_id = $row['user_id'];
        $uname = $row['username'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $tel_number = $row['tel_number'];
        $date = $row['date'];
        $time = $row['time'];
        $location = $row['location'];
        $taxi_fee = $row['taxi_fee'];
        $vehicle_type = $row['vehicle_type'];
		
	}
	
		
	
	?>
		<header>
        
			<h2>Taxi Reservation</h2>
			
		</header>
		
        <address >
				<p>GREEN VIEW HOLIDAY RESORT,</p>
				<p>221/3,Ranala Road,Hoabarakada,<br>Homagama,<br>Sri Lanka.</p>
				<p>(+94) 78 893 38 67</p>
			</address>
            
		
		<article>
			
			<address >
				<p><?php echo $full_name ?> <br></p>
			</address>
			<table class="meta">
			<tr>
					<th><span >Reservation ID </span></th>
					<td><span ><?php echo $user_id; ?></span></td>
				</tr>
				<tr>
					<th><span >Username</span></th>
					<td><span ><?php echo $uname; ?> </span></td>
				</tr>
				<tr>
					<th><span >Contact Number</span></th>
					<td><span ><?php echo $tel_number; ?> </span></td>
				</tr>
				<tr>
					<th><span >Email</span></th>
					<td><span ><?php echo $email; ?> </span></td>
				</tr>
				
			</table>
			<span> <center><img alt="" src="assets/img/taxi/taxipng.png"></center></span>
			<table class="taxitable">
				<thead>
					<tr>
						<th><span >Vehicle type</span></th>
						<th><span >Location</span></th>
						<th><span >Date</span></th>
						<th><span >Time</span></th>
						<th><span >Taxi Fee</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $vehicle_type; ?></span></td>
						<td><span ><?php echo $location; ?> </span></td>
                        <td><span ><?php echo $date; ?> </span></td>
						<td><span ><?php echo $time;?> </span></td>
						<td><span >LKR <?php echo $taxi_fee; ?> </span></td>
					</tr>
					
				</tbody>
			</table>
			
			
		</article>
		<aside>
			<h2><span >Contact Taxi Manager</span></h2>
			<div >
				<p align="center">Email:-TaxiManager@greenviewholiday.com </p> 
				<p align="center"> Facebook:-Green View Holiday </p> 
				<p align="center">Phone:- +94 77 906 69 33 </p>
			</div>
		</aside>
		
	</body>
</html>

<?php 

ob_end_flush();

?>
<?php mysqli_close($db); ?>