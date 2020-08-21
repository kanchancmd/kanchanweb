<?php
   
   date_default_timezone_set("Asia/Calcutta");
    $date = date("Y-m-d"); //Today date 
    $birth=substr("$date",5);

	//echo $birth;
	$con=mysqli_connect("localhost","root","","sacred");
	$result = mysqli_query($con,"SELECT * FROM student where birthdate2='".$birth."';");//Select the birthday list
      
	
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
        <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
		
        <thead>
            <tr>
			
			    <th>User Id.</th>
			    <th>Class</th>
                <th>Image</th>
                <th>Section</th>
                <th>Name</th>
            </tr>
        </thead> 
		
        <tbody>
		<form method="post" action="send-wish.php">
    <?php
   // $i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
    
            <tr>
			 
                <td><?php echo $row["sid"]; ?></td>
				<td><?php echo $row["class"]; ?></td>
				<td><img src="<?php echo 'image/'.$row['image']  ?>" height="100px" width="100px"></td>
				<td><?php echo $row["section"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
            </tr>
		 
    <?php 
     //$i++;
    }
    ?>	
		
        </tbody>
    </table>
	
	<p align="center"><button type="submit" class="btn btn-success" name="save">Send Birthday Wishes </button></P>
	</form>
<script>
$("#checkAll").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</body>
</html>