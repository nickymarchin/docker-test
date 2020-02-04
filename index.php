<html>
<head>
	<title>Docker?</title>
	
	<script>
		function myFunction1() {
			var x = document.getElementById("myDIV1");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
		
		function myFunction2() {
			var x = document.getElementById("myDIV2");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
	</script>
</head>

<body>
	<button onclick="myFunction1()">Arsenal</button>
	<div id="myDIV1" style="display:none;">
	  Hi!
	</div>
	
	<button onclick="myFunction2()">Arteta</button>
	<div id="myDIV2" style="display:none;">
	  Number one
	</div>
</body>
</html>

<?php

$host = 'db'; //this is the service name
$user = 'devuser';
$password = 'devpass';

$db = 'test_db';

$connection = new mysqli($host, $user, $password, $db);

if($connection->connect_error){
	echo 'Connection failed!' . $connection->connect_error;
} else {
	
	$sql = "SELECT name FROM users";
	
	if($result = mysqli_query($connection, $sql)){
		
		echo "<ol>";
		while($row = mysqli_fetch_row($result)){
				echo "<li>" . $row[0] . "</li>";
		}
		echo "</ol>";
		
		mysqli_free_result($result);
	}
	
}

mysqli_close($connection);

?>
