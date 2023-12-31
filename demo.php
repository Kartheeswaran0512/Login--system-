<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="form";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['kar']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];

	 $sql_query = "INSERT INTO sign (first_name,last_name)
	 VALUES ('$first_name','$last_name')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New students Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 /*$query="select *from register where email="siva@gmail.com";
	 $res=$mysqli_query($query);
	 if($res){
	 	if(mysqli_num_rows($res)>0){
	 		echo"found";
	 	}
	 	else{
	 		echo"not found";
	 	}
	 }*/
	 mysqli_close($conn);
}
?>