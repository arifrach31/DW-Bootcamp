<!DOCTYPE html>
<html>
<head>
	<title>Belajar Javascript Part 6 : Membuat Function di Javascript</title>
</head>
<body>
 	<h1>Test Dumbways.id</h1>
	<p>1. Tuliskan sebuah method untuk me-return biodata Anda, seperti nama, alamat, hobi, skills dsb. Gunakan bahasa apapun yang Anda kuasai!</p>
	<div id="hasil"></div>
 
	<script>		
		// membuat function tampilkan_nama
		function biodata(nama, alamat, hobi, skills, umur){
			var bio = "Nama: "+nama+'<br> Alamat: '+alamat+'<br> Hobi: '+hobi+'<br> Skills: '+skills+'<br> Umur: '+umur;
			return bio;
		}
		
		document.getElementById("hasil").innerHTML = biodata('Arif', 'Jakarta', 'Ngoding','Frontend',22);
		
	</script>
</body>
</html>