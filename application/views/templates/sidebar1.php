<body class="tg-home tg-homeone">
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<!-- <div class="tg-userlogin"></div> -->
							
						</div>
					</div>
				</div>
			</div>
			<div class="tg-middlecontainer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="index-2.html"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="company name here"></a></strong>
							<div class="tg-wishlistandcart">
								
								<button class="tg-btn tg-btnstyletwo tg-active"><?php echo anchor('auth/logout','logout'); ?><i class="fas fa-sign-out-alt">Logout</i></button>
								</a>
							</div>
							<div class="tg-searchbox">
								<form class="tg-formtheme tg-formsearch">
									<fieldset>
										<?php echo form_open('admin/data_buku/search') ?>
										<input type="text" name="cari" class="form-control" placeholder="search">
										<button type="submit"><i class="icon-magnifier"></i></button>
										<?php echo form_close() ?>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="menu-item-has-children menu-item-has-mega-menu">
											<a href="javascript:void(0);">All Categories</a>
											<div class="mega-menu">
												<ul class="tg-themetabnav" role="tablist">
													<li role="presentation" class="active">
														<a href="#artandphotography" aria-controls="artandphotography" role="tab" data-toggle="tab">Kategori Buku</a>
													</li>
												</ul>
												<div class="tab-content tg-themetabcontent">
													<div role="tabpanel" class="tab-pane active" id="artandphotography">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Kategori Buku</h2>
																</div>
																<ul>
																	<li><a href="<?php base_url() ?>agama">Agama</a></li>
																	<li><a href="<?php base_url() ?>novel">Novel</a></li>
																	<li><a href="<?php base_url() ?>komik">Komik</a></li>
																	<li><a href="<?php base_url() ?>edukasi">Edukasi</a></li>
																	<li><a href="<?php base_url() ?>sport">Sport</a></li>
																	<li><a href="<?php base_url() ?>ensiklopedia">Ensiklopedia</a></li>
																	<li><a href="<?php base_url() ?>dongeng">Dongeng</a></li>
																	<li><a href="<?php base_url() ?>biographi">Biographi</a></li>
																	<li><a href="<?php base_url() ?>fotographi">Fotography</a></li>
																</ul>
															</li>
														</ul>
														<ul>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="biography">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="childrensbook">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="craftandhobbies">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="crimethriller">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fantasyhorror">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fiction">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fooddrink">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="graphicanimemanga">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="sciencefiction">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.html">Veniam quis nostrud</a></li>
																	<li><a href="products.html">Exercitation</a></li>
																	<li><a href="products.html">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.html">Commodo conseat</a></li>
																	<li><a href="products.html">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.html">Tough As Nails</a></li>
																	<li><a href="products.html">Pro Grease Monkey</a></li>
																	<li><a href="products.html">Building Memories</a></li>
																	<li><a href="products.html">Bulldozer Boyz</a></li>
																	<li><a href="products.html">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.html">Consectetur adipisicing</a></li>
																	<li><a href="products.html">Aelit sed do eiusmod</a></li>
																	<li><a href="products.html">Tempor incididunt labore</a></li>
																	<li><a href="products.html">Dolore magna aliqua</a></li>
																	<li><a href="products.html">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.html">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.html">view all</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li><a href="<?php base_url() ?>praindex">Home</a></li>
										<li><a href="<?php base_url() ?>tampil_auth">Author</a></li>
										<li><a href="<?php base_url() ?>keluhan">Keluhan</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>