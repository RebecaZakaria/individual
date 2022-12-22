<?php
$conn=mysqli_connect("localhost","root","","housekeeping");
if(!$conn){
	die("fail".mysqli_connect_error());
	}

$sql = "SELECT id, name,email,reg_date,contact,comment FROM housekeepertable";
$result = mysqli_query($conn, $sql);


    	?>
    	 <!DOCTYPE html>
        <html>
        <head>
        	<title>fetch data</title>
        
        </head>
        <body>
        <table border="1">
        	<tr> <h1>house keeper records</h1></tr>
        	<tr>
        		    <th>id</th>
        			<th>name</th>
        			<th>email</th>
        			<th>reg_date</th>
        			<th>contact</th>
        			<th>comment</th>
        			
        	</tr>
        	<?php
        	if (mysqli_num_rows($result) > 0) {
    // output data of each row
  
          while($row = mysqli_fetch_assoc($result)) {
       
          	echo"<tr><td>". $row["id"]."</td>
          	         <td>". $row["name"]. "</td>
          	         <td>". $row["email"]. "</td>
          	         <td>". $row["reg_date"]."</td>
          	         <td>". $row["contact"]."</td>
          	         <td>". $row["comment"]."</td>
          	     </tr>";
        
         }

   
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>
      
   