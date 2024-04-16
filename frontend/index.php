<?php
include('../config/configDB.php');
include('../config/configURL.php');
include('../frontend/layout/header.php');
?>
	

	<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $address = $_POST['address'];
    $message = $_POST['message'];
     
    $sql = "INSERT INTO contact_form(id,name,contact_no,address,message)  VALUES ('', '$name', '$contact_no','$address','$message')";

    if ($conn->query($sql) === TRUE) {
        header('location:contact.php');
    } else {
        
    }
    $conn->close();
}
?>

<style>
	.hero-wrap {
		position: relative;
		background-size: cover; /* Expand background to cover entire container */
		background-position: center; /* Center the background image */
		width: 100vw; /* Full width of viewport */
		height: 100vh; /* Full height of viewport */
	} 
	
	@media (max-width: 1366px) {
		.hero-wrap {
			height: 80vh; /* Adjust height for larger screens */
		}
	}
	
	@media (max-width: 1260px) {
		.hero-wrap {
			height: 75vh; /* Adjust height for larger screens */
		}
	}
	
	@media (max-width: 1080px) {
		.hero-wrap {
			height: 40vh; /* Adjust height for smaller screens */
		}
	}
	
	@media (max-width: 768px) {
		.hero-wrap {
			height: 50vh; /* Adjust height for even smaller screens */
		}
	}
	
	@media (max-width: 576px) {
		.hero-wrap {
			height: 30vh; /* Adjust height for very small screens */
		}
	}
	
	  </style>
	</head>
	<body>
	  <div class="hero-wrap" style="background-image: url('<?php echo $upload_url;?>images/hero\ image\ ayurved\ apnay\ \(2\).jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container text-center">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-6 ftco-animate">
				</div>
			</div>
		</div>
	  </div>
	
	
	
	
	
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row d-flex no-gutters">
					<div class="col-md-6 d-flex">
						<div class="img d-flex align-items-center justify-content-center py-5 py-md-0" style="background-image:url(<?php echo $upload_url;?>images/doctor.jpg);">
							<div class="time-open-wrap">
								<div class="desc p-4">
									<h2>मिलने का समय :-</h2>
							  <div class="opening-hours">
								  <h4>Opening Days:</h4>
								  <p class="pl-3">
													<span><strong>सोमवार से शुक्रवार:- </strong>सुबह 09 बजे से शाम 7 बजे तक |</span>
									  <span><strong>शनिवार:-</strong>दोपहर 04 बजे से शाम 07 बजे तक |</span>
								  </p>
												<h4>छुट्टी:-</h4>
								  <p class="pl-3">
									  <span>सभी रविवार के दिन |</span>
									  <span>सभी आधिकारिक छुट्टियाँ |</span>
								  </p>
							  </div>
								</div>
									<div class="desc p-4 bg-secondary">
										<h3 class="heading">आपातकालीन मामलों के लिए</h3>
										<span class="phone">+91 9523679966</span>
									</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 pl-md-5 pt-md-5">
						<div class="row justify-content-start py-5">
					  <div class="col-md-12 heading-section ftco-animate">
						  <span class="subheading">Welcome to आयुर्वेद अपनायें |</span>
						<h2 class="mb-4">श्री आयुर्वेद अपनाएं और सफेद दाग से छुटकारा पाएं |</h2>
						<p>सुरक्षित दाग या गुप्त रोग लिंग संबंधी समस्याओं का एक व्यापक समूह है। इनमें वायरल, बैक्टीरियल, या पारजीविक संक्रमण शामिल हो सकते हैं। ये आमतौर पर यौन संचरण द्वारा फैलते हैं और उपचार के बिना गंभीर समस्याएं उत्पन्न कर सकते हैं। उचित जागरूकता और इलाज में मदद कर सकती है।</p>
					  </div>
					</div>
							<div class="row ftco-counter py-5" id="section-counter">
					  <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
						  <div class="text">
							<strong class="number" data-number="10">0</strong>
						  </div>
						  <div class="text">
							  <span>Years of <br>Experienced</span>
						  </div>
						</div>
					  </div>
					  <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
						  <div class="text">
							<strong class="number" data-number="244">0</strong>
						  </div>
						  <div class="text">
							  <span>Happy <br>Customers</span>
						  </div>
						</div>
					  </div>
					  <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
						  <div class="text">
							<strong class="number" data-number="10">0</strong>
						  </div>
						  <div class="text">
							  <span>Pending <br>Customer</span>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			</div>
			</div>
		</section> <br><br>
	
	<!-- How we works -->
	
	   <center> <h2>How We Works</h2></center>
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
		  <h>माथे पर सफ़ेद दाग </h>
		  <p>माथे पर सफेद दाग के लिए नारियल तेल, बादाम, और शहद का उपयोग करें।</p>
		  <!-- <a href="#" class="button">Read More</a> -->
		</div>
	  </div>
	  <div class="card">
		<img src="<?php echo $upload_url;?>./images/6work.jpg" alt="Image">
		<div class="card-content">
		  <h4>गाल में सफ़ेद दाग </h4>
		  <p>"सफेद चक्कर: यौन संक्रमण से होने वाली समस्या।"</p>
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
		<section class="ftco-section testimony-section ftco-bg-dark">
		  <div class="container">
			<div class="row justify-content-center pb-5 mb-3">
			  <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
				  <!-- <span class="subheading">Testimonies</span> -->
				<h2>प्रशन्न ग्राहक</h2>
			  </div>
			</div>
			<div class="row ftco-animate">
			  <div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
					  <div class="text">
						  <div class="d-flex align-items-center mb-4">
							<div class="user-img" style="background-image: url(<?php echo $upload_url;?>images/icon1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Mr.Atul</p>
								<span class="position">सफ़ेद से पीड़ित दाग </span>
							  </div>
						  </div>
						<p class="mb-1">सफेद दाग के इलाज के लिए कच्चे दूध में हल्दी मिलाकर लगाएं। ध्यान रखें, परिणामों के लिए नियमित उपयोग करें।</p>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
					  <div class="text">
						  <div class="d-flex align-items-center mb-4">
							<div class="user-img" style="background-image: url(<?php echo $upload_url;?>images/icon1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Mr.Jitendra</p>
								<span class="position">सफ़ेद से पीड़ित दाग </span>
							  </div>
						  </div>
						<p class="mb-1">सफेद दाग के इलाज के लिए कच्चे दूध में हल्दी मिलाकर लगाएं। ध्यान रखें, परिणामों के लिए नियमित उपयोग करें।</p>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
					  <div class="text">
						  <div class="d-flex align-items-center mb-4">
							<div class="user-img" style="background-image: url(<?php echo $upload_url;?>images/icon3.jpg)"></div>
							<div class="pl-3">
								<p class="name">Mr.Sanjay</p>
								<span class="position">सफ़ेद से पीड़ित दाग </span>
							  </div>
						  </div>
						<p class="mb-1">सफेद दाग के लिए निम्बू का रस, मलाई, और हल्दी का उपयोग करें। नियमित लागू करें, फर्क महसूस होगा।</p>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
					  <div class="text">
						  <div class="d-flex align-items-center mb-4">
							<div class="user-img" style="background-image: url(<?php echo $upload_url;?>images/icon3.jpg)"></div>
							<div class="pl-3">
								<p class="name">Mr.Sandeep</p>
								<span class="position">सफ़ेद से पीड़ित दाग </span>
							  </div>
						  </div>
						<p class="mb-1">सफेद दाग के लिए नारियल तेल में नींबू का रस मिलाकर लगाएं। इसे नियमित रूप से करें, परिणाम दिखेगा।</p>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
					  <div class="text">
						  <div class="d-flex align-items-center mb-4">
							<div class="user-img" style="background-image: url(<?php echo $upload_url;?>images/icon3.jpg)"></div>
							<div class="pl-3">
								<p class="name">mr.Aashutosh</p>
								<span class="position">सफ़ेद से पीड़ित दाग </span>
							  </div>
						  </div>
						<p class="mb-1">नारियल तेल में हल्दी और नींबू का रस मिलाकर दाग पर लगाएं। नियमित इस्तेमाल से त्वचा में सुधार देखा जा सकता है।</p>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>
			
			<section class="ftco-section ftco-no-pb">
				<div class="container">
					<div class="row justify-content-center pb-5 mb-3">
			  <div class="col-md-12 heading-section  text-center ftco-animate">
				  <!-- <span class="subheading">Our Project</span> -->
				<h2>"हमारी सेवा आपका विश्वास है, जो हमारे लिए सर्वोपरि है।"</h2>
			  </div>
			</div>
					<div class="row">
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/1pic.jpg);">
					<a href="images/1pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/2pic.jpg);">
					<a href="images/2pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/3pic.jpg);">
					<a href="images/3pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/4pic.jpg);">
					<a href="images/4pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
	
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/5pic.jpg);">
					<a href="images/5pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/6pic.jpg);">
					<a href="images/6pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/7pic.jpg);">
					<a href="images/7pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(<?php echo $upload_url;?>images/8pic.jpg);">
					<a href="images/8pic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
					  <div class="text w-100 mb-3 mt-4">
						  <h2><a href="work-single.html">श्री आयुर्वेद अपनाएं</a></h2>
					  </div>
				  </div>
				</div>
			  </div>
			</div>
				</div>
			</section>	
			<section class="ftco-section">
		  <div class="container">
			<div class="row justify-content-center pb-5 mb-3">
			  <div class="col-md-7 heading-section text-center ftco-animate">
				  <!-- <span class="subheading">News &amp; Blog</span> -->
				<h2>ताजा खबर</h2>
			  </div>
			</div>
			<div class="row d-flex">
			  <div class="col-md-6 col-lg-4 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
				  <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo $upload_url;?>images/gathiya1.jpg');">
				  </a>
				  <div class="text mt-3 px-4">
					  <div class="posted mb-3 d-flex">
						  <div class="img author" style="background-image: url(<?php echo $upload_url;?>images/imageicon.jpg);"></div>
						  <div class="desc pl-3">
							  <span>Sanjay</span>
							  <span>04 March 2021</span>
						  </div>
					  </div>
					<h3 class="heading"><a href="FAQ_for_gathiya.html">गठिया दूर करने के १० आयुर्वेदिक उपाय </a></h3>
					<p>हड्डियों के जोड़ों में यूरिक एसिड जमा होने या फिर कैल्शियम की कमी होने पर उनमें सूजन व अकड़न आ जाती है।</p>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-4 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
				  <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $upload_url;?>images/gathiya4.jpg');">
				  </a>
				  <div class="text mt-3 px-4">
					  <div class="posted mb-3 d-flex">
						  <div class="img author" style="background-image: url(<?php echo $upload_url;?>images/imageicon.jpg);"></div>
						  <div class="desc pl-3">
							  <span>Anil</span>
							  <span>24 March 2020</span>
						  </div>
					  </div>
					<h3 class="heading"><a href="FAQ DEMO.html">सफ़ेद दाग दूर करने के १० आयुर्वेदिक उपाय </a></h3>
					<p>सफेद दाग एक त्वचा समस्या है जो त्वचा पर सफेद रंग के दाग के रूप में प्रकट होती है। यह पिगमेंटेशन की समस्या हो सकती है जो धूप या उम्र के साथ बढ़ सकती है।</p>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-4 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
				  <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $upload_url;?>images/gathiya6.jpg');">
				  </a>
				  <div class="text mt-3 px-4">
					  <div class="posted mb-3 d-flex">
						  <div class="img author" style="background-image: url(<?php echo $upload_url;?>images/imageicon.jpg);"></div>
						  <div class="desc pl-3">
							  <span>Basant</span>
							  <span>04 April 2022</span>
						  </div>
					  </div>
					<h3 class="heading"><a href="FAQ_for_gupt.html">गुप्त रोग दूर करने के १० आयुर्वेदिक उपाय </a></h3>
					<p>गुप्त रोग वह समस्याएं हैं जो जनन अंग या उनके आसपास की क्षेत्र में होती हैं। इनमें सुघर्ष, संबंधों की समस्याएं, इन्फेक्शन आदि शामिल होते हैं।</p>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>
	
		<section class="ftco-section ftco-intro" style="background-image: url('<?php echo $upload_url;?>images/background.jpg');" data-stellar-background-ratio="0.1">
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
	
	
	
			<!-- FAQ section -->
	
			<style>
				.maindiv {
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
				grid-gap: 20px;
			}
			
			.content {
				order: 1; /* content card will appear first on mobile */
			}
			
			.image {
				order: 2; /* image will appear second on mobile */
			}
			
			
			
				/* .maindiv {
					display: flex;
					justify-content: center;
					align-items: flex-start;
				} */
				.faq-container {
					max-width: 600px;
					margin: 20px;
					padding: 20px;
					background-color: #fff;
					border-radius: 10px;
					box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
				}
				.faq-item {
					border-bottom: 1px solid #ccc;
					margin-bottom: 10px;
					transition: height 0.3s, width 0.3s;
				}
				.faq-question {
					cursor: pointer;
					font-weight: bold;
					padding: 15px;
					background-color: #f5f5f5;
					border-radius: 5px;
					display: flex;
					justify-content: space-between;
					align-items: center;
					transition: background-color 0.3s ease;
				}
				.faq-question:hover {
					background-color: #e0e0e0;
				}
				.faq-question i {
					font-size: 18px;
				}
				.faq-answer {
					overflow: hidden; /* Hide overflow */
					/* padding: 15px; */
					max-height: 0; /* Initially hide the answers */
					transition: max-height 0.3s ease; /* Smooth transition */
				}
				.faq-item.active .faq-answer {
					max-height: 200px; /* Set the max-height to a value greater than the content's height */
			
				}
				/* .maindiv{
					border: 2px solid red;
				} */
				.imagesection{
						 box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
					border-radius: 10px;
					width: 100%;
				}
				@media (min-width: 768px) {
				.maindiv {
					grid-template-columns: 1fr 1fr; /* Two columns layout */
					align-items: start; /* Align items to the top */
				}
			
				.content {
					order: unset; /* Reset order for larger screens */
				}
			
				.image {
					margin-top: 40px;
	
					order: unset; /* Reset order for larger screens */
				}
			}
				
			</style>
			</head>
			<body>
			<div class="main">
			<div class="main">
				<div class="maindiv">
					<div class="content">
						<div class="faq-container">
							<div class="faq-item">
								<div class="faq-question">
									सफेद दाग क्या होता है? 
									<i class="fas fa-plus"></i>
								</div>
								<div class="faq-answer">
									<p>आयुर्वेद के अनुसार वात, पित्त और कफ यानि त्रिदोषज के कारण ही सभी प्रकार के त्वचा के रोग होते हैं फिर भी दोषों के अपने निजी लक्षणों से उनकी सबलता तथा निर्बलता की समीक्षा (diagnosis) कर उसके अनुसार चिकित्सा की जाती है। जिस दोष के लक्षण को विशेष रूप से बढ़े हुए नजर आते हैं उसकी चिकित्सा पहले की जाती है। ये वात, कफ की प्रधानता होने पर होते हैं।</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-question">
									सफेद दाग के शुरूआती लक्षण
									<i class="fas fa-plus"></i>
								</div>
								<div class="faq-answer">
									<p>सफेद दाग की पहचान में सबसे शुरुआती लक्षण है, त्वचा का रंग फीका पड़ना और उस जगह पर बाल भी सफेद होना। शरीर पर अगर सफेद दाग हो जाये और उसके बाद कहीं चोट लगे और वो जगह भी सफेद हो जाये तब आपको समझ जाना चाहिए कि ये समस्या तेजी से शरीर में बढ़ रही है। ल्यूकोडर्मा का रोग कोई सरलता से ठीक होने वाला रोग नहीं है और न ही ये छूने से फैलता है। आयुर्वेदिक तरीके से उपाय करके इस समस्या को ठीक कर सकते हैं।</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-question">
									सफेद दाग के कारण 
									<i class="fas fa-plus"></i>
								</div>
								<div class="faq-answer">
									<p>एलोपेशिया एरियाटा (Alopecia Areata) यानी वह बीमारी, जिसमें छोटे-छोटे गोले के रूप में शरीर से बाल गायब होने लगते हैं। सफेद दाग मस्से या बर्थ मार्क (Halo Nevus) से। मस्सा या बर्थ मार्क बच्चे के बड़े होने के साथ-साथ आस-पास की स्किन का रंग बदलना शुरू कर देता है।
					
										-केमिकल ल्यूकोडर्मा (Chemical Leucoderma) यानी खराब क्वालिटी की चिपकाने वाली बिंदी या खराब प्लास्टिक की चप्पल या जूते इस्तेमाल करने से।
										
										-ज्यादा केमिकल एक्सपोजर यानी प्लास्टिक, रबर या केमिकल फैक्ट्री में काम करने वाले लोगों को खतरा ज्यादा होता है। कीमोथेरेपी से भी इसकी आशंका रहती है।
										
										–थाइरॉयड संबंधी बीमारी होने पर।
										
										-कई बार शरीर में जरूरी मात्रा में विटामिन्स व मिनिरल्स की कमी से भी सफेद दाग की समस्या हो जाती है। संतुलित डायट न लेने की वजह से शरीर की त्वचा के रंग से थोड़े हल्के रंग के दाग हो सकते हैं। ये दाग पूरी तरह सफेद नहीं दिखते।
										
										-कई बार किसी फंगल संक्रमण के परिणामस्वरूप भी त्वचा पर सफेद दाग की समस्या होती है।
										
										-त्वचा में सफेद दाग तब बनने लगते हैं जब रंग उत्पादन करने वाली कोशिका जो हमारे बाल, त्वचा, होंठ आदि को रंग प्रदान करती है वो काम करना बंद कर देती है या नष्ट हो जाती है। इस रोग में दाग की त्वचा का रंग हल्का पड़ जाता है या सफेद हो जाता है। इस बारे में अभी तक चिकित्सक भी नही जान पाये कि ये कोशिका काम करना क्यों बंद कर देती है। आमतौर इस इसको कुछ कारणों से जोड़ा जाता है जैसे-
										
										-एक ऐसा विकार होना जिससे शरीर की प्रतिरक्षा प्रणाली (Immune system) खुद रंग उत्पादन करने वाली कोशिकाओं को नष्ट कर देती है।
										
										-स्व प्रतिरक्षा रोग (Autoimmune disease) जैसे स्वप्रतिरक्षित थायरॉइड रोग या टाइप 1 डायबीटीज का प्रभाव।
										
										-त्वचा का अधिक धूप (सनबर्न), तनाव या औद्योगिक केमिकल आदि के संपर्क में आना।</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-question">
									सफेद दाग बचने के उपाय
									<i class="fas fa-plus"></i>
								</div>
								<div class="faq-answer">
									<p>आयुर्वेद के अनुसार, पित्त या इसके साथ बाकी वातों की गड़बड़ी से सफेद दाग की समस्या होती है। जो लोग बहुत ज्यादा तला-भुना, मसालेदार, बेवक्त खाने के अलावा विरुद्ध आहार (मसलन दूध के साथ नमक या मछली आदि) लेता है, उसमें यह समस्या होने की आशंका ज्यादा होती है। आयुर्वेद में पंचकर्म के जरिए शरीर को डिटॉक्सिफाई किया जाता है। इसके अलावा बाकुची बीज, खदिर (कत्था), दारुहरिद्रा, करंज, आरग्वध (अमलतास) आदि सिंगल हर्ब्स के जरिए भी खून को साफ किया जाता है। इसके अलावा कंपाउंड मेडिसिन भी दी जाती है जैसे कि गंधक रसायन, रस माणिक्य, मंजिष्ठादि काढ़ा, खदिरादि वटी आदि है। त्रिफला भी काफी असरदार है।.</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-question">
									सफेद दाग के घरेलू उपाय
									<i class="fas fa-plus"></i>
								</div>
								<div class="faq-answer">
									<p>-हल्दी और सरसों के तेल को मिलाकर बनाया गया मिश्रण दाग वाली जगह लगाने से दाग कम होने लगता है। इसके लिए आप एक चम्मच हल्दी पाउडर लें। अब इसे दो चम्मच सरसों के तेल में मिलाए। अब इस पेस्ट को सफेद चकतों वाली जगह पर लगाएं और 15 मिनट तक रखने के बाद उस जगह को गुनगुने पानी से धो लें। ऐसा दिन में तीन से चार बार करें। इससे आराम मिलेगा।.
										<br>
										नीम की ताजी कोपल का पेस्ट बनाकर उसे छलनी में डालकर उसका रस निकाल लें। एक बड़ी चम्मच नीम के रस में एक चम्मच शहद मिलाकर दिन में तीन बार सेवन करें। इस मिश्रण का सेवन आप उम्रभर भी कर सकते हैं। इसके अलावा दो चम्मच अखरोट पाउडर में थोड़ा-सा पानी मिलाकर इसका पेस्ट बना लें। इस पेस्ट को दाग वाली जगह पर 20 मिनट तक लगाकर रखें। ऐसा दिन में तीन से चार बार करें।
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="image">
						<img src="<?php echo $upload_url;?>./images/background.jpg" class="imagesection" alt="" srcset="" height="380px" width="500px">
					</div>
				</div>
			</div>
			</div>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					const faqQuestions = document.querySelectorAll('.faq-question');
			
					faqQuestions.forEach(function(question) {
						question.addEventListener('click', function() {
							const parentItem = this.parentElement;
							parentItem.classList.toggle('active');
						});
					});
				});
			</script>
	
	<br><br><br>
	<br>
	
