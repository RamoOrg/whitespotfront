<?php
include('../config/configDB.php');
include('../config/configURL.php');
include('../frontend/layout/header.php');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $upload_url;?>images/pexels-maria-orlova-4906286.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-end">
					<div class="col-md-9 ftco-animate pb-5">
						<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
						<h1 class="mb-0 bread">Pricing</h1>
					</div>
				</div>
			</div>
			<style>
				.hero-wrap.hero-wrap-2 {
					position: relative;
					background-size: cover;
					background-position: center;
					background-repeat: no-repeat;
				}
			</style>
		</section>
		
	

<body>
		<style>
			.main {
					display: grid;
					grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
					gap: 30px;
					justify-items: center;
					align-items: center;
					padding: 20px;
					justify-content: center;
					
			}
	
			.card {
					height: 300px;
					width: 250px; /* Changed width to 250px for better alignment */
					background-color: #fff;
					border-radius: 10px;
					box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
					overflow: hidden;
					transition: transform 0.3s; /* Add transition for smooth animation */
					margin-bottom: 20px; /* Added margin to create space between rows */
			}
	
			.card:hover {
					transform: translateY(-5px); /* Move the card up slightly on hover */
					box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Change shadow on hover */
			}
	
			.card img {
					width: 100%;
					height: 100%; /* Changed height to 100% for proper scaling */
					object-fit: cover; /* Ensures the image covers the entire card */
					border-bottom: 1px solid #ddd;
					transition: transform 0.3s; /* Add transition for smooth animation */
			}
	
			.card:hover img {
					transform: scale(1.1); /* Scale up the image on hover */
			}
	
			@media screen and (max-width: 768px) {
					.main {
							grid-template-columns: 1fr;
					}
			}
	</style> 
</head>

<body>


	<center>
			<h2>हमारी औषधिया |</h2>
	</center>
	<div class="main">
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi1.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi2.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi3.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi4.jpg" alt="Image">
			</div>

			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi5.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi6.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi7.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi8.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi9.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/aushadhi10.jpg" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/k.png" alt="Image">
			</div>
			<div class="card">
					<img src="<?php echo $upload_url;?>./images/k1.jpeg" alt="Image">
			</div>
	</div>
		
	<?php
include('../frontend/layout/footer.php');
?>