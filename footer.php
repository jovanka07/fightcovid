<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* FONT */

@font-face /*roboto black*/{
    src: url(../font/Roboto-Black.ttf);
    font-family: 'roboto-black';
}
@font-face{
    src: url(../font/OpenSansRegular.ttf);
    font-family: 'opensans';
}
.container-footer{
    display: flex;
    justify-content: space-around;
    box-sizing: border-box;
    width: 100%;
    margin: 0 auto;
    padding: 25px;
    box-sizing: border-box;
    background-color: #8ca1ab;
    color: white;
}
.container-footer .footer-kiri,.footer-tengah,.footer-kanan{
    list-style: none;
    padding: 10px;
}
.container-footer .pp{
    font-size: 22px;
    color: white;
    font-family: 'roboto-black';
}
.container-footer ul{
    list-style: none;
    padding-left: 0;
}
.footer-kiri{
    width: 30%;
}
.footer-kiri .li1{
    font-family: 'opensans';
}
.footer-tengah{
    width: 40%;
}
.footer-kanan{
    width: 30%;
}
.footer-kanan .sosial-media{
    display: flex;
}
.sosial-media div{
    width: 50px;
    height: 50px;
    cursor: pointer;
    margin-right: 10px;
 }
 ul .li1:hover{
    border :none;
 }
 .footer-tengah ul iframe{
     border-bottom-left-radius: 30px;
     border-top-right-radius: 10px;

 }
    </style>
</head>
<body>
    <footer>
        <div class="container-footer">
            <div class="footer-kiri">
                <p class="pp">Hubungi Kami</p>
                <br><br>
                <ul>
                    <li class="li1">WA : 0812-1824-0590</li>
                    <li class="li1">Instagram : Jovanka.a7</li>
                    <li class="li1">Senin Sampai Minggu Non Stop</li>
                </ul>
            </div>
            <div class="footer-tengah">
                <p class="pp">Lokasi</p>
                <ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9956848890765!2d107.46280471427369!3d-6.394556595373104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6972648fb0eb35%3A0x8439c7802ba209e5!2sSMK%20MUTU%20(Muhammadiyah%20Satu)%20Cikampek!5e0!3m2!1sid!2sid!4v1613186377998!5m2!1sid!2sid" width="80%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </ul>
            </div>
            <div class="footer-kanan">
                <p class="pp">Sosial Media</p>
                <br><br>
                    <div class="sosial-media">
                        <div class="fb"><img src="img/fb.png" width="100%" alt="facebook" title="facebook"></div>
                        <div class="ig">
                            <a href="https://instagram.com/jovanka.a7?utm_medium=copy_link" target="_black">
                                <img src="img/ig.png" width="100%" alt="instagram" title="instagram"></div>
                            </a>
                        <div class="twitter"><img src="img/twitter.png"  width="100%" alt="twitter" title="twitter"></div>
                    </div>
            </div>
        </div>
    </footer>
</body>
</html>