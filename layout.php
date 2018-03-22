<!DOCTYPE html>
<html>
<head>
	<title>Layout Soal No 2</title>
	<style type="text/css">
		body {
			background: #DDD;
			margin: 0;
			padding: 0;
		}
		#container {
			margin: 0 auto;
			padding: 0;
			width: 960px;
			background: #fff
		}
		header {
			padding: 10px 20px;
			background: #00A1DD;
			text-align: center;
			color: #fff;
			text-transform: uppercase;
			margin: 0;
		}
		nav {
			background: #00dda2
		}
		nav ul{
			display:flex;
			margin: 0;
		}
		nav li {
			list-style: none;
			padding: 10px 10px;
		}
		nav a {
			text-decoration: none;
			color:#2a2a2a;
		}
		nav a:hover {
			color: #fff;
		}
		article {
			padding: 20px 20px;
		}
		article table {
			font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		    font-size:15px;
		}
		td, th {
		    border: 1px solid #dddddd;
		    text-align: center;
		    padding: 8px;
		}
		footer {
			padding: 2px 20px;
			background: #2a2a2a;
			color: white;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="container">
		<header>
			<h1>Tugas Layout Sederhana Dumbways.id</h1>
		</header>
		<nav>
			<ul>
				<li><a href="">Function</a></li>
				<li><a href="">Layout</a></li>
				<li><a href="">SQL</a></li>
				<li><a href="">Bootstrap</a></li>
				<li><a href="">Bonus</a></li>
			</ul>
		</nav>
		<article>
			<table>
				<thead>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Telpon</th>
					<th>Alamat</th>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Arif Rachman</td>
						<td>+6282111113184</td>
						<td>Jalan Raya Penggilingan, Kampung Pedaengan RT 12 RW 08 No 94 Cakung Jakarta Timur</td>
					</tr>
				</tbody>
			</table>
		</article>
		<footer>
			<p>Copyright &copy; 2018 Arif Rachman</p>
		</footer>
	</div>
</body>
</html>