		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php base_url() ?>assets/images/parallax/bgparallax-07.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>Semua Buku</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">home</a></li>
								<li class="tg-active">Komik</li>
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
					News Grid Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-twocolumns" class="tg-twocolumns">
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
								<div id="tg-content" class="tg-content">
									<div class="tg-products">
										<div class="tg-sectionhead">
											<h2><span>All Books</span>Komik</h2>
										</div>
<!-- =================================================================================== -->
								
										<div class="tg-productgrid">
											<?php foreach ($buku as $bk) : ?>
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
												<div class="tg-postbook">
													<figure class="tg-featureimg">
														<div class="tg-bookimg">
															<div class="tg-frontcover"><img src="<?php echo base_url().'assets/images/books/'.$bk->foto ?>" alt="image description"></div>
															<div class="tg-backcover"><img src="<?php echo base_url().'assets/images/books/'.$bk->foto ?>" alt="image description"></div>
														</div>
														<a class="tg-btnaddtowishlist" href="javascript:void(0);">
															<i class="icon-heart"></i>
															<span>add to wishlist</span>
														</a>
													</figure>
													<div class="tg-postbookcontent">
														<ul class="tg-bookscategories">
															<li><a href="javascript:void(0);"><?= $bk->kategori ?></a></li>
														</ul>
														<div class="tg-booktitle">
															<h3><a href="javascript:void(0);"><?= $bk->judul_buku ?></a></h3>
														</div>
														<!-- <span class="tg-bookwriter">By: <a href="javascript:void(0);"><?= $bk->pengarang ?></a></span> -->
														<span class="tg-stars"><span></span></span>
														<span class="tg-bookprice">
														</span>
														<a href="<?= $bk->link  ?>" class="tg-btn tg-books" target="_blank">Baca Sekarang</a>
													</div>
												</div>
											</div>
											
<!-- ============================================================================= -->
<?php endforeach; ?>
										</div>
									
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
								<aside id="tg-sidebar" class="tg-sidebar">
									<div class="tg-widget tg-catagories">
										<div class="tg-widgettitle">
											<h3>Kategori</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
												<li><a href="<?php base_url() ?>novel"><span>Novel</span><em><?php echo $total_buku_novel ?></em></a></li>
												<li><a href="<?php base_url() ?>agama"><span>Agama</span><em><?php echo $total_buku_agama ?></em></a></li>
												<li><a href="<?php base_url() ?>komik"><span>Komik</span><em><?php echo $total_buku_komik ?></em></a></li>
												<li><a href="<?php base_url() ?>edukasi"><span>Edukasi</span><em><?php echo $total_buku_edukasi ?></em></a></li>
												<li><a href="<?php base_url() ?>sport"><span>Sport</span><em><?php echo $total_buku_sport ?></em></a></li>
												<li><a href="<?php base_url() ?>ensiklopedia"><span>Ensiklopedia</span><em><?php echo $total_buku_ensiklopedia ?></em></a></li>
												<li><a href="<?php base_url() ?>dongeng"><span>Dongeng</span><em><?php echo $total_buku_dongeng ?></em></a></li>
												<li><a href="<?php base_url() ?>biographi"><span>Biographi</span><em><?php echo $total_buku_biographi ?></em></a></li>
												<li><a href="<?php base_url() ?>fotographi"><span>Fotographi</span><em><?php echo $total_buku_fotographi ?></em></a></li>
											</ul>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					News Grid End
			*************************************-->
		</main>