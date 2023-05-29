<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Tour Detail</title>
	<link rel="icon" href="assetscontent/img/thumb.png" type="image/png">

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="assetscontent/plugins/css/plugins.css">

	<!-- Custom style -->
	<link href="assetscontent/css/style.css" rel="stylesheet">
	<link href="assetscontent/css/responsiveness.css" rel="stylesheet">
	<link id="jssDefault" rel="stylesheet" href="assetscontent/css/skins/default.css">

</head>

<body>

	<!-- ======================= Start Navigation ===================== -->
	<nav class="navbar navbar-default navbar-mobile navbar-fixed light bootsnav">
		<div class="container">

			<!-- Start Logo Header Navigation -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="index.php">
					<img src="assetscontent/img/logo-wm.png" class="logo logo-display" alt="wisatamalang" style="width : 80%">
					<img src="assetscontent/img/logo-wm.png" class="logo logo-scrolled" alt="wisatamalang" style="width : 80%">
				</a>

			</div>
			<!-- End Logo Header Navigation -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-menu">



				<ul class="nav navbar-nav navbar-right">
					<?php
					session_start(); // Start the session

					// Check if the 'username' key exists in the $_SESSION array
					if (!isset($_SESSION['username'])) {
					?>
						<li><a href="register.php"><b>SIGN UP</b></a></li>
						<li><a href="login.php"><b>LOG IN</b></a></li>
					<?php
					} else {

					?>
						<li><a><b>Welcome, <?php echo $_SESSION['username']; ?></b></a></li>
						<li><a href="logout.php"><b>LOG OUT</b></a></li>
					<?php
					}
					?>
				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- ======================= End Navigation ===================== -->

	<!-- ======================= Start Banner ===================== -->
	<section class="page-title-banner" style="background-image:url(assetscontent/img/mountainous-landscape-with-fog.jpg);">
		<div class="container">
			<div class="row">
				<div class="tr-list-detail">
					<div class="tr-list-info">
						<h4>Gunung Bromo</h4>
						<p>Jawa Timur</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================= End Banner ===================== -->

	<!-- ======================= Start Detail Header ===================== -->
	<section class="profile-header-nav padd-0 bb-1">
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-sm-8">
					<div class="tab" role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#Overview" aria-controls="home" role="tab" data-toggle="tab"><i class="ti-user"></i>Overview</a></li>
							<li role="presentation"><a href="#Features" aria-controls="profile" role="tab" data-toggle="tab"><i class="ti-settings"></i>Features</a></li>
							<li role="presentation"><a href="#Review" aria-controls="messages" role="tab" data-toggle="tab"><i class="ti-thumb-up"></i>Review</a></li>
							<li role="presentation"><a href="#Photos" aria-controls="messages" role="tab" data-toggle="tab"><i class="ti-gallery"></i>Photos</a></li>
						</ul>
						<!-- Tab panes -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================= End Detail Header ===================== -->

	<!-- ======================= Start Detail ===================== -->
	<section class="tr-single-detail gray-bg">
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-sm-12">
					<div class="tab-content tabs">

						<div role="tabpanel" class="tab-pane fade in active" id="Overview">

							<!-- Overview -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="fa fa-star-o"></i>Overview</h4>
									</div>
									<div class="tr-single-body">
										<div class="row">

											<div class="col-md-6 col-sm-6">
												<div class="list-thumb-box">
													<img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/07/16/tiket-masuk-wisata-gunung-bromo-20220716075301.jpg" class="img-responsive" alt="" />
													<a href="#" class="list-like left"><i class="ti-heart"></i></a>
													<h5>4.8/<sub class="theme-cl">5</sub></h5>
												</div>
											</div>

											<div class="col-md-6 col-sm-6">
												<div class="list-overview-detail">
													<h5>Gunung Bromo</h5>
													<ul class="extra-service">
														<li>
															<div class="icon-box-icon-block">
																<a href="#">
																	<div class="icon-box-round">
																		<i class=" ti-location-pin"></i>
																	</div>
																	<div class="icon-box-text">
																		Area Gn. Bromo, Podokoyo, Pasuruan, Jawa Timur
																	</div>
																</a>
															</div>
														</li>

														<li>
															<div class="icon-box-icon-block">
																<a href="#">
																	<div class="icon-box-round">
																		<i class="ti-email"></i>
																	</div>
																	<div class="icon-box-text">
																		wisatamalang@domain.com
																	</div>
																</a>
															</div>
														</li>

														<li>
															<div class="icon-box-icon-block">
																<a href="#">
																	<div class="icon-box-round">
																		<i class="ti-headphone-alt"></i>
																	</div>
																	<div class="icon-box-text">
																		0812345678
																	</div>
																</a>
															</div>
														</li>

														<li>
															<div class="icon-box-icon-block">
																<a href="#">
																	<div class="icon-box-round">
																		<i class="ti-share"></i>
																	</div>
																	<div class="icon-box-text">
																		9.693 Share
																	</div>
																</a>
															</div>
														</li>

														<li>
															<div class="icon-box-icon-block">
																<a href="#">
																	<div class="icon-box-round">
																		<i class="ti-comment-alt"></i>
																	</div>
																	<div class="icon-box-text">
																		7.585 comments
																	</div>
																</a>
															</div>
														</li>

													</ul>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

							<!-- Overview -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="fa fa-star-o"></i>Rating</h4>
									</div>
									<div class="tr-single-body">
										<div class="row">
											<div class="col-sm-4">
												<div id="review_summary">
													<strong>9.2</strong>
													<em class="cl-success">Superb</em>
													<small>Based on 13.625 Review</small>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="row">
													<div class="col-lg-10 col-9">
														<div class="progress">
															<div class="progress-bar progress-bar-success" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small>
													</div>
												</div>
												<!-- /row -->
												<div class="row">
													<div class="col-lg-10 col-9">
														<div class="progress">
															<div class="progress-bar progress-bar-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small>
													</div>
												</div>
												<!-- /row -->
												<div class="row">
													<div class="col-lg-10 col-9">
														<div class="progress">
															<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small>
													</div>
												</div>
												<!-- /row -->
												<div class="row">
													<div class="col-lg-10 col-9">
														<div class="progress">
															<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small>
													</div>
												</div>
												<!-- /row -->
												<div class="row">
													<div class="col-lg-10 col-9">
														<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small>
													</div>
												</div>
												<!-- /row -->
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Description -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-files"></i>Description</h4>
									</div>
									<div class="tr-single-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit,
											massa eu imperdiet pulvinar, velit arcu molestie nunc, et molestie tellus
											ipsum nec eros. Nam efficitur tellus at urna aliquam, at cursus augue
											interdum. Proin nec massa orci. Sed faucibus in dolor vel luctus. Integer
											tincidunt erat augue, non aliquam tellus congue sit amet. Etiam fermentum
											neque urna, fermentum feugiat massa gravida sed. Maecenas vestibulum, arcu
											ac scelerisque venenatis, nisi tellus scelerisque neque, at placerat nisi
											nibh quis leo. Cras aliquam sodales dui, nec gravida risus.</p>
										<p>Integer et quam vitae lectus sagittis tristique. Class aptent taciti sociosqu
											ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque
											tristique molestie rutrum. Pellentesque elementum quam in molestie
											hendrerit. Sed eu dui sed erat efficitur vulputate nec in magna. Fusce
											aliquam, purus id eleifend malesuada, tellus nulla tempus lacus, ultricies
											volutpat mi diam nec nisl. Nullam ultrices lectus mi, at scelerisque odio
											sodales et.</p>
									</div>
								</div>
							</div>

							<!-- Amenities -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-crown"></i>Facilities</h4>
									</div>
									<div class="tr-single-body">
										<ul class="amenities third">
											<li>Guides</li>
											<li>Meals</li>
											<li>Toilet</li>
											<li>Shop</li>
											<li>Rental</li>
											<li>Transportation</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Location -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-map-alt"></i>Location</h4>
									</div>
									<div class="tr-single-body">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.180047325457!2d112.94271244575444!3d-7.942493323305622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e0!3m2!1sid!2sid!4v1685368132616!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										<!-- <div class="height-350" id="singleMap" data-latitude="-7.942965" data-longitude="112.953186" data-mapTitle="Our Location"></div> -->
									</div>
								</div>
							</div>

						</div>

						<!-- ============ Features =================== -->
						<div role="tabpanel" class="tab-pane fade in" id="Features">

							<!-- About Features -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-files"></i>About Features</h4>
									</div>
									<div class="tr-single-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit,
											massa eu imperdiet pulvinar, velit arcu molestie nunc, et molestie tellus
											ipsum nec eros. Nam efficitur tellus at urna aliquam, at cursus augue
											interdum. Proin nec massa orci. Sed faucibus in dolor vel luctus. Integer
											tincidunt erat augue, non aliquam tellus congue sit amet. Etiam fermentum
											neque urna, fermentum feugiat massa gravida sed. Maecenas vestibulum, arcu
											ac scelerisque venenatis, nisi tellus scelerisque neque, at placerat nisi
											nibh quis leo. Cras aliquam sodales dui, nec gravida risus.</p>
									</div>
								</div>
							</div>

							<!-- Extra features -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-thumb-up"></i>Extra Features</h4>
									</div>
									<div class="tr-single-body">

										<ul class="simple-features-list">
											<li>Lorem ipsum</li>
											<li>Lorem ipsum</li>
											<li>Lorem ipsum</li>
											<li>Lorem ipsum</li>
											<li>Lorem ipsum</li>
											<li>Lorem ipsum</li>
											<li>Lorem ipsum</li>
											<li>Lorem ipsum</li>
										</ul>

									</div>
								</div>
							</div>

						</div>

						<!-- ============ Review =================== -->
						<div role="tabpanel" class="tab-pane fade in" id="Review">

							<!-- Review -->
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-write"></i>All Review</h4>
									</div>
									<div class="tr-single-body">

										<!-- Single Review -->
										<div class="review-box">
											<div class="review-thumb">
												<img src="assetscontent/img/user-1.jpg" class="img-responsive img-circle" alt="" />
											</div>

											<div class="review-box-content">
												<div class="reviewer-rate">
													<p><i class="fa fa-star cl-warning"></i>4.7/<span>5</span></p>
												</div>
												<div class="review-user-info">
													<h4>Daniel Dicoss</h4>
													<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
														Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
														Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
												</div>
												<div class="review-lc text-right">
													<a href="#"><i class="ti-heart"></i>87</a>
													<a href="#"><i class="ti-comment"></i>52</a>
												</div>
											</div>

										</div>

										<!-- Single Review -->
										<div class="review-box">
											<div class="review-thumb">
												<img src="assetscontent/img/user-2.jpg" class="img-responsive img-circle" alt="" />
											</div>

											<div class="review-box-content">
												<div class="reviewer-rate">
													<p><i class="fa fa-star cl-warning"></i>4.4/<span>5</span></p>
												</div>
												<div class="review-user-info">
													<h4>Archita Singh</h4>
													<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
														Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
														Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
												</div>
												<div class="review-lc text-right">
													<a href="#"><i class="ti-heart"></i>65</a>
													<a href="#"><i class="ti-comment"></i>78</a>
												</div>
											</div>

										</div>

										<!-- Single Review -->
										<div class="review-box">
											<div class="review-thumb">
												<img src="assetscontent/img/user-3.jpg" class="img-responsive img-circle" alt="" />
											</div>

											<div class="review-box-content">
												<div class="reviewer-rate">
													<p><i class="fa fa-star cl-warning"></i>5.0/<span>5</span></p>
												</div>
												<div class="review-user-info">
													<h4>Devesh Patri</h4>
													<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
														Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
														Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
												</div>
												<div class="review-lc text-right">
													<a href="#"><i class="ti-heart"></i>110</a>
													<a href="#"><i class="ti-comment"></i>47</a>
												</div>
											</div>

										</div>

										<!-- Single Review -->
										<div class="review-box">
											<div class="review-thumb">
												<img src="assetscontent/img/user-4.jpg" class="img-responsive img-circle" alt="" />
											</div>

											<div class="review-box-content">
												<div class="reviewer-rate">
													<p><i class="fa fa-star cl-warning"></i>4.9/<span>5</span></p>
												</div>
												<div class="review-user-info">
													<h4>Ruchi Sethi</h4>
													<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
														Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
														Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
												</div>
												<div class="review-lc text-right">
													<a href="#"><i class="ti-heart"></i>120</a>
													<a href="#"><i class="ti-comment"></i>36</a>
												</div>
											</div>

										</div>

										<!-- Single Review -->
										<div class="review-box">
											<div class="review-thumb">
												<img src="assetscontent/img/user-5.jpg" class="img-responsive img-circle" alt="" />
											</div>

											<div class="review-box-content">
												<div class="reviewer-rate">
													<p><i class="fa fa-star cl-warning"></i>4.8/<span>5</span></p>
												</div>
												<div class="review-user-info">
													<h4>Duke Divalkis</h4>
													<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
														Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
														Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
												</div>
												<div class="review-lc text-right">
													<a href="#"><i class="ti-heart"></i>80</a>
													<a href="#"><i class="ti-comment"></i>70</a>
												</div>
											</div>

										</div>

										<!-- Single Review -->
										<div class="review-box">
											<div class="review-thumb">
												<img src="assetscontent/img/user-6.jpg" class="img-responsive img-circle" alt="" />
											</div>

											<div class="review-box-content">
												<div class="reviewer-rate">
													<p><i class="fa fa-star cl-warning"></i>4.7/<span>5</span></p>
												</div>
												<div class="review-user-info">
													<h4>Shilka Rai</h4>
													<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
														Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
														Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
												</div>
												<div class="review-lc text-right">
													<a href="#"><i class="ti-heart"></i>120</a>
													<a href="#"><i class="ti-comment"></i>140</a>
												</div>
											</div>

										</div>

										<!-- Comment Textbox -->
										<?php
										if (!isset($_SESSION['username'])) {
										?>
											<div></div>
										<?php
										} else {
										?>
											<form action="" method="post">
												<h4>Comment</h4>
												<textarea name="" id="" style="height: 100px; width: 750px; border-radius: 5px;"></textarea> <br>
												<input type="submit" value="Submit" formaction="" style="color: #fff; background: crimson; border-radius: 5px;">
											</form>
										<?php
										}
										?>

									</div>

								</div>

							</div>

						</div>

						<!-- ============ Photos =================== -->
						<div role="tabpanel" class="tab-pane fade in" id="Photos">
							<div class="row">
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-gallery"></i>All Gallery</h4>
									</div>
									<div class="tr-single-body">
										<ul class="gallery-list">
											<li>
												<a data-fancybox="gallery" href="assetscontent/img/bromo1.jpg">
													<img src="assetscontent/img/bromo1.jpg" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="assetscontent/img/bromo2.jpg">
													<img src="assetscontent/img/bromo2.jpg" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="assetscontent/img/bromo3.jpg">
													<img src="assetscontent/img/bromo3.jpg" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="https://radarjember.jawapos.com/wp-content/uploads/2022/05/pendapatan-taman-nasional-bromo-tengger-semeru-capai-rp-27-miliar_m_-560x352-1.jpg">
													<img src="https://radarjember.jawapos.com/wp-content/uploads/2022/05/pendapatan-taman-nasional-bromo-tengger-semeru-capai-rp-27-miliar_m_-560x352-1.jpg" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="https://gaetlokal.id/cni-content/uploads/modules/posts/20201029085036.png">
													<img src="https://gaetlokal.id/cni-content/uploads/modules/posts/20201029085036.png" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="https://asset.kompas.com/crops/4eb8teuvt8A_mVll3I7ElxQGVPo=/0x0:1800x1200/750x500/data/photo/2021/05/10/609939a4dafef.jpg">
													<img src="https://asset.kompas.com/crops/4eb8teuvt8A_mVll3I7ElxQGVPo=/0x0:1800x1200/750x500/data/photo/2021/05/10/609939a4dafef.jpg" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="assetscontent/img/bromo5.jpg">
													<img src="assetscontent/img/bromo5.jpg" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="assetscontent/img/bromo6.jpg">
													<img src="assetscontent/img/bromo6.jpg" class="img-responsive" alt="">
												</a>
											</li>
											<li>
												<a data-fancybox="gallery" href="assetscontent/img/bromo7.jpg">
													<img src="assetscontent/img/bromo7.jpg" class="img-responsive" alt="">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Sidebar Start -->
				<div class="col-md-4 col-sm-12">

					<!-- Tourist Overview -->
					<div class="tr-single-box">
						<div class="tr-single-header">
							<h4>Gunung Bromo<sup class="cl-success">Jawa Timur</sup></h4>
						</div>

						<div class="tr-single-body">
							<ul class="extra-service half">
								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="ti-user"></i>
											</div>
											<div class="icon-box-text">
												Rp. 350.000
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="ti-timer"></i>
											</div>
											<div class="icon-box-text">
												Everyday
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="ti-eye"></i>
											</div>
											<div class="icon-box-text">
												14.567 View
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="ti-share"></i>
											</div>
											<div class="icon-box-text">
												9.693 Share
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="ti-comment-alt"></i>
											</div>
											<div class="icon-box-text">
												7.585 comments
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="ti-heart"></i>
											</div>
											<div class="icon-box-text">
												8.145 Likes
											</div>
										</a>
									</div>
								</li>

							</ul>
						</div>

					</div>

					<!-- overview  -->
					<div class="tr-single-box">
						<div class="tr-single-header">
							<div class="entry-meta">
								<div class="meta-item meta-comment fl-right">
									<div class="view-box">
										<div class="fl-right">
											<h4 class="font-20"><span class="theme-cl font-20">Rp350.000</span><sub>/
													Person</sub></h4>
										</div>
									</div>
								</div>
								<div class="meta-item meta-author">
									<div class="hotel-review entry-location">
										<span class="review-status bg-info"><i class="ti-check"></i></span>
										<h6><span class="cl-success font-bold">Superb</span>13.625 Review</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="tr-single-body">
						</div>
					</div>

					<!-- Share this -->
					<div class="tr-single-box">
						<div class="tr-single-header">
							<h4>Share this</h4>
						</div>

						<div class="tr-single-body">
							<ul class="extra-service half">
								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="fa fa-facebook"></i>
											</div>
											<div class="icon-box-text">
												Facebook
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="fa fa-google-plus"></i>
											</div>
											<div class="icon-box-text">
												Google plus
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="fa fa-twitter"></i>
											</div>
											<div class="icon-box-text">
												Twitter
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="fa fa-linkedin"></i>
											</div>
											<div class="icon-box-text">
												LinkedIn
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="fa fa-instagram"></i>
											</div>
											<div class="icon-box-text">
												Instagram
											</div>
										</a>
									</div>
								</li>

								<li>
									<div class="icon-box-icon-block">
										<a href="#">
											<div class="icon-box-round">
												<i class="fa fa-pinterest"></i>
											</div>
											<div class="icon-box-text">
												Pinterest
											</div>
										</a>
									</div>
								</li>

							</ul>
						</div>

					</div>

				</div>
				<!-- /col-md-4 -->
			</div>
		</div>
	</section>
	<!-- ======================= End Detail ===================== -->

	<!-- ================= footer start ========================= -->
	<footer class="footer">
		<div class="container">

			<!-- Row Start -->
			<div class="row">

				<div class="col-md-8 col-sm-8">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<img src="assetscontent/img/logo-wm.png" style="width : 60%">
							<p>
								<br> WisataMalang merupakan sebuah website yang menyediakan berbagai informasi dan
								review mengenai berbagai
								tempat wisata menarik yang terdapat di Malang.
							</p>
						</div>
						<div class="col-md-4 col-sm-4">
							<h4 style="color: black;"><b>Featured Destination</b></h4>
							<ul>
								<li><a href="content.php">Mount Bromo</a></li>
								<li><a href="content.php">Coban Rondo</a></li>
								<li><a href="content.php">Lembah Indah</a></li>
								<li><a href="content.php">Balekambang Beach</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-sm-4">
							<h4 style="color: black;"><b>Follow Our Social Media</b></h4>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" style="height: 25px;"></i> Wisata Malang </a>
								</li>
								<li><a href="#"><i class="fa fa-twitter" style="height: 25px;"></i> @wisatamalang</a>
								</li>
								<li><a href="#"><i class="fa fa-instagram" style="height: 25px;"></i> @wisatamalang</a>
								</li>
								<li><a href="#"><i class="fa fa-pinterest" style="height: 25px;"></i> @wisatamalang</a>
								</li>

							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<h4 style="color: black; text-transform: none;"><b>CONTACT US!</b></h4>
					<!-- Newsletter -->
					<p><i class="fas fa-map-marker-alt"></i>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, <br> Kota Malang,
						Jawa
						Timur 65145</p>
					<p><i class="fa fa-phone"></i> Phone: (0341) 551611</p>
					<p><i class="fa fa-whatsapp"></i> Whatsapp: +6281312345678</p>
					<p><i class="fa fa-envelope"></i> Email: <a href="mailto:hello@domain.com" style="color:black;">wisatamalang@tourism.com</a></p>

				</div>

			</div>

			<!-- Row Start -->
			<div class="row">
				<div class="col-md-12">
					<div class="copyright text-center">
						<p>Copyright &copy; 2022 WisataMalang, Ltd. All Rights Reserved.</p>
					</div>
				</div>
			</div>

		</div>
	</footer>

	<!-- Sign Up Window Code -->
	<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" id="myModalLabel1">
				<div class="modal-body">
					<div class="text-center"><img src="assetscontent/img/logo-wm.png" class="img-responsive" alt=""></div>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
						<li class="nav-item active">
							<a class="nav-link" data-toggle="tab" href="#employer" role="tab">
								<i class="ti-user"></i> Employer</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#candidate" role="tab">
								<i class="ti-user"></i> Candidate</a>
						</li>
					</ul>
					<!-- Nav tabs -->

					<!-- Tab panels -->
					<div class="tab-content">

						<!-- Employer Panel 1-->
						<div class="tab-pane fade in show active" id="employer" role="tabpanel">
							<form>

								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="User Name">
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="*********">
								</div>

								<div class="form-group">
									<span class="custom-checkbox">
										<input type="checkbox" id="4">
										<label for="4"></label>Remember me
									</span>
									<a href="#" title="Forget" class="fl-right">Forgot Password?</a>
								</div>
								<div class="form-group text-center">
									<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
								</div>

							</form>

							<div class="log-option"><span>OR</span></div>

							<div class="row mrg-bot-20">
								<div class="col-md-6">
									<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign
										In With Facebook</a>
								</div>
								<div class="col-md-6">
									<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
								</div>
							</div>

						</div>
						<!--/.Panel 1-->

						<!-- Candidate Panel 2-->
						<div class="tab-pane fade" id="candidate" role="tabpanel">
							<form>

								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="User Name">
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="*********">
								</div>

								<div class="form-group">
									<span class="custom-checkbox">
										<input type="checkbox" id="4">
										<label for="4"></label>Remember me
									</span>
									<a href="#" title="Forget" class="fl-right">Forgot Password?</a>
								</div>
								<div class="form-group text-center">
									<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
								</div>

							</form>

							<div class="log-option"><span>OR</span></div>

							<div class="row mrg-bot-20">
								<div class="col-md-6">
									<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign
										In With Facebook</a>
								</div>
								<div class="col-md-6">
									<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
								</div>
							</div>

						</div>
						<!--/.Panel 2-->

					</div>
					<!-- Tab panels -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Sign Up Window -->

	<!-- Switcher -->
	<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin theme-cl fa fa-cog" aria-hidden="true"></i></button>
	<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
		<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Close &times;</button>
		<ul id="styleOptions" title="switch styling">
			<li>
				<a href="javascript: void(0)" class="cl-box cl-default" data-theme="skins/default"></a>
			</li>
			<li>
				<a href="javascript: void(0)" class="cl-box cl-red" data-theme="skins/red"></a>
			</li>
			<li>
				<a href="javascript: void(0)" class="cl-box cl-green" data-theme="skins/green"></a>
			</li>
			<li>
				<a href="javascript: void(0)" class="cl-box cl-blue" data-theme="skins/blue"></a>
			</li>
			<li>
				<a href="javascript: void(0)" class="cl-box cl-pink" data-theme="skins/pink"></a>
			</li>
			<li>
				<a href="javascript: void(0)" class="cl-box cl-purple" data-theme="skins/purple"></a>
			</li>
		</ul>
	</div>
	<!-- /Switcher -->

	<!-- =================== START JAVASCRIPT ================== -->
	<script src="assetscontent/plugins/js/jquery.min.js"></script>
	<script src="assetscontent/plugins/js/bootstrap.min.js"></script>
	<script src="assetscontent/plugins/js/viewportchecker.js"></script>
	<script src="assetscontent/plugins/js/bootsnav.js"></script>
	<script src="assetscontent/plugins/js/slick.min.js"></script>
	<script src="assetscontent/plugins/js/jquery.nice-select.min.js"></script>
	<script src="assetscontent/plugins/js/jquery.fancybox.min.js"></script>
	<script src="assetscontent/plugins/js/jquery.downCount.js"></script>
	<script src="assetscontent/plugins/js/freshslider.1.0.0.js"></script>
	<script src="assetscontent/plugins/js/moment.min.js"></script>
	<script src="assetscontent/plugins/js/daterangepicker.js"></script>
	<script src="assetscontent/plugins/js/wysihtml5-0.3.0.js"></script>
	<script src="assetscontent/plugins/js/bootstrap-wysihtml5.js"></script>
	<script src="http://maps.google.com/maps/api/js?key="></script>
	<script src="assetscontent/plugins/js/markerclusterer.js"></script>
	<script src="assetscontent/js/map.js"></script>

	<!-- Dashboard Js -->
	<script src="assetscontent/plugins/js/jquery.slimscroll.min.js"></script>
	<script src="assetscontent/plugins/js/jquery.metisMenu.js"></script>
	<script src="assetscontent/plugins/js/jquery.easing.min.js"></script>

	<!-- Custom Js -->
	<script src="assetscontent/js/custom.js"></script>

	<script>
		$('#checkin').daterangepicker({
			"singleDatePicker": true,
			"timePicker": true,
			"startDate": "12/12/2018",
			"endDate": "12/14/2018"
		}, function(start, end, label) {
			console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
		});
	</script>

	<script>
		$('#checkout').daterangepicker({
			"singleDatePicker": true,
			"timePicker": true,
			"startDate": "12/18/2018",
			"endDate": "12/18/2018"
		}, function(start, end, label) {
			console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
		});
	</script>

	<script src="assetscontent/js/jQuery.style.switcher.js"></script>
	<script>
		function openRightMenu() {
			document.getElementById("rightMenu").style.display = "block";
		}

		function closeRightMenu() {
			document.getElementById("rightMenu").style.display = "none";
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#styleOptions').styleSwitcher();
		});
	</script>

</body>

</html>