<!DOCTYPE html>
<html>
<head>
	<title>Layout Soal No 2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style type="text/css">
	.jumbotron {
		margin: 0!important;
	}
	footer {
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 50px;
		line-height: 50px;
		background-color: #f5f5f5;
	}
</style>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Tugas Layout Sederhana</h1>
			<p>Support By Dumbways.id</p>
		</div>
	
		<ul class='nav justify-content-center'>
			<li class='nav-item'><a class='nav-link' href="index.php">Function</a></li>
			<li class='nav-item'><a class='nav-link' href="layout.php">Layout</a></li>
			<li class='nav-item'><a class='nav-link' href="query.php">SQL</a></li>
			<li class='nav-item'><a class='nav-link' href="bootstrap.php">Bootstrap</a></li>
			<li class='nav-item'><a class='nav-link' href="bonus.php">Bonus</a></li>
		</ul>
	
		<table class='table'>
			<thead>
				<th>Title Post</th>
				<th>Username</th>
				<th>Comment</th>
			</thead>
			<tbody>
				<tr>
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "blog";

					$conn = new mysqli($servername, $username, $password, $dbname);

					$sql = "SELECT posts.title, users.username, comments.comment FROM posts INNER JOIN users ON posts.id = users.id JOIN comments ON comments.postID = posts.id";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					    	$title = $row["title"];
					    	$username = $row["username"];
					    	$comment = $row["comment"];
					        echo '<td>'.$title.'</td>
					        	  <td>'.$username.'</td>
					        	  <td>'.$comment.'</td></tr>';
					    }
					} else {
					    echo "0 results";
					}
					$conn->close();
				?>
			</tbody>
		</table>
	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">Place sticky footer content here.</span>
		</div>
	</footer>

</body>
</html>