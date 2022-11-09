<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face{
    	src: url(../font/OpenSansRegular.ttf);
    	font-family: 'opensans';
	}
	@font-face{
   		 src: url(../font/caslonbold.otf);
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
			<div class="gambar"><img src="../img/celica.jpeg" class="img-isi"></div>
			<div class="isi">
				<h3 style="color:#202356; font-family: 'opensans';">Bupati Karawang Celica Nurrachadiana Positif Corona</h3>
				<br>
				<p style="font-family: 'opensans'; font-size: 16px;">Bupati Karawang Cellica Nurrachadiana buka suara usai diumumkan Gubernur Jawa Barat Ridwan Kamil bahwa dirinya positif terjangkit Covid-19. Ia memohon doa kepada seluruh masyarakat Karawang demi kesembuhannya.

				"Saat ini saya akan menjalankan isolasi secara mandiri di salah satu rumah sakit di Karawang," tulis Cellica di akun Instagram resminya seperti dikutip CNBC Indonesia
				<br><br>
				Ia pun mengimbau dan memohon kepada masyarakat untuk tetap tinggal di rumah sementara waktu.

				"Jujur saya tidak mengalami gejala apapun, sedikitpun, tapi virus itu tetap masuk. Jadi saya mohon untuk jalankan social distancing. Sehat selalu untuk semua," tulis Cellica.

				Sebelumnya, Ridwan Kamil mengumumkan ada dua petinggi pemerintah daerah di Jabar yang positif terjangkit Covid-19. Selain Cellica, juga ada Wakil Wali Kota Bandung Yana Mulyana.
				</p>



			</div>
		</div>
			<div class="isi-dua">
				<p style="font-family: 'opensans'; font-size: 16px;">"Atas seizin yang bersangkutan, saya melaporkan bahwa Bapak Yana Mulyana @kangyanamulyana , Wakil Walikota Bandung dan Ibu Cellica Nurrachdiana @cellicanurrachadiana , Bupati Karawang, telah mengikuti tes covid-19 dan dinyatakan positif," tulis Kang Emil.
				"Beliau-beliau sudah melakukan isolasi diri dan dalam keadaan sehat walafiyat. Mari kita doakan agar keduanya lekas pulih dan bisa kembali bertugas karena negara sangat membutuhkan kehadiran beliau-beliau," lanjutnya.
				<br><br>
				Sebelum Cellica dan Yana, Wali Kota Bogor Bima Arya telah terlebih dahulu positif terjangkit Covid-19. Pengumuman itu disampaikan Bima via akun media sosialnya, Jumat .

				"Warga Bogor yang saya cintai tadi sore melalui sambungan telepon bapak gubernur Jabar menghubungi saya untuk menyampaikan hasil tes covid-19 yang saya jalani 2 hari lalu dan saya dinyatakan positif. Tentu walau tidak ada gejala-gejala signifikan hanya batuk-batuk kecil tapi saya putuskan untuk ikuti semua protokol dan semua prosedur menjalani isolasi diri dan percaya sepenuhnya pada RSUD Kota Bogor untuk menangani ini," ujar Bima.</p>
		</div>

	<a href="../berita.php" class="back">Kembali ke beranda</a>
	</div>

	<br><br>
	<?php include 'footer.php'; ?>
</body>
</html>