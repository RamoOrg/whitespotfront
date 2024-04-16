 <?php
 include('../config/configDB.php');
 include('../config/configURL.php'); 
 include('../frontend/layout/header.php');
 ?>


<?php
if (isset($_POST['submit'])) {
    $your_name = $_POST['your_name'];
    $contact_no = $_POST['contact_no'];
    $address = $_POST['address'];
    $message = $_POST['message'];
     
    $sql = "INSERT INTO contact(id,your_name,contact_no,address,message)  VALUES ('', '$your_name', '$contact_no','$address','$message')";

    if ($conn->query($sql) === TRUE) {
        header('location:contact.php');
    } else {
        
    }
    $conn->close();
}
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $upload_url;?>images/pexels-maria-orlova-4906286.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-end">
					<div class="col-md-9 ftco-animate pb-5">
						<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
						<h1 class="mb-0 bread">About Us</h1>
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
	<br><br>

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                  
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57819.03133663688!2d85.56364416016326!3d25.07851243995584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f258f888310b2d%3A0xadeffb012e2235aa!2sKatrisarai%2C%20Bihar!5e0!3m2!1sen!2sin!4v1712725882535!5m2!1sen!2sin" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                           <form   method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name"  placeholder="Your Name"  name="your_name" >
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contact_no" placeholder="Contact No" name="contact_no">
                                        <label for="contact_no">Contact number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"  name="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php
include('../frontend/layout/footer.php');
?>

























