<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face{
	    	src: url(style/font/OpenSansRegular.ttf);
	    	font-family: 'opensans';
		}

		.container-gallery{
			width: 80%;
			padding: 10px;
			box-sizing: border-box;
			margin: 50px auto;
			/*opacity: 0;
			transform: scale(0.1);
			transition: all 1s ease-in-out;*/
		}
		/*.active{
			opacity: 1;
			transform: scale(1);
		}*/
		.img-gallery{
			display: flex;
			width: 100%;
			height: auto;
			margin: auto;
			flex-wrap: wrap;
			
		}

		.img-gallery img{
			margin: auto;
			margin: 0 10px;
		}
		.satu-img{/*
			width: 70%;*/
			flex: 3;
			height: 200px;
		}
		.dua-img{/*
			width: 30%;*/
			flex: 1;
			height: 400px;	
		}
		.tiga-img{
			width: 70%;
			margin: -100px 0 0 10px;
			height: 400px;
		}
		.empat-img{
			width: 27%;
			height: 200px;
			margin: 100px 0 0 15px; 
		}
		.img-gallery-2{
			display: flex;
			margin: -80px 0 0 0;
			flex-wrap: wrap;
		}
		.judul span{
			width: 30%;
			font-size: 30px;
			background-color: black;
			color: white;
			padding: 5px;
		}
		p{
			display: inline;
		}
		.img-gallery img:hover{
				padding: 5px;
				transition: .5s;
				box-sizing: border-box;
		}
		.img-gallery-2 img:hover{
				padding: 5px;
				transition: .5s;
				box-sizing: border-box;
		}
		@media(max-width: 800px){
			.img-gallery img{
				margin: 0 0 30px 0;
			}
			
			.dua-img{
				height: 300px;
			}
			.img-gallery-2{
				width: 100%;
				margin: 90px 0 0 0;
			}
			
			.tiga-img{
				width: 100%;
				height: 300px;
			}
			.empat-img{
				width: 100%;
				margin: 20px 0 0 0;
			}
			
		}
		.satu-img.size{
			width: 80%;
		}
	</style>
</head>
<body>

	<div class="container-gallery">

		<div class="judul"><span style="font-family: 'opensans';">Poster</span> <p style="font-family: 'opensans';">Covid</p></div>
		<br>
		<div class="img-gallery">
			<img src="img/poster1.jpeg" class="satu-img size">
			<img src="img/poster2.png" class="dua-img">
		</div>

		<div class="img-gallery-2">
			<img src="img/poster3.jpeg" class="tiga-img"> 
			<img src="img/poster4.png" class="empat-img">
		</div>	
		
	</div>
<script type="text/javascript">
	// window.addEventListener('scroll', ()=>{
	// 	let content = document.querySelector('.container-gallery');
	// 	let contentPosisi = content.getBoundingClientRect().top;
	// 	let layarPosisi = window.innerHeight;
	// 	if(contentPosisi < layarPosisi){
	// 		content.classList.add('.active');
	// 	}else{
	// 		content.classList.remove('.active');
	// 	}
	// });
</script>
</body>
</html>