<style>
	.overlay {
			position: fixed;
			top: 75px;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.7);
			transition: opacity 500ms;
			visibility: hidden;
			opacity: 0;
			display: flex;
			justify-content: center;
			align-items: center;
	}

	.overlay:target {
			visibility: visible;
			opacity: 1;
	}


	.close {
			position: absolute;
			top: 10px;
			right: 10px;
			font-size: 20px;
			color: #000;
			text-decoration: none;
	}

	.close:hover {
			color: #555;
	}

	.content {
			margin-top: 20px;
	}

	label {
			display: block;
			margin-bottom: 5px;
	}

	input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"],
button[type="submit"] {
	width: 100%;
	padding: 5px;
	margin-bottom: 5px;
	border: 1px solid #ccc;
	border-radius: 3px;
	box-sizing: border-box; /* Ensure padding is included in the width */
}

.popup {
	background: #f8f6f6;
	border-radius: 5px;
	width: 80%; /* Adjust as needed */
	max-width: 400px;
	padding: 5px;
	position: relative;
}


	button[type="submit"] {
			width: 100%;
			padding: 3px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			height: 33px;
	}

	button[type="submit"]:hover {
			background-color: #0056b3;
	}
</style>
</head>
<body>
<div id="popup" class="overlay">
	<div class="popup">
		<h6>श्री आयुर्वेद अपनाएं में आपका स्वागत है</h6>
			<h4>विशेषज्ञ से जुड़ें - कृपया यह फॉर्म भरें</h4>
			<a class="close" href="#">&times;</a>
			<div class="content">
					  <form   method="post">
							<label for="name">नाम:-</label>
							<input type="text" id="name" name="name" placeholder="नाम" required><br>

							<label for="contact_no">मोबाइल नंबर:-</label>
							<input type="text" id="contact_no" name="contact_no" placeholder="मोबाइल नंबर" required><br>

							<label for="address">पता:-</label>
							<input type="text" id="address" name="address"  placeholder="पता"  required><br>

							<label for="message">संदेश:-</label>
							<input type="text" id="message" name="message" placeholder="संदेश" required><br>
						
							<button id="button" type="submit" name="submit">Register</button>
                          </form>
			</div>
	</div>
