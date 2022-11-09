<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		@font-face{
    	src: url(font/caslonbold.otf);
    	font-family: 'caslon';
		}
		@font-face{
			src: url(font/OpenSansRegular.ttf);
			font-family: 'opensans';
		}
		
		.gambar-konsul{
			width: 100%;
      		height: 400px;
      		background:url(img/pos5.jpeg);
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

		/* BERITA */

		.container-berita{
			width: 90%;
			margin: 30px auto;
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
			padding: 10px;
			box-sizing: border-box;
		}
		.box-berita{
			width: 23%;
			margin: 30px 0 0 0;
		}
		/* HEADER */
		.header-berita{
			width: 100%;
			overflow: hidden;
		}
		.header-berita img{
			width: 100%;
			border-bottom-left-radius: 30px;
			border-top-right-radius: 10px;
			overflow: hidden;
		}

		.flex-view{
			display: flex;
			justify-content: space-between;
		}
		.flex-view .img-love{
			margin: 0 10px 0 0;
		}
		.view{
			display: flex;
			margin: 0 0 0 10px;
		}
		.view p{
			margin: 3px 0 0 3px;
			font-size: 20px;
		}
		.container-berita .nama{
			margin: 0 10px 0 10px;
			color: grey;
    		font-family: 'opensans';
    		color: #334257;
    		font-size: 20px;
		}

		.orang{
			display: flex;
			margin: 5px 0 0 10px;
		}
		.nama-orang{
			margin: 10px 0 0 5px;
		}
		.nama-orang .name-orang{
			font-size: 18px;
     		font-family: '';
     		color: #334756;
		}
		.nama-orang p{
			color: #716F81;
			font-size: 14px;
		}
		.judul-berita{
			display: flex;
			justify-content: space-between;
			width: 90%;
			margin: 30px auto;
		}
		.judul-berita h5{
			font-size: 21px;
			font-family: 'opensans';
			font-style: italic;
		}
		.judul-berita input{
			border-top: none;
			border-left: none;
			border-right: none;
			border-bottom-color: #716F81;
			outline: none;
			width: 20%;
		}


		@media(max-width: 1000px){
			.gambar-konsul{
				height: 300px;
			}
			.tulisan-yt h3{
				font-size: 36px;
			}
			.tulisan-yt .p2{
				font-size: 13px;
			}
			.container-berita{
				width: 100%;
			}
			.container-berita .nama{
				font-size: 16px;
			}
			.nama-orang .name-orang{
				font-size: 16px;
			}
			.box-berita{
				width: 45%;
			}
			.sepeda{
				height: 140px;
			}

		}
	</style>
</head>
<body>
	<?php echo include 'header.php'; ?>

	<div class="gambar-konsul"></div>
	<div class="tulisan-yt">
		<p class="p1">Fitur Berita</p>
		<h3>Jelajahi Wawasan Kita Lewat Berita Ini</h3>
		 <p class="p2" style="font-family: 'opensans';">Berita Di Bawah Ini Merupakan Kumpulan Informasi Mengenai Seputar Covid-19 Yang Telah Beredar  Di Social Media Dan  Di <br>Publickasikan Secara Umum Agar Kita Semua Tau Infomasi <br>Terbaru Mengenai Covid-19 <br> <br><span style="color:grey;"> (Klik Gambar Untuk Melihat Berita)</span></p>
	</div>

	<div class="judul-berita">
		<h5>Berita Terbaru</h5>

		<input type="text" placeholder="Cari berita mu...">
	</div>
	<div class="container-berita">

		<!-- JOKOWI -->
		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/jokowi.php">
					<img src="img/jokowi.jpeg" alt="salah" >
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>12.300</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Jokowi Di Suntik Vaksin</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

		<!-- BUPATI KARAWANG -->

		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/bupati-karawang.php">
					<img src="img/celica.jpeg" alt="salah" >
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>7500</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Bupati Positif Corona</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

		<!-- OLARAHGA -->

		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/sepedah.php">
					<img src="img/sepeda.jpeg" alt="salah" height="185px" class="sepeda">
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>10.731</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Bersepedah agar sehat</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

		<!-- VAKSIN TELAH DI TEMUKAN -->

		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/vaksin.php">
					<img src="img/vaksin1.jpeg" alt="salah" >
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>22.170</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Vaksin telah di temukan</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

		<!-- JOKOWI -->
		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/jokowi.php">
					<img src="img/jokowi.jpeg" alt="salah" >
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>12.300</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Jokowi Di Suntik Vaksin</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

		<!-- ASAL USUL CORONA -->

		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/corona.php">
					<img src="img/asal.jpeg" alt="salah" >
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>13.300</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Asal usul corona</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

		

		<!-- OLARAHGA -->

		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/sepedah.php">
					<img src="img/sepeda.jpeg" alt="salah" height="185px" class="sepeda">
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>10.731</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Bersepedah agar sehat</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

		<!-- VAKSIN TELAH DI TEMUKAN -->

		<div class="box-berita">
			<div class="header-berita">
				<a href="berita/vaksin.php">
					<img src="img/vaksin1.jpeg" alt="salah" >
				</a>
			</div>

			<div class="content-berita">
				<div class="flex-view">
					<div class="view">
						<img src="img/mata.png" width="30px">
						<p>22.170</p>
					</div>

					<img src="img/love-hitam.png" width="30px" height="30px" class="img-love">
				</div>

				<p class="nama">Vaksin telah di temukan</p>
				<div class="orang">
					<img src="img/foto.png" width="60px">
					<div class="nama-orang">
						<p class="name-orang">Jovanka Alexandro</p class="name-orang">
						<p>1000 Followers</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<br><br>
	<?php include 'footer.php'; ?>

	<script type="text/javascript">
    let icon = document.querySelectorAll('.img-love');
    for(i = 0 ; i < icon.length; i++){
        icon[i].addEventListener('click', function(){
            // this.src="img/love-merah.jpg";
            if(this.src=="http://localhost/fightcovid/img/love-merah.jpg" ){
                this.src="img/love-hitam.png";
                // alert('love merah');
            }else{
                this.src="img/love-merah.jpg";
                // alert('love putih');
            }
        });
    }
</script>
</body>
</html>