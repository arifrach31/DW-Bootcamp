<!DOCTYPE html>
<html>
<head>
	<title>Test Dumbways.id #1 Function JS</title>
</head>
<body>
 	<h1>Test Dumbways.id #1 Function JS</h1>
	<p>1. Tuliskan sebuah method untuk me-return biodata Anda, seperti nama, alamat, hobi, skills dsb. Gunakan bahasa apapun yang Anda kuasai!</p>
	<div id="biodata"></div>
 
	<script>		
		function biodata(nama, alamat, hobi, skills, umur){
			var bio = "Nama: "+nama+'<br> Alamat: '+alamat+'<br> Hobi: '+hobi+'<br> Skills: '+skills+'<br> Umur: '+umur;
			return bio;
		}
		
		document.getElementById("biodata").innerHTML = biodata('Arif', 'Jakarta', 'Ngoding','Frontend',22);
		
	</script>
</body>
</html>