</div><script>
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        window.location.href = "#popup";
    }, 3000); // Redirect to #popup after 3 seconds

    // Form validation
    var registrationForm = document.querySelector('#popup form'); // Select the form inside #popup
    registrationForm.addEventListener('submit', function(event) {
        var nameInput = document.getElementById('name');
        var contactNoInput = document.getElementById('contact_no');
        var addressInput = document.getElementById('address');
        var messageInput = document.getElementById('message');

        // Validate name field
        var nameRegex = /^[a-zA-Z\s]+$/;
        if (!nameRegex.test(nameInput.value.trim())) {
            alert('कृपया एक वैध नाम दर्ज करें।'); // Alert message in Hindi for valid name
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Validate phone number field
        var contactNoRegex = /^\d+$/;
        if (!contactNoRegex.test(contactNoInput.value.trim())) {
            alert('कृपया एक वैध मोबाइल नंबर दर्ज करें।'); // Alert message in Hindi for valid phone number
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Validate address field (optional)
        var addressValue = addressInput.value.trim();
        if (addressValue === '') {
            alert('कृपया एक पता दर्ज करें।'); // Alert message in Hindi for address
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Validate message field (optional)
        var messageValue = messageInput.value.trim();
        if (messageValue === '') {
            alert('कृपया एक संदेश दर्ज करें।'); // Alert message in Hindi for message
            event.preventDefault(); // Prevent form submission
            return;
        }
    });
});
</script>




	<?php
include('../frontend/layout/footer.php');
?>