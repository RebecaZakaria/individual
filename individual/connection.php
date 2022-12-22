<?php
$conn=mysqli_connect("localhost","root","","housekeeping");
if(!$conn){
	die("fail".mysqli_connect_error());
	}
	if(isset($_POST['send']))
	{

		$name=$_POST['name'];
		$email=$_POST['email'];
		$reg_date=$_POST['reg_date'];
		$contact=$_POST['contact'];
		$comment=$_POST['comment'];
		$sql_insert="	INSERT INTO housekeepertable VALUES ('','$name','$email','$reg_date','$contact','$comment')";

		$sql_check=mysqli_query($conn,$sql_insert);
		if($sql_check){
			echo"<script>
				alert('data sent successfully')
				window.location='homek.php'
			</script>";
		}
		else
		{
				echo"<script>
				alert('error try again')
				window.location='homek.php'
			</script>";
		}
	}
?>



