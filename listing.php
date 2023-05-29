<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Destination List</title>
	<link rel="icon" href="assetslisting/img/thumb.png" type="image/png">

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="assetslisting/plugins/css/plugins.css">

	<!-- Custom style -->
	<link href="assetslisting/css/style.css" rel="stylesheet">
	<link href="assetslisting/css/responsiveness.css" rel="stylesheet">
	<link id="jssDefault" rel="stylesheet" href="assetslisting/css/skins/default.css">

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
					<img src="assetslisting/img/logo.png" class="logo logo-display" alt="wisatamalang" style="width : 80%">
					<img src="assetslisting/img/logo.png" class="logo logo-scrolled" alt="wisatamalang" style="width : 80%">
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

	<!-- ======================= Start Page Title ===================== -->
	<div class="page-title image-title" style="background-image:url(assetslisting/img/views.jpg);">
		<div class="container">
			<div class="page-title-wrap">
				<h2>Nature Tourism</h2>
				<p><a href="index.php" class="theme-cl">Home</a> | <span>Wisata Alam di Malang</span></p>
			</div>
		</div>
	</div>
	<!-- ======================= End Page Title ===================== -->

	<!-- =========== Start All Hotel In Grid View =================== -->
	<section class="gray-bg">
		<div class="container">
			<div class="row">

				<!-- Filter Sidebar -->
				<div class="col-md-4 col-sm-12">

					<div class="tr-single-box">
						<div class="tr-single-header">
							<h4>Filter</h4>
							<span class="pull-right clickables" data-toggle="collapse" data-target="#filter"><i class="ti-align-left"></i></span>
						</div>
						<div id="filter" class="collapse in">

							<!-- Input Box Search -->
							<div class="tr-single-body">
								<div class="sidebar-input">
									<input type="text" class="form-control" placeholder="Type Keyword..">
								</div>
								<div class="sidebar-input">
									<input type="text" class="form-control" placeholder="Destination..">
								</div>
								<div class="sidebar-input">
									<input type="text" class="form-control" placeholder="Location..">
								</div>
							</div>

							<!-- Range Slider -->
							<div class="tr-inner-single-box">
								<div class="tr-single-header">
									<h4>Price In Rupiah (.000)</h4>
								</div>
								<div class="tr-single-body">
									<form method="post">
										<div id="price-range"></div>
									</form>
								</div>
							</div>

							<!-- Range Slider -->
							<div class="tr-inner-single-box">
								<div class="tr-single-header">
									<h4>Distance In Km</h4>
								</div>
								<div class="tr-single-body">
									<form method="post">
										<div id="price-range2"></div>
									</form>
								</div>
							</div>


							<!-- Distance -->
							<div class="tr-inner-single-box">
								<div class="tr-single-header">
									<h4>By Distance</h4>

								</div>
								<div class="tr-single-body">
									<ul class="side-list-check">
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="144">
												<label for="144"></label>
											</span>
											Between 10Km To 100Km
											<span class="pull-right">102</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="133">
												<label for="133"></label>
											</span>
											Between 100Km To 500Km
											<span class="pull-right">110</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="122">
												<label for="122"></label>
											</span>
											Between 150Km To 700Km
											<span class="pull-right">56</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="111">
												<label for="111"></label>
											</span>
											Between 700Km To 1000Km
											<span class="pull-right">18</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="161">
												<label for="161"></label>
											</span>
											Between 10000Km To 50000Km
											<span class="pull-right">75</span>
										</li>
									</ul>
								</div>
							</div>

							<!-- Start Rating -->
							<div class="tr-inner-single-box">
								<div class="tr-single-header">
									<h4>Rating</h4>

								</div>
								<div class="tr-single-body">
									<ul class="side-list-check">
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="11">
												<label for="11"></label>
											</span>
											<div class="search-rating">
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<span class="pull-right">102</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="12">
												<label for="12"></label>
											</span>
											<div class="search-rating">
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<span class="pull-right">110</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="13">
												<label for="13"></label>
											</span>
											<div class="search-rating">
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<span class="pull-right">56</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="14">
												<label for="14"></label>
											</span>
											<div class="search-rating">
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star"></i>
											</div>
											<span class="pull-right">18</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="15">
												<label for="15"></label>
											</span>
											<div class="search-rating">
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
												<i class="fa fa-star enable"></i>
											</div>
											<span class="pull-right">75</span>
										</li>
									</ul>
								</div>
							</div>

							<!-- Tour Type -->
							<div class="tr-inner-single-box">
								<div class="tr-single-header">
									<h4>Tour Type</h4>

								</div>
								<div class="tr-single-body">
									<ul class="side-list-check">
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="a">
												<label for="a"></label>
											</span>
											Nature
											<span class="pull-right">36</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="b">
												<label for="b"></label>
											</span>
											Zoo
											<span class="pull-right">75</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="c">
												<label for="c"></label>
											</span>
											Museums
											<span class="pull-right">69</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="d">
												<label for="d"></label>
											</span>
											Playground
											<span class="pull-right">20</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="e">
												<label for="e"></label>
											</span>
											Garden
											<span class="pull-right">45</span>
										</li>
								</div>
							</div>

							<!-- Animinities -->
							<div class="tr-inner-single-box">
								<div class="tr-single-header">
									<h4>Facilities</h4>

								</div>
								<div class="tr-single-body">
									<ul class="side-list-check">
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="a1">
												<label for="a1"></label>
											</span>
											With Guide
											<span class="pull-right">54</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="b2">
												<label for="b2"></label>
											</span>
											With Transportation
											<span class="pull-right">75</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="c3">
												<label for="c3"></label>
											</span>
											With Meals
											<span class="pull-right">36</span>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

				</div>

				<!-- All Item -->
				<div class="col-md-8 col-sm-12">

					<!-- Row -->
					<div class="row mrg-0">
						<div class="tr-single-box short-box">
							<div class="col-sm-3 hidden-xs align-self-center">
								<h4>Sorting</h4>
							</div>

							<div class="col-sm-9 text-right">

								<div class="btn-group mr-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Sort By
									</button>
									<div class="dropdown-menu pull-right animated flipInX">
										<a href="#">Ascending</a>
										<a href="#">Descending</a>
										<a href="#">By Price</a>
									</div>
								</div>


							</div>
						</div>
					</div>
					<!-- /Row -->

					<!-- Row -->
					<div class="row">

						<!-- DATA 1 -->
						<div class="col-md-12 col-sm-12">
							<article class="hotel-box list-style">
								<div class="row">

									<div class="col-md-5 col-sm-5">
										<div class="hotel-box-image">
											<a href="content.php">
												<img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/07/16/tiket-masuk-wisata-gunung-bromo-20220716075301.jpg" class="img-responsive hotel-box-img" alt="">
											</a>
											<div class="entry-bookmark">
												<a href="#"><i class="ti-bookmark"></i></a>
											</div>
											<h4 class="hotel-place">
												<a href="#">Mount Bromo</a>
											</h4>
											<span class="featured-tour"><i class="fa fa-star"></i></span>
										</div>
									</div>

									<div class="col-md-7 col-sm-7">
										<div class="inner-box">
											<div class="box-inner-ellipsis">
												<div style="margin: 0px; padding: 0px; border: 0px;">
													<h3 class="entry-title">
														<a href="content.php">Gunung Bromo</a>
													</h3>
													<div class="entry-content">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
															sed nisl in lectus euismod convallis.</p>
														<span class="price"> <strong class="theme-cl">Rp350.000,-</strong>
															/ Person</span>
													</div>
												</div>
											</div>

											<div class="entry-meta">
												<div class="meta-item meta-author">
													<div class="hotel-review entry-location">
														<span class="review-status bg-info"><i class="ti-check"></i></span>
														<h6><span class="cl-info font-bold">superb</span>13.625 Review
														</h6>
													</div>
												</div>
												<div class="meta-item meta-comment fl-right">
													<div class="view-box">
														<div class="fl-right">
															<span><i class="ti-eye padd-r-5"></i>5782</span>
														</div>
													</div>
												</div>
												<div class="meta-item meta-rating fl-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</div>
											</div>
										</div>
									</div>

								</div>

							</article>
						</div>

						<!-- DATA 2 -->
						<div class="col-md-12 col-sm-12">
							<article class="hotel-box list-style">
								<div class="row">

									<div class="col-md-5 col-sm-5">
										<div class="hotel-box-image">
											<a href="content.php">
												<img src="https://media-cdn.tripadvisor.com/media/photo-s/16/57/f2/eb/berlokasi-di-timurnya.jpg" class="img-responsive hotel-box-img" alt="">
											</a>
											<div class="entry-bookmark">
												<a href="#"><i class="ti-bookmark"></i></a>
											</div>
											<h4 class="hotel-place">
												<a href="#">Sumber Maron</a>
											</h4>
										</div>
									</div>

									<div class="col-md-7 col-sm-7">
										<div class="inner-box">
											<div class="box-inner-ellipsis">
												<div style="margin: 0px; padding: 0px; border: 0px;">
													<h3 class="entry-title">
														<a href="content.php">Sumber Maron</a>
													</h3>
													<div class="entry-content">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
															sed nisl in lectus euismod convallis.</p>
														<span class="price"> <strong class="theme-cl">Rp15.000,-</strong>
															/ Person</span>
													</div>
												</div>
											</div>

											<div class="entry-meta">
												<div class="meta-item meta-author">
													<div class="hotel-review entry-location">
														<span class="review-status bg-success"><i class="ti-check"></i></span>
														<h6><span class="cl-success font-bold">Good</span>5062 Review
														</h6>
													</div>
												</div>
												<div class="meta-item meta-comment fl-right">
													<div class="view-box">
														<div class="fl-right">
															<span><i class="ti-eye padd-r-5"></i>1782</span>
														</div>
													</div>
												</div>
												<div class="meta-item meta-rating fl-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</div>
											</div>
										</div>
									</div>

								</div>

							</article>
						</div>

						<!-- DATA 3 -->
						<div class="col-md-12 col-sm-12">
							<article class="hotel-box list-style">
								<div class="row">

									<div class="col-md-5 col-sm-5">
										<div class="hotel-box-image">
											<a href="content.php">
												<img src="https://asset.kompas.com/crops/I7oFQpIqNNTHErjAoGMfvNL3asg=/0x0:1149x766/750x500/data/photo/2021/08/25/6126168e3be6b.jpg" class="img-responsive hotel-box-img" alt="">
											</a>
											<div class="entry-bookmark">
												<a href="#"><i class="ti-bookmark"></i></a>
											</div>
											<h4 class="hotel-place">
												<a href="#">Coban Rondo Waterfall</a>
											</h4>
											<span class="featured-tour"><i class="fa fa-star"></i></span>
										</div>
									</div>

									<div class="col-md-7 col-sm-7">
										<div class="inner-box">
											<div class="box-inner-ellipsis">
												<div style="margin: 0px; padding: 0px; border: 0px;">
													<h3 class="entry-title">
														<a href="content.php">Coban Rondo</a>
													</h3>
													<div class="entry-content">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
															sed nisl in lectus euismod convallis.</p>
														<span class="price"> <strong class="theme-cl">Rp30.000,-</strong>
															/ Person</span>
													</div>
												</div>
											</div>

											<div class="entry-meta">
												<div class="meta-item meta-author">
													<div class="hotel-review entry-location">
														<span class="review-status bg-info"><i class="ti-check"></i></span>
														<h6><span class="cl-info font-bold">superb</span>10062 Review
														</h6>
													</div>
												</div>
												<div class="meta-item meta-comment fl-right">
													<div class="view-box">
														<div class="fl-right">
															<span><i class="ti-eye padd-r-5"></i>7254</span>
														</div>
													</div>
												</div>
												<div class="meta-item meta-rating fl-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</div>
											</div>
										</div>
									</div>

								</div>

							</article>
						</div>

						<!-- DATA 5 -->
						<div class="col-md-12 col-sm-12">
							<article class="hotel-box list-style">
								<div class="row">

									<div class="col-md-5 col-sm-5">
										<div class="hotel-box-image">
											<a href="content.php">
												<img src="https://sikidang.com/wp-content/uploads/Lembah-Indah-Malang.jpg" class="img-responsive hotel-box-img" alt="">
											</a>
											<div class="entry-bookmark">
												<a href="#"><i class="ti-bookmark"></i></a>
											</div>
											<h4 class="hotel-place">
												<a href="#">Beautiful Valley</a>
											</h4>
											<span class="featured-tour"><i class="fa fa-star"></i></span>
										</div>
									</div>

									<div class="col-md-7 col-sm-7">
										<div class="inner-box">
											<div class="box-inner-ellipsis">
												<div style="margin: 0px; padding: 0px; border: 0px;">
													<h3 class="entry-title">
														<a href="content.php">Lembah Indah</a>
													</h3>
													<div class="entry-content">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
															sed nisl in lectus euismod convallis.</p>
														<span class="price"> <strong class="theme-cl">Rp200.000,-</strong>
															/ Person</span>
													</div>
												</div>
											</div>

											<div class="entry-meta">
												<div class="meta-item meta-author">
													<div class="hotel-review entry-location">
														<span class="review-status bg-warning"><i class="ti-check"></i></span>
														<h6><span class="cl-warning font-bold">fair</span>1050 Review
														</h6>
													</div>
												</div>
												<div class="meta-item meta-comment fl-right">
													<div class="view-box">
														<div class="fl-right">
															<span><i class="ti-eye padd-r-5"></i>2412</span>
														</div>
													</div>
												</div>
												<div class="meta-item meta-rating fl-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</div>
											</div>
										</div>
									</div>

								</div>

							</article>
						</div>

						<!-- DATA 5 -->
						<div class="col-md-12 col-sm-12">
							<article class="hotel-box list-style">
								<div class="row">

									<div class="col-md-5 col-sm-5">
										<div class="hotel-box-image">
											<a href="content.php">
												<img src="https://img.okezone.com/content/2021/01/30/408/2353645/camping-seru-di-bukit-nirwana-dengan-pesona-10-gunung-di-sekelilingnya-c2V9qrglsZ.jpg" class="img-responsive hotel-box-img" alt="">
											</a>
											<div class="entry-bookmark">
												<a href="#"><i class="ti-bookmark"></i></a>
											</div>
											<h4 class="hotel-place">
												<a href="#">Nirwana Hill</a>
											</h4>
										</div>
									</div>

									<div class="col-md-7 col-sm-7">
										<div class="inner-box">
											<div class="box-inner-ellipsis">
												<div style="margin: 0px; padding: 0px; border: 0px;">
													<h3 class="entry-title">
														<a href="content.php">Bukit Nirwana</a>
													</h3>
													<div class="entry-content">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
															sed nisl in lectus euismod convallis.</p>
														<span class="price"> <strong class="theme-cl">Rp10.000,-</strong>
															/ Person</span>
													</div>
												</div>
											</div>

											<div class="entry-meta">
												<div class="meta-item meta-author">
													<div class="hotel-review entry-location">
														<span class="review-status bg-success"><i class="ti-check"></i></span>
														<h6><span class="cl-success font-bold">Good</span>6439 Review
														</h6>
													</div>
												</div>
												<div class="meta-item meta-comment fl-right">
													<div class="view-box">
														<div class="fl-right">
															<span><i class="ti-eye padd-r-5"></i>2541</span>
														</div>
													</div>
												</div>
												<div class="meta-item meta-rating fl-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</div>
											</div>
										</div>
									</div>

								</div>

							</article>
						</div>

						<!-- DATA 6 -->
						<div class="col-md-12 col-sm-12">
							<article class="hotel-box list-style">
								<div class="row">

									<div class="col-md-5 col-sm-5">
										<div class="hotel-box-image">
											<a href="content.php">
												<img src="https://asset.kompas.com/crops/HGlbthzzHaizmQYD3Eyfm5GTF-8=/0x0:739x493/750x500/data/photo/2020/07/26/5f1d21fd082c6.jpg" class="img-responsive hotel-box-img" alt="">
											</a>
											<div class="entry-bookmark">
												<a href="#"><i class="ti-bookmark"></i></a>
											</div>
											<h4 class="hotel-place">
												<a href="#">Balekambang Beach</a>
											</h4>
											<span class="featured-tour"><i class="fa fa-star"></i></span>
										</div>
									</div>

									<div class="col-md-7 col-sm-7">
										<div class="inner-box">
											<div class="box-inner-ellipsis">
												<div style="margin: 0px; padding: 0px; border: 0px;">
													<h3 class="entry-title">
														<a href="content.php">Pantai Balekambang</a>
													</h3>
													<div class="entry-content">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
															sed nisl in lectus euismod convallis.</p>
														<span class="price"> <strong class="theme-cl">Rp25.000,-</strong>
															/ Person</span>
													</div>
												</div>
											</div>

											<div class="entry-meta">
												<div class="meta-item meta-author">
													<div class="hotel-review entry-location">
														<span class="review-status bg-info"><i class="ti-check"></i></span>
														<h6><span class="cl-info font-bold">superb</span>9541 Review
														</h6>
													</div>
												</div>
												<div class="meta-item meta-comment fl-right">
													<div class="view-box">
														<div class="fl-right">
															<span><i class="ti-eye padd-r-5"></i>1215</span>
														</div>
													</div>
												</div>
												<div class="meta-item meta-rating fl-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</div>
											</div>
										</div>
									</div>

								</div>

							</article>
						</div>

					</div>
					<!-- /Row -->

					<div class="row">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span class="ti-arrow-left"></span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item active"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span class="ti-arrow-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- =========== End All Hotel In Grid View =================== -->

	<!-- ================= footer start ========================= -->
	<footer class="footer">
		<div class="container">

			<!-- Row Start -->
			<div class="row">

				<div class="col-md-8 col-sm-8">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<img src="assetslisting/img/logo.png" style="width : 60%">
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
					<div class="text-center"><img src="assetslisting/img/logo.png" class="img-responsive" alt=""></div>

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
										<input type="checkbox" id="54">
										<label for="54"></label>Remember me
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
										<input type="checkbox" id="44">
										<label for="44"></label>Remember me
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


	<!-- =================== START JAVASCRIPT ================== -->
	<script src="assetslisting/plugins/js/jquery.min.js"></script>
	<script src="assetslisting/plugins/js/bootstrap.min.js"></script>
	<script src="assetslisting/plugins/js/viewportchecker.js"></script>
	<script src="assetslisting/plugins/js/bootsnav.js"></script>
	<script src="assetslisting/plugins/js/slick.min.js"></script>
	<script src="assetslisting/plugins/js/jquery.nice-select.min.js"></script>
	<script src="assetslisting/plugins/js/jquery.fancybox.min.js"></script>
	<script src="assetslisting/plugins/js/jquery.downCount.js"></script>
	<script src="assetslisting/plugins/js/freshslider.1.0.0.js"></script>
	<script src="assetslisting/plugins/js/moment.min.js"></script>
	<script src="assetslisting/plugins/js/daterangepicker.js"></script>
	<script src="assetslisting/plugins/js/wysihtml5-0.3.0.js"></script>
	<script src="assetslisting/plugins/js/bootstrap-wysihtml5.js"></script>

	<!-- Dashboard Js -->
	<script src="assetslisting/plugins/js/jquery.slimscroll.min.js"></script>
	<script src="assetslisting/plugins/js/jquery.metisMenu.js"></script>
	<script src="assetslisting/plugins/js/jquery.easing.min.js"></script>

	<!-- Custom Js -->
	<script src="assetslisting/js/custom.js"></script>

	<script src="assetslisting/js/jQuery.style.switcher.js"></script>
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