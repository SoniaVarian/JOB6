<?php session_start();?>
<html>
<head>
<title>Contoh Pemakaian Session</title>
</head>
<body>
<?php
			if($_SESSION['counter']==""){$_SESSION['counter']=0;}
			$_SESSION['counter']++;
			echo"<h1>Halaman Ini dipanggil
			".$_SESSION['counter']."kali<h/1>";
?>
</body>
</html>