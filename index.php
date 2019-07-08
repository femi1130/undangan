<?php
	include_once("koneksi.php");
	
	$url=$_REQUEST['url'];
	
	if($url == ""){
		$nama = "";
	}else{
	    $nama = get_nama($_REQUEST['url']);
	}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Femi - Febri</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font1.css">
        <link rel="stylesheet" href="css/font2.css">
        <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="js/vendor/owl.carousel.2.1.6/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="js/vendor/owl.carousel.2.1.6/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/big-day.css">
        <link rel="icon" href="img/placeholders/blue.png">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<script type="text/javascript"> 
			countDownDate = new Date("Mar 17, 2018 08:00:00").getTime(),
            x = setInterval(function() {
                var now = (new Date).getTime(),
                    distance = countDownDate - now,
                    days = Math.floor(distance / 864e5),
                    hours = Math.floor(distance % 864e5 / 36e5),
                    minutes = Math.floor(distance % 36e5 / 6e4),
                    seconds = Math.floor(distance % 6e4 / 1e3);
                document.getElementById("days").innerHTML = days + " <small style='font-size: 20px;'>Hari</small>", 
				document.getElementById("hours").innerHTML = hours + " <small style='font-size: 20px;'>Jam</small> ", 
				document.getElementById("minutes").innerHTML = minutes + " <small style='font-size: 20px;'>Menit</small> ", 
				document.getElementById("seconds").innerHTML = seconds + " <small style='font-size: 20px;'>Detik</small> ", 
				distance < 0 && (clearInterval(x), document.getElementById("demo").innerHTML = "Alhamdulillah telah terlaksana")
            }, 1e3);
		</script>
    </head>
    <body>
        <div class="preloader"></div>
        <section id="hero" class="section-hero">
            <div class="owl-carousel owl-full-width owl-theme">
                <div class="item"><img src="img/ff/1.jpg" alt="" class="img-as-bg"></div>
                 <div class="item"><img src="img/ff/2.jpg" alt="" class="img-as-bg"></div>
                 
                
            </div>
            <div class="announcement-wrapper">
                <div class="announcement animation-chain" data-animation="fadeInUp">
					<?php
						if ($nama != ""){
						echo " <h3 style='font-size:30px;'><strong>Dear ".$nama.",</strong></h3>";
						} 
					 ?>
                    <h2>You're invited to</h2>
                    <h1>FEMI & FEBRI</h1>
					 <h2>Wedding</h2>
                    <p class="date"><span>17.03.2018</span></p>
                    
                </div>
                
            </div>
            
        </section>

        <nav>
            <div class="menu-wrapper">
                <button class="open-menu">Menu</button>
                <ul class="menu">
                    <li><a class="scroll-link" href="#hero">Home</a></li>
                    <li><a class="scroll-link" href="#couple">Mempelai</a></li>
                    <li><a class="scroll-link" href="#events">Acara</a></li>
                    <li><a class="scroll-link" href="#countdown">Countdown</a></li>
                    <li><a class="scroll-link" href="#location">Lokasi</a></li>
                   
                </ul>
            </div>
        </nav>

        <section id="couple" class="section-couple" >
            <h2>Mempelai</h2>
            <div class="section-intro">
                <p style="font-family:'Marck Script',cursive;">Bismillahirahmanirahim <br> Maha suci Allah yang telah menciptakan mahluk-Nya berpasang-pasangan.<br>
				Ya Allah, perkenankanlah kami merangkaikan kasih sayang yang Kau ciptakan diantara putra-putri kami</p>
            </div>
            <div class="bride-and-groom flex-responsive">
                <div class="groom">
                    <div class="profile-pic animation-chain" data-animation="fadeInUp">
                        <img src="img/ff/bride.jpg" alt="">
                    </div>
                    <h3>Femi Dwi Anggraeni</h3>
					<i class="fa fa-calendar" aria-hidden="true"></i> 30.11.1995
                    <p>Anak kedua dari pasangan <p> Bapak H.Moh. Mudjidjat,S.T (Asep) dan <p> Ibu Hj. Retno Sri Kusmirah,S.H</p>
                </div>
                <div class="bride">
                    <div class="profile-pic animation-chain" data-animation="fadeInUp">
                        <img src="img/ff/groom.jpg" alt="">
                    </div>
                    <h3>Febri Ardi</h3>
					<i class="fa fa-calendar" aria-hidden="true"></i> 01.02.1989
                    <p>Anak pertama dari pasangan <p> Bapak Ridwan dan Ibu Marlina Talysuman,S.H</p>
                </div>
            </div>
        </section>

       
        <section id="events" class="section-events bg-light-gray">
            <h2>Acara</h2>
			
			 <div class="section-intro">
                <p style="font-family:'Marck Script',cursive;">Untuk melaksanankan syariat agama-Mu, mengikuti sunnah rasul-Mu<br>
				dalam membentuk rumah tangga Sakinah, Mawaddah Wa Rahmahdalam ikatan pernikahan yang insya Allah akan diselenggarakan</p>
            </div>
			
			
		   <div class="event-details animation-chain" data-animation="fadeInUp">
				<table  class="col-md-12 text-center animate-box">
					<tr>
						<td>
							<h3>Akad</h3>
							<p>Sabtu, 17 Maret 2018, <p>Pukul 08.00 - 09.00 WIB</p>
						</td>
						<td>
							<h3>Alamat</h3>
							<p>Jalan Raya Kramat No. 23 RT 06 RW 01 <br> Kelurahan Kramat <br> Kecamatan Kembaran <br> Kab. Banyumas <br> 53182 </p>
							<div class="cta">
								<a href="https://www.google.co.id/maps/dir//-7.416156,109.312944/@-7.4161547,109.3123968,19z/data=!4m2!4m1!3e0?hl=id" class="btn btn-primary" target="_blank">Petunjuk Arah</a>
							</div>
						</td>
						<td>
							<h3>Resepsi</h3>
							<p>Sabtu, 17 Maret 2018, <p>Pukul 11.00 - 15.00 WIB</p>
						</td>
					</tr>

				</table>
				<!--<div class="col-md-4 text-center animate-box">
					<h3>Akad</h3>
					<p>Sabtu, 17 Maret 2018, <p>Pukul 08.00 - 09.00 WIB</p>
				</div>
				<div class="col-md-4 text-center animate-box">
					<h3>Alamat</h3>
					<p>Jalan Raya Kramat No. 23 RT 06 RW 01 <br> Kelurahan Kramat <br> Kecamatan Kembaran <br> Kab. Banyumas <br> 53182 </p>
					<div class="cta">
						<a href="https://www.google.co.id/maps/dir//-7.416156,109.312944/@-7.4161547,109.3123968,19z/data=!4m2!4m1!3e0?hl=id" class="btn btn-primary" target="_blank">Petunjuk Arah</a>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<h3>Resepsi</h3>
				<p>Sabtu, 17 Maret 2018, <p>Pukul 11.00 - 15.00 WIB</p>
				</div>
				-->
			</div>
			
			<div class="row text-center animate-box">
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<p style="font-family:'Marck Script',cursive;" >
					Kehadiran anda adalah silaturahmi,Do'a restu anda adalah kado terindah bagi kami kehadiran anda adalah merupakan doa' restu yang tak ternilai harganya.<br>Jazakumullahu Khairan Katsiran, hanya kepada Illahi Robbi tercurah do'a sebagai ungkapan terima kasih kami 
					</p>
				</div>
			</div>
			
		</section>

		<section id="countdown" class="section-events">
			 <h2>Countdown</h2>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<p class="countdown" style='font-size: 60px;'>
						<span id="days"></span>
						<span id="hours"></span>
						<span id="minutes"></span>
						<span id="seconds"></span>
						<br>
						<i style="font-family:'Dancing Script',cursive;font-size: 30px;">Menuju Hari Bahagia</i>
						
					</p>
					
				</div>
			</div>
		</section>
		
        <section id="location" class="section-events bg-light-gray">
            <h2>Lokasi</h2>
            <div style="height:250px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.1106817773817!2d109.31239682915928!3d-7.416154669779174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjQnNTguMiJTIDEwOcKwMTgnNDYuNiJF!5e0!3m2!1sid!2sid!4v1516592023437" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
        </section>

        
        <footer>
            <div class="footer-bg parallax" data-background-image="img/ff/4.jpg" data-parallax-factor=".8"></div>
           
            <h2>Kami yang berbahagia</h2>
            <h3>Femi & Febri</h3>
           
           
            <a href="#hero" class="scroll-link scroll-up"><i class="fa fa-arrow-up"></i></a>
        </footer>

        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.waypoints.min.js"></script>
        <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
        <script src="js/vendor/isotope.pkgd.min.js"></script>
        <script src="js/vendor/owl.carousel.2.1.6/owl.carousel.min.js"></script>
        <script src="js/vendor/countdown.js"></script>
        <script src="js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
