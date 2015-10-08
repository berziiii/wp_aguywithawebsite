<?php get_header(); ?>

<main>
	<div class="main-container">
		<div id="home"class="hero-banner">
			<div class="hero-title">
				<h1>Just a Guy with a Website</h1>
			</div>
			<div class="hero-content-container">
				<div class="hero-content">
					<h1 class="hero-subtitle">Refreshingly Simple.</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="main-container">
		<div class="about-wrapper row">
			<div class="main-content col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
				<h1 id="about">About</h1>
				<div class="about-container">
					<h3>The Guy...</h3>
					<p>
						My name is Joey Pietropaoli, I am 27 years old and as of the inaugural post on this blog, a first year medical student at Ross University in the town of Portsmouth on the island of Dominica.  Originally from Baltimore, I called the Reno/Tahoe area home for a year and a half before an acceptance letter had me trading in bottomless powder snow, California wine, the Truckee River, and tan-providing desert sun for a white coat, untouched rain forest, cool Caribbean trade winds, and tan-providing island sun.  Alpine paradise to tropical paradise…no problem mon!  I decided to start this blog because the title “Caribbean Doctor Mon” was available on WordPress and so I deemed it fate.  Additionally, one might say a blog is the best way to share my stories and pictures with friends, family, and anyone else who may stumble upon my musings.  Nevertheless, whoever you may be and whatever your reasons are for reading, I welcome you to join me on my journey.
					</p>
					<p>
						Enjoy…
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="main-container">
		<div class="blog-sample-wrapper row">
			<div class="main-content col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
				<h1 id="blog">Blog</h1>
				<div class="blog-sample-container">
					<div class="search-container">
						<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<a href="/caribbean-doctor-mon/">
							<div class="blog-sample">
								<div class="blog-doctor-mon">
									<h4 class="blog-caption">Caribbean Doctor Mon</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<a href="/11000-2">
							<div class="blog-sample">
								<div class="blog-1-1000">
									<h4 class="blog-caption">1:1000</h4>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>