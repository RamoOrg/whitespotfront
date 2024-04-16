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
						<h1 class="mb-0 bread">Services</h1>
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
		
		<br>
		<br>
		<center> <h2>हमारी सेवाएं </h2></center>
		<br><br>
		<style>
			.main {
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
				gap: 10px;
				justify-items: center;
			}
		
			.card {
				background-color: #fff;
				border-radius: 10px;
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
				overflow: hidden;
				transition: transform 0.3s; /* Add transition for smooth animation */
			}
		
			.card:hover {
				transform: translateY(-5px); /* Move the card up slightly on hover */
				box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Change shadow on hover */
			}
		
			.card img {
				width: 100%;
				height: auto;
				border-bottom: 1px solid #ddd;
				transition: transform 0.3s; /* Add transition for smooth animation */
			}
		
			.card:hover img {
				transform: scale(1.1); /* Scale up the image on hover */
			}
		
			.card-content {
				padding: 8px;
			}
		
			.card-content h3 {
				margin-top: 0;
			}
		
			.card-content p {
				margin-bottom: 8px;
			}
		
			.button {
				display: inline-block;
				background-color: #007bff;
				color: #fff;
				padding: 10px 20px;
				border-radius: 5px;
				text-decoration: none;
			}
		
			@media screen and (max-width: 768px) {
				.main {
					grid-template-columns: 1fr;
				}
			}
		</style>
		</head>
		<body>
		<br>
		<div class="main">
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/1work.jpg" alt="Image">
				<div class="card-content">
					<h4>पैर में सफ़ेद दाग </h4>
					<p>नींबू का रस, आलू बुखारे का रस, मुलेठी का चूर्ण, और आंवला का सेवन।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/2work.jpg" alt="Image">
				<div class="card-content">
					<h4>हाथ में सफ़ेद दाग </h4>
					<p>हाथ में सफेद दाग के लिए आयुर्वेदिक उपाय: आलोवेरा जेल, नींबू का रस, और बेसन का प्रयोग करें।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/3work.jpg" alt="Image">
				<div class="card-content">
					<h4>मुंह में सफेद दाग </h4>
					<p>मुंह में सफेद दाग के लिए उपाय: निम्बू पानी, तुलसी पत्ती, और नमक का गरारा करें।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/4work.jpg" alt="Image">
				<div class="card-content">
					<h4>कन्धा में सफ़ेद दाग </h4>
					<p>कंधे में सफेद दाग के लिए नीचे दिए गए उपाय को आजमाएं: नारियल तेल, हल्दी, और मुलेठी का लेप।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/5work.jpg" alt="Image">
				<div class="card-content">
					<h4>माथे पर सफ़ेद दाग </h4>
					<p>माथे पर सफेद दाग के लिए नारियल तेल, बादाम, और शहद का उपयोग करें।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/6work.jpg" alt="Image">
				<div class="card-content">
					<h4>गाल में सफ़ेद दाग </h4>
					<p>गाल में सफेद दाग के लिए उपाय: नींबू रस, बेसन, और हल्दी का लेप लगाएं।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/7work.jpg" alt="Image">
				<div class="card-content">
					<h4>चेहरा में सफ़ेद दाग </h4>
					<p>चेहरे के सफेद दाग के लिए नीचे दिए गए उपाय को आजमाएं: नींबू रस, बेसन, और हल्दी का लेप लगाएं।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
			<div class="card">
				<img src="<?php echo $upload_url;?>./images/8work.jpg" alt="Image">
				<div class="card-content">
					<h4>गर्दन में सफ़ेद दाग </h4>
					<p>गर्दन में सफेद दाग के लिए नीचे दिए गए उपाय को आजमाएं: नारियल तेल, बेसन, और हल्दी का लेप लगाएं।</p>
					<!-- <a href="#" class="button">Read More</a> -->
				</div>
			</div>
		
			 <!-- Repeat for other cards -->
		</div>
			<br><br>

    <section class="ftco-section ftco-intro" style="background-image: url('<?php echo $upload_url;?>images/background.jpg');" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 text-center">
    				<h2>श्री आयुर्वेद अपनाएं और सफेद दाग से छुटकारा पाएं |</h2>
    				<a href="" class="icon-video d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></a>
    			</div>
    		</div>
    	</div>
    </section>
<br>
<?php
include('../frontend/layout/footer.php');
?>