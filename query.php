<!DOCTYPE html>
<html>
<head>
	<title>Query SQL Foreign kEY</title>
</head>
<style type="text/css">
	p {
		width: 300px;
	}
</style>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "blog";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT posts.title, users.username, comments.comment FROM posts INNER JOIN users ON posts.id = users.id JOIN comments ON comments.postID = posts.id";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$title = $row["title"];
		    	$username = $row["username"];
		    	$comment = $row["comment"];
		        echo "Title Post: " . $title. "<br>
		        	 Komentar: " . $row["comment"]. "<br>
		        	 Dibuat Oleh: " . $username. "<br><br>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	?>

	<table collapse border=1>
		<thead>
			<th>No.</th>
			<th>Query</th>
			<th>Keterangan</th>
		</thead>
		<tbody>
			<tr>
				<td>1.</td>
				<td>create database blog;</td>
				<td>Membuat Database</td>
			</tr>
			<tr>
				<td>2.</td>
				<td>
					<p>create table users( 
						id int(5), 
						username varchar(25),
						PRIMARY KEY (id)
					);</p>
					<p>create table posts(
						id int(5), 
						title varchar(255),
						content varchar(255),
						createdBy datetime,
						PRIMARY KEY (id)
					);</p>
					<p>create table comments(
						id int, 
						comment varchar(25),
						postId int(5),
						PRIMARY KEY (id)
					);</p>
				</td>
				<td>Membuat Tabel</td>
			</tr>
			<tr>
				<td>3.</td>
				<td>
					<p>ALTER TABLE posts 
					ADD CONSTRAINT fk_posts 
					FOREIGN KEY (id) REFERENCES users(id)</p>
					<p>ALTER TABLE comments 
					ADD CONSTRAINT fk_comments 
					FOREIGN KEY (postId) REFERENCES posts(id);</p>
				</td>
				<td>Foreign Key Table</td>
			</tr>
			<tr>
				<td>4.</td>
				<td>
					<p>INSERT INTO users (id, username) VALUES 	
					(1, 'Dumbways.id'),
					(2, 'Arif Rachman'),
					(3, 'Hesa Suryana');</p>

					<p>INSERT INTO posts (id, title, content, createdBy) VALUES 
						(3, 'wanita itu diserang kadal saat mengunjungi kebun binatang', 'wanita itu diserang kadal saat mengunjungi kebun binatang ragunan', NULL),
						(2, 'pria ', 'pria itu ikut bootcamp di Dumbways', NULL),
						(1, 'Bootcamp  ', 'Bootcamp No. 1 Terbaik &amp; Termurah', NULL);</p>

					<p>INSERT INTO comments (id, comment, postId) VALUES 
						(1, 'ah masa', 3), 
						(2, 'serius?', 3),
						(3, 'bonbin mana?', 3);</p>
				</td>
				<td>Menambahkan Records</td>
			</tr>
			<tr>
				<td>5.</td>
				<td>
					<p>select posts.title, users.username, 
					comments.comment from posts 
					inner join users on posts.id = users.id 
					join comments on comments.postID = posts.id</p>
				</td>
				<td>Fetching Data</td>
			</tr>
		</tbody>
	</table>
</body>
</html>