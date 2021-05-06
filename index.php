<?php 
// John Longworth December 2016 
$db = mysqli_connect('localhost', 'root', '', 'school_portal');


if(isset($_GET['last'])){
	$id = $_GET['last'];
	$sql="SELECT * FROM students Where id=$id";//WE ARE TRYING TO GET THE NAME OF THE STUDENT BY ENTERING THE RANK
$result=mysqli_query($db,$sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {    
    	
      echo  $row["phone"];

}
}

}
 /*if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])){
	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];
	$number3 = $_GET['number3'];

	mysqli_query($db, "INSERT INTO users (number1,number2,number3) VALUES('$number1','$number2','$number3')");
	$_SESSION['message'] = "Info Saved!"; 
	//header('location: setup.php');

}*/
 ?>