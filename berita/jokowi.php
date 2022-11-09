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
			<div class="gambar"><img src="../img/jokowi.jpeg" class="img-isi"></div>
			<div class="isi">
				<h3 style="color:#202356; font-family: 'opensans';">Jokowi Suntik Vaksin hingga Kemanjuran Sinovac Brasil 50%</h3>
				<br>
			<p style="font-family: 'opensans'; font-size: 16px;">	Pekan ini dipenuhi dengan berita vaksin corona asal perusahaan China, Sinovac Biotech, CoronaVac. Pasca Badan Pengawas Obat dan Makanan (BPOM) mengeluarkan izin penggunaan darurat dan Majelis Ulama Indonesia (MUI) menyatakan halal penggunaan vaksin, RI secara resmi memulai vaksinasi Rabu (13/1/2021).
			Melalui live streaming yang disiarkan YouTube Sekretariat Presiden, Presiden Joko Widodo (Jokowi) menjadi orang pertama di RI yang divaksin Covid-19. Ia menerima suntikan pukul 09.40 WIB.
			<br><br>
			Jokowi sendiri sudah mulai menjalani serangkaian vaksinasi di Istana Merdeka. Setidaknya ada empat tahapan yang akan dilalui Jokowi, mulai dari klasifikasi data, melakukan serangkaian tes kesehatan, penyuntikan vaksin, serta kartu tanda suntik vaksin Covid-19.

</p>
</div>
		</div>
		<div class="isi-dua">
			<p style="font-family: 'opensans'; font-size: 16px;">

Jokowi yang mengenakan kemeja lengan pendek lengkap dengan masker, diperiksa oleh petugas vaksinasi. Jokowi langsung melakukan serangkaian tes kesehatan yang mencakup tensi darah serta riwayat kesehatan terkini.
			"Sudah lama saya nggak periksa," kata Jokowi berkelakar di depan petugas.

Setelah petugas mengetahui riwayat kesehatan Jokowi, kepala negara kemudian bergeser ke meja sebelah untuk menjalani serangkaian penyuntikan vaksin. Ia disuntik tak lama, tidak sampai 3 menit.

Pasca disuntik, Jokowi kemudian mendapatkan kartu tanda suntik vaksin. Kemudian, Jokowi kembali bergeser ke meja sebelah untuk menyampaikan laporan kepada petugas vaksinasi.

Selain Jokowi setidaknya ada 20 orang lain yang disuntik. Mereka dibagi dalam tiga sesi. Yakni:
<br><br>
			Sesi 1 :
1. Presiden Jokowi
2. dr. Daeng M. Faqih (Ketua IDI)
3. Dr. H. Amiesyah Tambunan (Sekjen MUI/Muhammadiyah)
4. Kiai Ishom PP NU
5. Panglima TNI
6. Kapolri
7. Rafi Ahmad (Perwakilan Anak Muda)

			Sesi 2
1. Budi G. Sadikin (Menteri Kesehatan)
2. Prof Dr Unifah Risyidi (PGRI)
3. Ronal Tapilatu (PGI)
4. Agustinus Heri (KWI)
5. I Nyoman Suarthanu (PHDI)
6. Partono Bhikkhu N. M (Permabudhi)
7. Peter Lesmana (Matakin)

Sesi 3
1. Penny Kusumastuti (Kepala Badan POM)
2. Rosan Perkasa (Perwakilan Pengusaha)
3. Ade Zubaedah (Sekjen Ikatan Bidan Indonesia)
4. Nur Fauzah ( Perawat)
5. Lusy Noviani (Apoteker)
6. Agustini Setiyorini (Buruh)
7. Ibu Narti (Pedagang)

Sementara itu, di belahan bumi lainnya, Brasil juga mengeluarkan rilis resmi soal kemanjuran Sinovac. Berbeda dari Indonesia yang 63%, di Brasil vaksin ini hanya 50,4% efektif melawan Covid-19.
Brasil adalah negara pertama yang menyelesaikan uji coba tahap akhir vaksin Coronavac. Institut Butantan yang dikelola negara telah dikritik oleh para ilmuwan dan pakar kesehatan karena kurangnya transparansi dalam mempublikasikan data uji coba vaksin.

			.</p>

	<a href="../berita.php" class="back">Kembali ke beranda</a>
		</div>
	</div>
	<br><br>
	<?php include 'footer.php'; ?>
</body>
</html>