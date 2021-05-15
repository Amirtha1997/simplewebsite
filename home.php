<?php

session_start();

?>

<html>
<head>
<title> home page</title>
<link rel="stylesheet"type="text/css"href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
 <div class="container">

<a class="log-right"href="logout.php">logout</a>

<h1>WELCOME <?php echo $_SESSION['username'];?></h1>

</div>
</body>
</html>
