@extends('layout.main')

@section('content')
<style>
    /* body, html {
		margin: 0;
		padding: 0;
		height: 100%;
		overflow: hidden;
	} */
    .btn-gold {
        color: black;
        background-color: #b89e14
    }

    .btn-gold:hover {
        background-color: black;
        color: #b89e14;
    }

    #header-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: fh5co-couple color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        z-index: 9999;
    }

    #header-overlay h1 {
        margin-bottom: 20px;
    }

	#content-section {
        /* display: none; */
        opacity: 0; /* Mulai dengan opacity 0 */
        transition: opacity 3s; /* Durasi animasi 1 detik */
    }

    #content-section.fade-in {
        /* display: block; */
        opacity: 1;
    }

    #imgd {
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .mb-2 {
        margin-bottom: 20px;
        /* Adjust as necessary */
    }

	.mt-3{
		margin-top: 60px;
	}

    .img-circle-with-border {
        border: 2px solid #fff;
        /* Adjust the border properties as needed */
        border-radius: 50%;
        /* Ensure the border forms a circle */
        overflow: hidden;
        /* Ensure the image stays within the circle */
    }

    .fh5co-header .display-tc p {
        color: #fff;
    }

	#headerOverlay-title{
		margin-top: 5%;
	}

	#fh5co-couple .container {
		padding-top: 5%;
		padding-bottom: 5%;
		padding-left: 10%;
		padding-right: 10%;
		border-width: 2px;
		border-style: solid;
		border-image: linear-gradient(to right, black, gold) 1;
	}
	
	@media screen and (max-width: 768px) {
		.fh5co-cover {
			height: 900px;
		}
		.btn-sm{
			margin-top: 20px;
		}
		#imgd{
			width: 200px;
		}
		#headerOverlay-title{
			margin-top: 0;
		}
		.fh5co-heading p{
			font-size: 12px;
		}
		#fh5co-couple .container {
			margin: 10px;
			padding-top: 7%;
			border-image: linear-gradient(to top, black, gold) 1;

		}
		.couple-wrap p {
			font-size: 12px;
		}
		body p {
			font-size: 12px;
		}
		.simply-countdown {
		/* The countdown */
		}

		.simply-countdown > .simply-section {
		/* coutndown blocks */
		width: 70px;
		height: 70px;
		}

		.simply-countdown > .simply-section > div {
		height: 70px;
		width: 70px;
		/* margin: 0 4px; */
		}

		.simply-countdown > .simply-section .simply-amount,
		.simply-countdown > .simply-section .simply-word {
		/* amounts and words */
		}

		.simply-countdown > .simply-section .simply-amount {
		font-size: 20px;
		/* amounts */
		}

		.simply-countdown > .simply-section .simply-word {
		font-size: 8px;
		/* words */
		}
		#fh5co-header .display-tc h2, #fh5co-counter .display-tc h2, .fh5co-cover .display-tc h2, .fh5co-cover .display-tc .btn , body{
			font-size: 12px!important;
		}
		.heart {
		top: -5em;
		}
		.heart i {
		border: 2px solid gold;
		}
		.animated-img {
			position: absolute; 
			top: 0; 
			left: 0;
			right: -10px;
			z-index: 1;
			width: 58%; 
			/* transform: scale(1) rotate(25deg); */
		}
	}

	@media screen and (max-width: 960px) {
		.fh5co-cover .display-t,
		.fh5co-cover .display-tc {
			height: 1000px;
		}
		.fh5co-cover {
			margin-top: -150px;
		}
	}

	@keyframes fadeInOut {
        0% {
            opacity: 0.8;
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0.8;
        }
    }

    /* .animated-img {
        animation: fadeInOut 4s infinite;
    } */
	/* @keyframes zoomInOut {
        0% {
			transform: scale(0.6) translateY(20px);
        }
        50% {
			transform: scale(0.8) translateY(0);
        }
        100% {
            transform: scale(0.6) translateY(20px); 
        }
    }


    .animated-img {
        animation: zoomInOut 4s infinite;
    }
	 */

</style>
<!-- Header Overlay -->
<div id="header-overlay">
    <header id="fh5co-header" class="fh5co-cover c2" role="banner" style="background-image:url(images/WeddingRing.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <div id="headerOverlay-title">
                                <h4 style="color: #fff;">PLEASE JOIN US FOR THE</h4>
                                <h1>Wedding Of</h1>
                            </div>
                            <div class="col-md-12 text-center mb-2">
                                <img id="imgd" src="images/poto-bw.png" alt="couple" width="33%"
                                    class="img-circle img-responsive center-block">
                            </div>
                            <h1>Dedi &amp; Afifah</h1>
                            <p><a id="start-button" href="#" class="btn btn-sm"><i class="fas fa-envelope"></i> Buka Undangan</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Elemen Audio -->
