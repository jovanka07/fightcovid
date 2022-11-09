<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face{
    	src: url(../font/caslonbold.otf);
    	font-family: 'caslon';
		}
		@font-face{
			src: url(../font/OpenSansRegular.ttf);
			font-family: 'opensans';
		}
		
		.gambar-konsul{
			width: 100%;
      		height: 400px;
      		background:url(img/pos4.jpeg);
      		background-size: 100% 100%;
		}
		.tulisan-yt{
			text-align: center;
			margin: 20px auto;
			width: 80%;
			padding: 10px;
		}
		.tulisan-yt h3{
			font-size: 48px;
			margin: 0 0 9px 0;
			font-family: 'opensans';
		}
		.tulisan-yt .p1{
			font-size: 16px;
			color: rgb(21, 1, 229);
			font-weight: bold;
			font-family: 'opensans';
		}
		
		.vid-yt{
			width: 80%;
			margin: 10px auto;
		}
		.content-konsul{
			width: 80%;
			margin: 40px auto;
			text-align: center;
		}
		.wa{
			display: flex;
			width: 100%;
			justify-content: space-around;
			flex-wrap: wrap;
		}
		.wa-logo{
			width: 200px;
		}
		.barcode{
			width: 200px;
			font-family: 'opensans';
		}
		.tulisan-konsul h3{
			font-size: 36px;
			margin: 0 0 10px 0;
			font-family: 'opensans';
		}
		.tulisan-konsul p{
			
		}
		.wa-logo a{
			text-decoration: none;
			font-style: italic;
			font-family: 'opensans';
		}
		.wa-logo a:hover{
			color: green;
		}
		.vid-yt iframe{
			width: 100%;
			height: 405px;
		}
		@media(max-width: 600px){
			.gambar-konsul{
				height: 300px;
			}
			.tulisan-yt h3{
				font-size: 36px;
			}
			.tulisan-yt .p2{
				font-size: 13px;
			}
			.wa-logo{
				width: 250px;
			}
			.barcode {
				margin: 0 0 20px  0;
			}
			.vid-yt iframe{
				height: 250px;
			}
		}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="gambar-konsul"></div>
	<div class="youtobe-video">
		<div class="tulisan-yt">
			<p class="p1">Fitur Explorasi</p>
			<h3>Jelajahi Wawasan Kita Lewat Video Ini</h3>
			<p class="p2" style="font-family: 'opensans';">Video dibawah dibuat oleh Corona Indonesia dalam rangka Mengispirasi Agar Kita Selalu Hidup Sehat <br> Dan Selalu Menerapkan 3M (Mencuci Tangan, Memakai Masker, Dan Menjaga Jarak)</p>

		</div>
		<div class="vid-yt">
			<iframe src="https://www.youtube.com/embed/0dAoCfgAQw8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

	<div class="content-konsul">
		<div class="tulisan-konsul">
			<h3>Khawatir Akan Gejala Covid?</h3>
			<p style="font-family: 'opensans';">Jangan Khawatir Sekarang Anda bisa Berkonsultasi Ke kami Dalam Waktu 24 jam <br> Yuk Mari Kita Berkonsultasi</p>
		</div>
		<br><br>
		<div class="wa">
			<div class="barcode"><img src="img/barcode.png" class="barcode">Barcode Wattsaps</div>
			<div class="wa-logo"><img src="img/wa.png" class="wa-logo">WhatsApp <br> <a href="https://wa.me/message/CYMUVPZ7RY6IM1"  >Konsultasi Sekarang!</a></div>
		</div>
	</div>
	<br><br><br>
	<?php include 'footer.php'; ?>
</body>
</html>