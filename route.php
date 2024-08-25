
<html>
<head>
	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<style>
	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body {
		background: #ff3527;
	}
	.clearfix {
		position: relative;
		left: 30%;
		top: 10%;
	}
	.btn-box1, .btn-box2 {
		position: relative;
		background: #fff;
		padding:10px;
		height: 30px;
		width: 90px;
		cursor: pointer;
		border-radius: 10px;
	}
	.btn-box1 .btn, .btn-box2 .btn {
		height: 40px;
		color: #111;
		text-decoration: none;
		
	}
	.btn-box2 .btn {
		margin-left: 20px;
	}
	.btn-box2 {
		position absolute;
		left: 10%;
		top: -30px;
	}

	#resultTable {
		border-collapse: collapse;
		background: #fff;
		margin: 10px;
	}
	table th, table td {
		padding: 10px;
	}
</style>
<body>
	
				<div id="content" class="clearfix">
					<div class="btn-box1">
					<a href="addroute.php" class="btn">Add Route</a>
					</div>
					
					<div class="btn-box2">
						<a href="admin.php" class="btn">Back</a>
					</div>
					
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Bus Type </th>
								<th> Route </th>
								<th> Seat Number </th>
								<th> Price </th>
								<th> Time </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysqli_query($conn,"SELECT * FROM route");
							while($row = mysqli_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['type'].'</td>';
									echo '<td><div align="right">'.$row['route'].'</div></td>';
									echo '<td><div align="right">'.$row['numseats'].'</div></td>';
									echo '<td><div align="right">'.$row['price'].'</div></td>';
									echo '<td><div align="right">'.$row['time'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editrutedetails.php?id='.$row['id'].'">edit</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteroute.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>