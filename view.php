<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CUSTOMER_ID</title>
        <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\myprog\demo\splitting.css">
        <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\myprog\demo\view.css">
    </head>
    <br>
    <br>


        <body>
        	<div class="type" data-splitting>THANK YOU FOR REGISTERING!!!<br><br>___YOUR ID IS___</div>

		<?php
		include 'C:\xampp\htdocs\myprog\demo\config.php';
		
	$cust_name = $_POST['cust_name'];
	$cust_phone = $_POST['cust_phone'];
	$password = $_POST['password'];

    $sql = "INSERT INTO cust (cust_name,cust_phone,password) VALUES ('$cust_name','$cust_phone','$password')";

    $result = $conn->query($sql);

    if($result == TRUE) { ?>
	<script> alert("New record created succesfully") </script>
    <?php 
	}
    else {
	echo "Error:" . $sql . "<br>" .$conn->error;
	}
	
	
		$sql2 = "SELECT * FROM cust ";
		$result2 = $conn->query($sql2);
		
		while($rows = mysqli_fetch_array($result2))
        {
         $id = $rows['cust_id'];
		 $cust_nameid = $rows['cust_name'];
	     $cust_phoneid = $rows['cust_phone'];
	     $passwordid = $rows['password'];
        }
		?>
		<p><?php echo $id; ?></p> <br>
		<p><?php echo $cust_nameid; ?></p> <br>
		<p><?php echo $cust_phoneid; ?></p> <br>
		<p><?php echo $passwordid; ?></p>
		<script src="C:\xampp\htdocs\myprog\demo\splitting.js"></script>
		<script> Splitting(); </script>
</body>