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
			<div class="gambar"><img src="../img/vaksin1.jpeg" class="img-isi"></div>
			<br>
			<div class="isi">
				<h3 style="color:#202356; font-family: 'opensans';">Vaksin Telah Di Temukan</h3>
				<br>
				<p style="font-family: 'opensans';font-size: 16px;">
					Penemuan dan pendistribusian vaksin untuk melawan pandemi covid-19 tidak akan dengan sendirinya menghilangkan virus corona yang mematikan. Hal ini diungkapkan World Health Organization (WHO) dalam konferensi pers virtual pada hari Jumat (4/12/2020).
				<br><br>
				Oleh sebab itu, WHO mengingatkan agar masyarakat tidak berpuas diri pemberitaan vaksin dan mengembangkan keyakinan keliru soal vaksin sudah dekat maka krisis sudah berakhir.

				"Vaksin tidak sama dengan nol Covid," kata direktur kedaruratan WHO Michael Ryan, seperti dikutip dari AFP. "Vaksin dan vaksinasi akan menambah alat utama, dan alat kuat dalam peralatan yang kita miliki. Tapi mereka tidak akan melakukan pekerjaan itu dengan sendiri."

				Direktur Jenderal WHO Tedros Adhanom Ghebreyesus mengatakan kemajuan dalam vaksin "memberi harapan pada semua umat manusia akan penyelesaian pandemi". Namun ia prihatin akan persepsi yang berkembang bahwa pandemi telah berakhir.

				</p>
			</div>
		</div>
			<div class="isi-dua">
				<p style="font-family: 'opensans';font-size: 16px;">"Nyata, banyak negara sedang bergelut dengan penularan virus yang sangat tinggi, yang memberikan tekanan besar pada rumah sakit, unit perawatan intensif (ICU) dan petugas kesehatan," jelasnya.

				Informasi saja, hingga Jumat kemarin, virus Covid-19 sudah menginfeksi hampir 65 juta orang.  Virus ini telah menewaskan sedikitnya 1,5 juta orang sejak muncul di China pada Desember 2019, menurut data AFP.

				Berdasarkan data WHO, sekitar 51 vaksin Covid-19 sedang diuji ke manusia di mana 13 di antaranya sedang dalam tahap uji klinis tahap akhir. Sebanyak 163 vaksin lainnya sedang dikembangkan di laboratorium.</p>
			</div>

		<a href="../berita.php" class="back">Kembali ke beranda</a>
			<br><br>
		</div>
	<?php include 'footer.php'; ?>
</body>
</html>