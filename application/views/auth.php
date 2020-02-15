<body>

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php base_url() ?>assets/images/parallax/bgparallax-07.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>Authors</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">home</a></li>
								<li class="tg-active">Authors</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Authors Start
			*************************************-->
			<div class="tg-authorsgrid">
				<div class="container">
					<div class="row">
						<div class="tg-authors">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2><span>Author Books</span>Pengarang Buku</h2>
								</div>
							</div>
							<?php foreach ($pengarang as $pg) : ?>
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								
								

								<div class="tg-author">
									<figure><a href=""><img src="<?php echo base_url().'assets/images/books/'.$pg->foto_pengarang ?>" alt="image description"></a></figure>
									<div class="tg-authorcontent">
										<h2><?php echo $pg->nama_pengarang ?></h2>
										<span><?php echo $pg->email ?></span>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>

							

							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Authors End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Picked By Author Start
			*************************************-->
			
			<!--************************************
					Picked By Author End
			*************************************-->
		</main>
		
</body>
</html>