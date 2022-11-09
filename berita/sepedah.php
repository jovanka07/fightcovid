<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face{
    	src: url(..//font/OpenSansRegular.ttf);
    	font-family: 'opensans';
	}
	@font-face{
   		 src: url(..//font/caslonbold.otf);
    	font-family: 'caslon';
	}
		.container-berita{
			width: 90%;
			padding: 10px;
			box-sizing: border-box;
			margin: 50px auto;
		}
		.flex{
			width: 100%;
			display: flex;
			justify-content: space-around;
			margin: 0 0 15px 0;
			flex-wrap: wrap;
		}
		.gambar{
			width: 40%;
			margin: 0 10px 0 0;
		}
		.img-isi{
			width: 100%;
			height: 350px;
			border-bottom-left-radius: 30px;
			border-top-right-radius: 10px;
		}
		.isi{
			width: 55%;
		}

		.back{
			padding: 10px;
			box-sizing: border-box;
			background-color: #333;
			color: white;
			border-radius: 30px;
			font-size: 21px;
			text-decoration: none;
			position: absolute;
			margin: 15px 0 0 0;
			transition: 0.8s;
			border-bottom-left-radius: 30px;
			border-top-right-radius: 10px;
		}

		.back:hover{
			padding: 15px;
		}
		@media(max-width: 600px){
			.gambar{
				width: 100%;
			}
			.isi{
				width: 100%;
			}
		}
		.isi h3{
			font-size: 36px;
		}
		

	</style>
</head>
<body>
	<?php echo include 'header.php'; ?>
	<br><br><br>
	<div class="container-berita">
		<div class="flex">
			<div class="gambar"><img src="../img/sepeda.jpeg" class="img-isi"></div>
			<br>
			<div class="isi">
				<h3 style="color:#202356; font-family: 'opensans';" >Bersepedah Di Masa Pandemi</h3>
				<br>
				<p style="font-family: 'opensans'; font-size: 16px;">Sebagai bagian dari rangkaian Hari Olahraga Nasional tahun 2021, Direktorat Kesehatan Kerja dan Olahraga Kemenkes RI menggelar webinar bertajuk ''Gowes Sehat di Masa Pandemi COVID-19'' yang digelar secara daring pada Jumat (11/9).

				Acara dibuka oleh Sekretaris Direktorat Jenderal Kesehatan Masyarakat Kartini Rustandi dan menghadirkan narasumber Kasubdit Kesehatan Olahraga R. Giri Wurjandaru, Anggota Gowes Sehat Kemenkes Muhammad Zulfikar, Dokter Spesialis Kedokteran Olahraga Andhika Respati, Ketua KOSEINDO Nora Lelyana dan Sutrisno Sudjono.
				<br><br>
				Meningkatkan daya tahan tubuh di tengah pandemi sangatlah penting untuk melindungi diri terpapar COVID-19. Selain mengonsumsi makanan bergizi seimbang, kelola stress, istirahat yang cukup, rutin olahraga termasuk aktivitas yang sangat dianjurkan.</p>
			</div>
		</div>
		<div class="isi-dua">
			<p style="font-family: 'opensans'; font-size: 16px;">
				''Saya berharap webinar ini dapat menyebarkan virus pembudayaan aktivitas fisik, apakah itu cara bersepeda yang aman dan sehat maupun informasi mengenai cara berolahraga yang baik dan benar, sehingga bisa meningkatkan kesadaran kita akan pentingnya berolahraga,'' kata Kartini.

			Ia menambahkan, saat ini edukasi dan diseminasi informasi mengenai berolahraga yang baik dan benar harus ditingkatkan. Terutama di masa pandemi COVID-19 yang mana harus ada penyesuaian-penyesuaian dengan protokol kesehatan yang ada.


			Seperti yang kita tahu, belakangan bersepeda menjadi olahraga yang sangat digemari masyarakat. Seiring dengan banyaknya pengguna, aktivitas bersepeda menjadi sangat rawan akan penyebaran COVID-19. Terlebih dengan semakin banyaknya komunitas-komunitas yang terbentuk untuk gowes bareng serta berbagai event bersepeda yang berpotensi terjadi kerumunan.
			<br><br>
			Potensi ini semakin besar manakala masyarakat tidak patuh menjalankan protokol kesehatan seperti memakai masker, jaga jarak dan mencuci tangan pakai sabun.

			Menurut Andhika, kegiatan bersepeda di masa pandemi harus menyesuaikan protokol kesehatan yang berlaku. Penggunaan masker saat berolahraga misalnya, ia menegaskan bahwa hal tersebut tidak akan menganggu kegiatan olahraga itu sendiri. Justru penggunaan masker saat olahraga sangat dianjurkan manakala kegiatan olahraga dilakukan ditempat yang ramai, sebaliknya jika olahraga ditempat sepi dan hanya seorang diri maka tidak perlu memakai masker.

			</p>
		</div>
		
		<a href="../berita.php" class="back">Kembali ke beranda</a>
		<br><br>

	</div>
	<?php include 'footer.php'; ?>

</body>
</html>