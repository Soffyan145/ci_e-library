		<div id="tg-homeslider" class="tg-homeslider tg-haslayout owl-carousel">
			<div class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 0% 50%">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
							<div class="tg-slidercontent">
								<figure class="tg-authorimg"><a href="javascript:void(0);"><img src="<?php echo base_url() ?>assets/images/author/imag-01.jpg" alt="image description"></a></figure>
								<h1>Jude Morphew</h1>
								<h2>Latest 2017 Release</h2>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn" href="<?php base_url() ?>auth/login">Login untuk Request buku</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 0% 50%">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
							<div class="tg-slidercontent">
								<figure class="tg-authorimg"><a href="javascript:void(0);"><img src="<?php echo base_url() ?>assets/images/author/imag-01.jpg" alt="image description"></a></figure>
								<h1>Jude Morphew</h1>
								<h2>Latest 2017 Release</h2>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn" href="<?php base_url() ?>auth/login">Login untuk Request buku</a>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
		<main id="tg-main" class="tg-main tg-haslayout">
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>People’s Choice</span>Bestselling Books</h2>
								<a class="tg-btn" href="<?php echo base_url('all_books') ?>">View All</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
								<?php foreach($buku as $bk) : ?>
								<div class="item">
									<div class="tg-postbook">
										<figure class="tg-featureimg">
											<div class="tg-bookimg">
												<div class="tg-frontcover">
													<img src="<?php echo base_url().'assets/images/books/'.$bk->foto ?>">
												</div>
												<div class="tg-backcover">
													<img src="<?php echo base_url().'assets/images/books/'.$bk->foto ?>"></div>
											</div>
											<a class="tg-btnaddtowishlist" href="javascript:void(0);">
												<span><?php echo $bk->judul_buku ?></span>
											</a>
										</figure>
										<div class="tg-postbookcontent">
											<ul class="tg-bookscategories">
												<li><a href="javascript:void(0);"><?= $bk->kategori ?></a></li>
											</ul>
											<div class="tg-booktitle">
												<h3><a href="javascript:void(0);"><?= $bk->judul_buku ?></a></h3>
											</div>
											<span class="tg-bookwriter">By: <?= $bk->nama_pengarang ?></a></span>
											<a href="<?= $bk->link  ?>" class="tg-btn tg-btnstyletwo" target="_blank">Baca Sekarang</a>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/images/parallax/bgparallax-04.jpg">
				<div class="tg-sectionspace tg-collectioncount tg-haslayout">
					<div class="container">
						<div class="row">
							<div id="tg-collectioncounters" class="tg-collectioncounters">
								<div class="tg-collectioncounter tg-drama">
									<div class="tg-collectioncountericon">
										<i class="icon-books"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Total Buku</h2>
										<h3 data-from="0" data-to="<?php echo $total_buku ?>" data-speed="1300" data-refresh-interval="50"><?php echo $total_buku; ?></h3>
									</div>
								</div>
								<div class="tg-collectioncounter tg-horror">
									<div class="tg-collectioncountericon">
										<i class="icon-heart-pulse"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Pengarang</h2>
										<h3 data-from="0" data-to="<?php echo $total_pengarang ?>" data-speed="1300" data-refresh-interval="50"><?php echo $total_pengarang; ?></h3>
									</div>
								</div>
								<div class="tg-collectioncounter tg-romance">
									<div class="tg-collectioncountericon">
										<i class="icon-heart"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Anggota Perpus</h2>
										<h3 data-from="0" data-to="<?php echo $total_anggota ?>" data-speed="1300" data-refresh-interval="50"><?php echo $total_anggota; ?></h3>
									</div>
								</div>
								<div class="tg-collectioncounter tg-fashion">
									<div class="tg-collectioncountericon">
										<i class="icon-star"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Request</h2>
										<h3 data-from="0" data-to="<?php echo $total_request ?>" data-speed="1300" data-refresh-interval="50"><?php echo $total_request; ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Some Great Books</span>Picked By Authors</h2>
								<a class="tg-btn" href="<?php echo base_url('all_books') ?>">View All</a>
							</div>
						</div>
						<div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
							<?php foreach($buku as $bk) : ?>
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="<?php echo base_url().'assets/images/books/'.$bk->foto ?>"></div>
										</div>
										<div class="tg-hovercontent">
											<div class="tg-description">
												<p><?php echo $bk->sinopsis ?></p>
											</div>
											<strong class="tg-bookpage">Book Pages: 206</strong>
											<strong class="tg-bookcategory">Category: <?php echo $bk->kategori ?></strong>
										</div>
									</figure>
									<div class="tg-postbookcontent">
										<div class="tg-booktitle">
											<h3><a href="javascript:void(0);"><?= $bk->judul_buku  ?></a></h3>
										</div>
										<span class="tg-bookwriter">By: <a href="javascript:void(0);"><?= $bk->nama_pengarang ?></a></span>
										<a href="<?= $bk->link  ?>" class="tg-btn tg-btnstyletwo" target="_blank">Baca Sekarang</a>
										</a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Picked By Author End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/images/parallax/bgparallax-05.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
								<div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
									<div class="item tg-testimonial">
										<figure><img src="<?php echo base_url() ?>assets/images/author/imag-02.jpg" alt="image description"></figure>
										<blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
										<div class="tg-testimonialauthor">
											<h3>Holli Fenstermacher</h3>
											<span>Manager @ CIFP</span>
										</div>
									</div>
									<div class="item tg-testimonial">
										<figure><img src="<?php echo base_url() ?>assets/images/author/imag-02.jpg" alt="image description"></figure>
										<blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
										<div class="tg-testimonialauthor">
											<h3>Holli Fenstermacher</h3>
											<span>Manager @ CIFP</span>
										</div>
									</div>
									<div class="item tg-testimonial">
										<figure><img src="<?php echo base_url() ?>assets/images/author/imag-02.jpg" alt="image description"></figure>
										<blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
										<div class="tg-testimonialauthor">
											<h3>Holli Fenstermacher</h3>
											<span>Manager @ CIFP</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Authors Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Penulis Buku</span>Outhor Books</h2>
								<a class="tg-btn" href="javascript:void(0);">View All</a>
							</div>
						</div>
						<div id="tg-authorsslider" class="tg-authors tg-authorsslider owl-carousel">
							<?php foreach($pengarang as $pg) : ?>
							<div class="item tg-author">
								<figure><img src="<?php echo base_url().'assets/images/books/'.$pg->foto_pengarang ?>"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);"><?php echo $pg->nama_pengarang ?></a></h2>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</section>
			<section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/images/parallax/bgparallax-06.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>