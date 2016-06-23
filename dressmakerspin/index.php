<?php get_header(); ?>

<div class="container categories">

		<!-- Wyróżnione wpisy
		<section class="blog-header">
			<article class="header-container">

				<!-- Znak strony
				<img class="logo2" src="assets/images/logo2.png" alt="logo2" height="350">

				<!-- Slider
				<div class="slider-box">

					<div class="slides">
						<a href="post.html">
							<div class="header-photo"></div>
							<div class="header-title">
								<time class="lead blog-description">2 / 05</time>
								<h1 class="blog-title">Chcemy być modne, ale bez wydawania pieniędzy</h1>
								<div class="blog-title-border"></div>
							</div>
						</a>
					</div>
					<div class="slides first-hide">
						<a href="post.html">
							<div class="header-photo two"></div>
							<div class="header-title">
								<time class="lead blog-description">10 / 05</time>
								<h1 class="blog-title">Poważny temat numer dwa</h1>
								<div class="blog-title-border"></div>
							</div>
						</a>
					</div>
					<div class="slides first-hide">
						<a href="post.html">
							<div class="header-photo three"></div>
							<div class="header-title">
								<time class="lead blog-description">1 / 05</time>
								<h1 class="blog-title">Poważny temat numer trzy</h1>
								<div class="blog-title-border"></div>
							</div>
						</a>
					</div>

				</div>

			</article>
		</section> -->

		<div class="row">

			<!-- Lista postów -->
			<section class="col-sm-8 blog-main">

				<?php if(have_posts()) : ?>
				<?php $count = 0; ?>
		   		<?php while(have_posts()) : the_post(); ?>
				<?php $count++; ?>

					<?php if ($count == 2) : ?>

						<blockquote class="blockquote-featured">
							<div class="reference-container">
								<p class="reference-blockquote">POLECAM</p>
								<div class="reference-border"></div>
							</div>
							<div class="blockquote-container">
								<p class="blockquote-paragraph">“Daj mi właściwe słowo i odpowiedni akcent, a poruszę świat.”</p>
								<p class="blockquote-link">
									<strong>
										<a href="http://www.complex.com/" target="_blank">www.complex.com</a>
									</strong>
								</p>
							</div>
						</blockquote>

						<article class="blog-post" id="post-<?php the_ID(); ?>">

							<p class="blog-post-meta"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a><time><?php the_time('d / m'); ?></time></p>

							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title('<h2 class="blog-post-title">','</h2>'); ?>
							</a>

							<p><?php the_excerpt();?></p>

						</article>	<!-- /.blog-post -->

					<?php else : ?>

						<article class="blog-post" id="post-<?php the_ID(); ?>">

							<p class="blog-post-meta"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a><time><?php the_time('d / m'); ?></time></p>

							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title('<h2 class="blog-post-title">','</h2>'); ?>
							</a>

							<p><?php the_excerpt();?></p>

						</article>	<!-- /.blog-post -->

					<?php endif; ?>

		   		<?php endwhile; ?>

				<?php if (!is_singular()) : ?>
					<nav>
						<ul class="pager">
							<li><?php previous_posts_link( '<span class="fa fa-arrow-left"></span> Nowsze posty' ); ?></li>
							<li><?php next_posts_link( 'Starsze posty <span class="fa fa-arrow-right"></span>' ); ?></li>
						</ul>
					</nav>
				<?php endif; ?>

				<?php else : ?>

				<article class="subpages-article">

					<h1 class="subpages-title">Nie znaleziono żadnych wpisów :-(</h1>

					<p class="profile-description subpage"><strong>Nie przejmuj się! Być może jest to chwilowy błąd.</strong><br>Jeśli chcesz możesz wejść na moją stronę główną <a href="<?php echo home_url(); ?>">klikając tutaj</a> :-)</p>

				</article>

				<?php endif; ?>

			</section>	<!-- /.blog-main -->

			<!-- Sidebar -->
			<?php get_sidebar(); ?>

		</div>	<!-- /.row -->

</div>	<!-- /.container -->

<?php get_footer(); ?>
