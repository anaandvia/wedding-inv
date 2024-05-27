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
		background-color: fh5co-couple
		color: white;
		display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;
		z-index: 9999;
	}
	#header-overlay h1 {
		margin-bottom: 20px;
	}
	
	#imgd {
		justify-content: center;
		align-items: center;
		text-align: center;
	}
	.mb-2 {
        margin-bottom: 20px;  /* Adjust as necessary */
    }
	.img-circle-with-border {
            border: 2px solid #fff; /* Adjust the border properties as needed */
            border-radius: 50%; /* Ensure the border forms a circle */
            overflow: hidden; /* Ensure the image stays within the circle */
        }
.btn-buka{
	color: bisque;
}

.fh5co-header .display-tc p{
 color: #fff;
}
		
</style>
 <!-- Header Overlay -->
 <div id="header-overlay">
		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/OIG1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Dedi &amp; Fifa</h1>
								<h2>We Are Getting Married</h2>
								<div class="col-md-12 text-center mb-2">
									<img id="imgd" src="images/poto.png" alt="couple" width="33%" class="img-circle-with-border img-responsive center-block">
								</div>
								<p><a id="start-button" href="#" class="btn btn-sm">Buka Undangan</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
</div>

<!-- Elemen Audio -->
<audio id="autoplayAudio" controls style="display: none;">
	<source src="{{ asset('/music/test.mp3') }}" type="audio/mpeg">
	Your browser does not support the audio element.
</audio>

<!-- Konten halaman -->
<div id="content-section">
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/OIG1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Dedi &amp; Fifa</h1>
							<h2>We Are Getting Married</h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Resepsi Pernikahan</h2>
					<h3>June 21th, 2024 </h3>
					<p>Perum Griya Permata Blok C 171</p>
					<a class="btn btn-default btn-sm btn-gold" href="https://maps.app.goo.gl/EZwFYNP9dbV7ooxD7">Lokasi Acara</a>
					{{-- <p>We invited you to celebrate our wedding</p> --}}
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/dedipp.png" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Dedi Susanto</h3>
						<p>Putra dari Pasangan Bpk Safriyanto & dan Alm. Ibu Mahwanti</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/fifapp.png" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Nur Hanani Afifah</h3>
						<p>Putri dari Pasangan Bpk M.Mas'ud & Ibu Tutik Mardiyani</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/OIG1.jpg);">
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
										<span>Jum'at, 21 Juni</span>
										<span>2024</span>
									</div>
									<p>Kediaman Mempelai Wanita</p><p>Perum Griya Permata Blok C 171, Kel. Sungai Langkai, Kec. Sagulung, Kota Batam, Provinsi Kepulauan Riau</p>
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
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/couple-1.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">First We Meet</h3>
									<span class="date">December 25, 2015</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/couple-2.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">First Date</h3>
									<span class="date">December 28, 2015</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/couple-3.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">In A Relationship</h3>
									<span class="date">January 1, 2016</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
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
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">
						
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/g1.jpg); "> 
						<a href="#">
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/g2.jpg); ">
						<a href="#" class="color-2">
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/g8.jpg); ">
						<a href="#" class="color-3">
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/g7.jpg); ">
						<a href="#" class="color-4">
						</a>
					</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/g5.jpg); ">
							<a href="#" class="color-3">
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/g4.jpg); ">
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

								<span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Estimated Guest</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-user"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">We Catter</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-calendar"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Events Done</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
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
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
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
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
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
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
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
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
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
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>Photoshoot</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>Video Editing</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 animate-box">
					<div class="fh5co-video fh5co-bg" style="background-image: url(images/OIG1.jpg); ">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
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
	document.addEventListener('DOMContentLoaded', (event) => {
		const audio = document.getElementById('autoplayAudio');
		const headerOverlay = document.getElementById('header-overlay');
		const contentSection = document.getElementById('content-section');
		const startButton = document.getElementById('start-button');

		// Mengatur audio untuk tidak di-mute
		audio.muted = false;

		// Menambahkan event listener ke tombol
		startButton.addEventListener('click', () => {
			// Hilangkan header overlay
			headerOverlay.style.display = 'none';
			
			// Tampilkan konten halaman
// 			setTimeout(function() {
//   contentSection.style.display = 'block';
// }, 10); 
			
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
</script>
	{{-- <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const audio = document.getElementById('autoplayAudio');
            const playButton = document.getElementById('play-audio-button');

            // Mengatur audio untuk tidak di-mute
            audio.muted = false;

            // Menambahkan event listener ke tombol
            playButton.addEventListener('click', () => {
                audio.play()
                    .then(() => {
                        console.log('Audio playback started successfully.');
                        playButton.style.display = 'none'; // Sembunyikan tombol setelah diklik
                    })
                    .catch(error => {
                        console.error('Error attempting to play audio:', error);
                    });
            });
        });
    </script> --}}

	@endsection