<br><br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face{
    	src: url(style/font/OpenSansRegular.ttf);
    	font-family: 'opensans';
	}
	@font-face{
   		 src: url(style/font/caslonbold.otf);
    	font-family: 'caslon';
	}
		.tiga-box{
			
			margin: 0px auto;
			width: 90%;
			padding: 15px;
			box-sizing: border-box;
			display: flex;
			/*margin: 70px auto;*/
			justify-content: space-between;
			flex-wrap: wrap;
		}
		.box{
			padding: 15px;
			box-sizing: border-box;
			width: 32%; 
			 box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
					    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
					    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
					    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
					    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
			text-align: center;/*
			background-color: #0BB1BF;*/
			background-color: #fff;
			/*
    		background: linear-gradient(to top,#26DCEA,#0BB1BF);*/
			
			/*background-color: #21c7ff;*/
		}
		.box-kesehatan{
			margin: 10px auto;
			width: 60%;
			display: flex;
			justify-content: space-around;
			padding: 5px;
			flex-wrap: wrap;
			background-color:  #fff;
		}
		.box-kesehatan img{
			width: 10%;
			height: 50px;
			opacity: .7;
		}
		/*.box:hover{
				padding: 5px;
				transition: .5s;
				box-sizing: border-box;
		}*/

		.box h4{
			font-size: 21px;
			margin: 0 0 10px 0;
			color: black;
			font-weight: bold;
			font-family: 'opensans';
		}
		.box p{
			font-size: 15px;
			color: black;
			font-family: 'opensans';
		}
		
		@media(max-width: 600px){
			.box{
				width: 100%;
				margin: 0 0 20px 0;
			}

			.pembatas{
				margin: 2px auto;
			}
			.box-kesehatan img{
				width: 30%;
				height: 50px;
				margin: 15px 0 0 0;
			}
			.box-kesehatan{
				width: 80%;
			}

		}
		.box img{
			width: 50%;
		}
		.tulisan{
			text-align: center;
		}
	</style>
</head>
<body>
	<br>
	<div class="tiga-box">
		<div class="box">
			<h4 >Memakai <br> Masker</h4>
			<p >Selalu Memakai Masker Dimanapun Dan Kapan pun Kamu Berada!</p>
			<br><br>
			<img src="img/dokk.png" style="height: 200px; width: 80%;">
		</div>

		<div class="box">
			<h4 >Mencuci <br> Tangan</h4>
			<p >Jangan Lupa Untuk Selalu Mencuci Tangan Agar Terhindar Dari Virus Covid-19!</p>
			<br><br>
			<img src="img/cuci.png" style="height: 200px; width: 80%;">
		</div>

		<div class="box">
			<h4 >Menjaga <br> Jarak</h4>
			<p >Menjaga Jarak Dari Siapa Pun Agar Kita Tetap Selalu Aman Dari Covid-19!</p>
			<br><br>
			<img src="img/soc1.png" style="height: 200px; width: 80%;">
		</div>
	</div>
	<br>
	<div class="tulisan">
		<h3 style="font-family: 'opensans';">Partner Kami</h3>
	</div>
	<br>
	<div class="box-kesehatan">
		<img src="img/ksi2.png">
		<img src="img/tiga.jpg">
		<img src="img/dua.png">
		<img src="img/empat.png">
		<img src="img/lima.jpg">
	</div>
</body>
</html>