<audio id="autoplayAudio" controls style="display: none;">
    <source src="{{ asset('/music/test2.mp3') }}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<!-- Konten halaman -->
<div id="content-section">
	{{-- <img src="images/atas5 (4).png" alt="background image" width="100%" class="img-fluid" style="position: absolute; top: 0px; z-index: 1;transform: scale(1) rotate(180deg);"> --}}
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/WeddingRing.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <div class="col-md-12 text-center m-2">
								{{-- <img src="images/bunga.png" alt="background image" class="img-fluid animated-img" style="position: absolute; top: -60px; right: 60px; z-index: 1;width: 220px; height: 180px; transform: scale(0.6) rotate(210deg);"> --}}
                                <img id="imgd" src="images/poto-bw.png" alt="couple" width="33%"
                                    class="img-circle img-responsive center-block">
								{{-- <img src="images/bunga.png" alt="background image" class="img-responsive center-block animated-img"> --}}
                            </div>
                            <h1>Dedi &amp; Afifah</h1>
                            <h2>Kamis, 20 Juni 2024</h2>
                            <h2>"Kami akan Menikah,"
                                <br>dan kami ingin Anda menjadi Bagian dari Hari Istimewa Kami!</h2>
                            
							<div class="simply-countdown simply-countdown-one"></div>
                            <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </header>

    <div id="fh5co-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <div style="margin-top: 5%;">
                        <p>السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</p>
                        <h2>Pernikahan <br>Dedi & Afifah</h2>
                        <p>Dengan penuh rasa syukur kepada Allah SWT, <br> kami dengan rendah hati mengundang
                            Bapak/Ibu/Saudara/i <br> untuk hadir dalam pernikahan kami</p>
                        <div class="col-md-12 text-center mb-2">
                            <img id="imgd" src="images/poto-bw.png" alt="couple" width="33%"
                                class="img-circle img-responsive center-block">
                        </div>
                        <p>وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا
                            وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةًۗ اِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ
                            يَّتَفَكَّرُوْنَ </p>
                        <p>Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu
                            dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu
                            rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                            tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</p>
                        <br>
                        <p>Surah Ar-Rum Ayat 21</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-couple">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Resepsi Pernikahan</h2>
                    <h3>20 Juni 2024 </h3>
                    <p>Perum Griya Permata Blok C 171</p>
                    <a class="btn btn-default btn-sm btn-gold" href="https://maps.app.goo.gl/EZwFYNP9dbV7ooxD7">Lokasi
                        Acara</a>
                </div>
            </div> --}}
            <div class="couple-wrap animate-box">
                <div class="couple-half">
                    <div class="groom">
                        <img src="images/groom.jpeg" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-groom">
                        <h3>Dedi Susanto</h3>
                        <p>Putra dari Pasangan Bpk Safriyanto & dan Alm. Ibu Mahwanti<br>Beralamat di Kavling bukit melati blok I2 no 49</p>
                    </div>
                </div>
                <p class="heart text-center"><i class="icon-heart2"></i></p>
                <div class="couple-half">
                    <div class="bride">
                        <img src="images/bride.jpeg" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-bride">
                        <h3>Nur Hanani Afifah</h3>
                        <p>Putri dari Pasangan Bpk M.Mas'ud & Ibu Tutik Mardiyani <br>Beralamat di Perum Griya Permata blok C no 171 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/WeddingRing.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Our Special Events</span>
                    <h2>Wedding Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="event-wrap animate-box">
                                    <h3>Resepsi Pernikahan</h3>
                                    <div class="event-col">
                                        <i class="icon-clock"></i>
                                        <span>13:00 PM</span>
                                        <span>SELESAI</span>
                                    </div>
                                    <div class="event-col">
                                        <i class="icon-calendar"></i>
                                        <span>KAMIS, 20 JUNI</span>
                                        <span>2024</span>
                                    </div>
                                    <p>Kediaman Mempelai Wanita</p>
                                    <p>Perum Griya Permata Blok C 171, Kel. Sungai Langkai, Kec. Sagulung, Kota Batam,
                                        Provinsi Kepulauan Riau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-couple-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>We Love Each Other</span>
                    <h2>Our Story</h2>
                    <p>Momen-Momen yang Membentuk Kami: Perjalanan Kami Menuju Pernikahan.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline animate-box">
                        <li class="animate-box">
                            <div class="timeline-badge" style="background-image:url(images/bu1.png);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">First We Meet</h3>
                                    <span class="date">Mei, 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Dari pertemuan pertama yang penuh makna ketika kami datang ke rumah untuk silaturahmi saat lebaran, hingga momen manis ketika kami bercanda tentang masa depan yang tak terduga, termasuk menikah. Meskipun sudah berteman sejak SMP, namun baru hari itu kisah cinta kami dimulai.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge" style="background-image:url(images/bu2.png);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">First Date</h3>
                                    <span class="date">April, 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Hari itu, kami dengan sederhana merencanakan untuk bertemu di bioskop. Tanpa banyak ekspektasi, kami berdua hanya menikmati momen bersama saat menonton film "KKN di Desa Penari" di bioskop, sebuah momen yang menjadi ikonik dalam perjalanan cinta kami.</p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box">
                            <div class="timeline-badge" style="background-image:url(images/bu3.png);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">In A Relationship</h3>
                                    <span class="date">April, 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Tidak lama setelah kencan pertama kami, kami memutuskan untuk menjalin kasih. Setelah menjalani hampir tiga tahun yang penuh cinta dan kesetiaan, kami yakin telah menemukan pasangan hidup kami. Dengan penuh keyakinan, kami memutuskan untuk melangkah lebih jauh dan mengikat janji suci pernikahan. Keputusan ini bukan hanya penutup bab baru dalam kisah cinta kami, tetapi juga awal dari petualangan baru sebagai pasangan yang satu.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-gallery" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Our Memories</span>
                    <h2>Wedding Gallery</h2>
                    <p>"Di antara setiap foto terdapat cerita indah, kenangan manis, dan cinta yang tak terukur"</p>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="fh5co-gallery-list">

                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url(images/g1b.jpg); ">
                            <a href="#">
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url(images/g2b.jpg); ">
                            <a href="#" class="color-2">
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url(images/g8b.jpg); ">
                            <a href="#" class="color-3">
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url(images/g7b.jpg); ">
                            <a href="#" class="color-4">
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url(images/g5b.jpg); ">
                            <a href="#" class="color-3">
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url(images/g4b.jpg); ">
                            <a href="#" class="color-4">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-users"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Estimated Guest</span>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-user"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">We Catter</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-calendar"></i>
                                </span>
                                <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Events Done</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-clock"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Hours Spent</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-testimonial">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Best Wishes</span>
                        <h2>Friends Wishes</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="wrap-testimony">
                            <div class="owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/couple-1.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, behind the word mountains, far from the countries Vokalia
                                                and Consonantia, there live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics"</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/couple-2.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, behind the word mountains, far from the countries Vokalia
                                                and Consonantia, at the coast of the Semantics, a large language ocean."
                                            </p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/couple-3.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, far from the countries Vokalia and Consonantia, there live
                                                the blind texts. Separated they live in Bookmarksgrove right at the
                                                coast of the Semantics, a large language ocean."</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-services" class="fh5co-section-gray">
        <div class="container">

            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>We Offer Services</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.
                        Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="icon-calendar"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>We Organized Events</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque
                                dicta adipisci architecto culpa amet.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="icon-image"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Photoshoot</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque
                                dicta adipisci architecto culpa amet.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="icon-video"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Video Editing</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque
                                dicta adipisci architecto culpa amet.</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 animate-box">
                    <div class="fh5co-video fh5co-bg" style="background-image: url(images/WeddingRing.jpg); ">
                        <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i
                                class="icon-video2"></i></a>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Are You Attending?</h2>
                    <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-inline">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">I am Attending</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const audio = document.getElementById('autoplayAudio');

	function restartAudio() {
					audio.currentTime = 0; // Mengatur waktu audio kembali ke awal
					audio.play()
						.then(() => {
							console.log('Audio playback restarted successfully.');
						})
						.catch(error => {
							console.error('Error attempting to restart audio:', error);
						});
				}
	audio.addEventListener('ended', restartAudio);

    document.addEventListener('DOMContentLoaded', (event) => {
        const audio = document.getElementById('autoplayAudio');
        const headerOverlay = document.getElementById('header-overlay');
        const contentSection = document.getElementById('content-section');
        const startButton = document.getElementById('start-button');
        const htmlBody = $('html, body');

        // Mengatur audio untuk tidak di-mute
        audio.muted = false;
        htmlBody.css('overflow', 'hidden');

        // Menambahkan event listener ke tombol
        startButton.addEventListener('click', () => {
            // Hilangkan header overlay
            headerOverlay.style.display = 'none';
			// Tampilkan elemen sebelum memulai animasi
            setTimeout(() => {
                contentSection.classList.add('fade-in');
            }, 0);
            // Tampilkan konten halaman
            htmlBody.css('overflow', 'auto');

            // Mulai memutar audio
            audio.play()
                .then(() => {
                    console.log('Audio playback started successfully.');
                })
                .catch(error => {
                    console.error('Error attempting to play audio:', error);
                });
			
				
        });
    });
	function scrollToTop() {
        // Dapatkan elemen kontainer yang ingin digulir ke atas
        const container = document.getElementById('content-section');
        if (container) {
            container.scrollIntoView();
        }
    }

    // Event listener untuk menggulir ke bagian atas kontainer ketika halaman selesai dimuat
	window.addEventListener('load', function() {
        // Berikan sedikit penundaan sebelum menggulir
        setTimeout(scrollToTop, 0);
    });

</script>

@endsection
