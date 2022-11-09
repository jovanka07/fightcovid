<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		*{
			margin: 0;
		}
		header{
			width: 100%;
			padding: 20px;
			box-sizing: border-box;
			background-color: #fff;
			box-shadow: 0 0px 2px #333;
			display: flex;
			justify-content: space-around;
			position: fixed;
			z-index: 10;
		}
		.judul h3{
			font-size: 23px;
			color: red;
		}
		.judul h3 span{
			padding: 10px;
			box-sizing: border-box;
			background-color: #333;
			color: #fff;
			border-bottom-left-radius: 30px;
			border-top-right-radius: 10px;
		}
		.nav{
			margin: 5px 0 0 0;
		}
		.nav a{
			margin: 0 0 0 10px;
			font-size: 18px;
			text-decoration: none;
			color: #333;
			transition: 0.8s;
		}
		.nav a:hover{
			padding: 10px;
			background-color: #333;
			color: #fff;
			border-radius: 30px;
		}

		.img-top{
			position: absolute;
			position: fixed;
			margin: 570px 0 0 1250px ;
			background-color: white;
			box-shadow: 3px 3px 5px #202356;
			border-bottom-left-radius: 30px;
			border-top-right-radius: 10px;
			transition: .8s;
			padding: 5px;
			box-sizing: border-box;
		}
		.img-top:hover{
			padding: 10px;
		}
		.top-img{
			width: 50px;
			height: 50px;
		}
		@media(max-width: 600px){
			.img-top{
				display: none;
			}
		}

	</style>
</head>
<body>
	<header>
		<div class="judul">
			<h3><span>Fight</span> Covid</h3>
		</div>
		<div class="nav">
			<a href="../index.php">Beranda</a>
			<a href="../berita.php">Berita</a>
			<a href="../explorasi.php">Explorasi</a>
		</div>
	</header>

	<a href="">
		<div class="img-top">
			<img src="../img/top.png" class="top-img" title="Refresh">
		</div>
	</a>
</body>
</html>