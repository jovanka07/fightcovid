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
			<div class="gambar"><img src="../img/asal.jpeg" class="img-isi"></div>
			<div class="isi">
				<h3 style="color:#202356; font-family: 'opensans';">Asal Usul Virus Corona Berasal, dari Mana Sebenarnya?</h3>
				<br>
				<p style="font-family: 'opensans'; font-size: 16px;">
					COVID-19 atau virus corona tengah menyebar dan menginfeksi lebih dari 1 juta orang di seluruh dunia. Namun, sebenarnya virus corona berasal dari mana?
					Kemunculan virus corona mulai terdeteksi pertama kali di negara China pada awal Desember 2019. Kala itu, sejumlah pasien berdatangan ke rumah sakit di Wuhan dengan gejala penyakit yang tak dikenal.
					<br><br>
					Kemudian, Dr. Li Wenliang menyebarkan berita mengenai virus misterius tersebut di media sosial. Diketahui, sejumlah pasien pertama memiliki akses ke pasar ikan Huanan yang juga menjual binatang liar.

					Dikutip dari CNN, coronavirus sebenarnya sudah ada sejak lama. Namun, virus tersebut biasa ditemukan pada hewan, seperti kucing, anjing, babi, sapi, kalkun, ayam, tikus, kelinci, dan kelelawar.
				</p>
			</div>
		</div>
		<div class="isi-dua">
			<p style="font-family: 'opensans';font-size: 16px;">


			Namun, virus corona pada hewan hanya dapat menyebar antara binatang yang satu dengan binatang yang lain. Bahkan, sebagian hanya bertahan pada inang aslinya saja dan tidak menyebar.
							"Biasanya virus dari satu hewan tidak menular ke spesies hewan lain, atau ke manusia," kata Kepala Divisi Penyakit Menular Anak-anak di Rumah Sakit Anak Pittsburgh University Center Medical Pittsburgh, Dr. John Williams.

			"Jadi biasanya jika virus berpindah dari hewan ke manusia, itu seperti jalan buntu. Orang itu sakit tetapi tidak menyebar lebih lanjut," sambungnya.
			<br><br>
			Kemudian, sebuah penelitian yang diterbitkan bulan Februari menyebutkan bahwa tampaknya virus corona berasal dari kelelawar. Virus tersebut berhasil bermutasi dari tubuh sang inang.

			Penelitian tersebut menemukan coronavirus pada kelelawar memiliki 96% genetik yang mirip dengan virus corona yang saat ini menginfeksi orang di seluruh dunia. Namun, virus corona bukan infeksi langsung dari kelelawar, melainkan dari spesies lain yang terinfeksi dari kelelawar dan akhirnya menyerang tubuh manusia.

			Namun, penelitian baru-baru ini juga menyebutkan 13 dari 41 pasien yang terinfeksi tidak memiliki hubungan dengan pasar yang menjual hewan liar. Sehingga, para peneliti belum mengetahui betul virus corona berasal dari mana.

			</p>
		</div>

		<a href="../berita.php" class="back">Kembali ke beranda</a>
		<br><br>
	</div>
	<?php include 'footer.php'; ?> 
</body>
</html>